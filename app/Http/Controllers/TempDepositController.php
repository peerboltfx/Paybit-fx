<?php

namespace App\Http\Controllers;

use App\Models\TempDeposit;
use App\Models\currency;
use Illuminate\Http\Request;

class TempDepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $user=auth()->user()->id;
        $users=TempDeposit::where('user_id',$user)->get()->last();
        return view('/Pages/deposit',[
            'deposit'=>$users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=$request->validate([
            'plan'=>'required',
            'currency'=>'required',
            'gateway'=>'required',
            'acc_id'=>'required',
            'amount'=>'required',
        ]);

        auth()->user()->TempDeposit()->create([
            'plan'=>$data['plan'],
            'gateway'=>$data['gateway'],
            'currency'=>$data['currency'],
            'amount'=>$data['amount'],
            'status'=>'pending',
        ]);
        $dep=TempDeposit::where('user_id',auth()->user()->id)->get()->last();
        $dep=$dep->id;

        return redirect('/depositStatus/'.$dep);
    }

    public function transaction(){
        $user=auth()->user()->id;
        $users=TempDeposit::all()->where('user_id',$user);
        return view('/Pages/transaction',[
            'deposits'=>$users,
        ]);

    }

    //Uploading a screenshot of payment to Confirm Payment
    public function uploadProof(Request $request)
    {
       $data= $request->validate([
           'photo'=>'required|image',
           '_token'=>'required',
       ]); //Requestion data from our post method

       
       $imagepath=$data['photo']->store('uploads','public');//Storing user uploaded image data in a child
       // folder in the public folder whenever Users has sumbitted there data
       auth()->user()->TempDeposit()->update(array_merge([
           'photo'=>$imagepath,
       ])); //storing User image name in the database
       return back()->with('status','successfully uploads Payment proof!');
    }

    public function show($reciept)
    {
        $reciept=TempDeposit::find($reciept);
        $wallet=currency::find(1);
       return view('/Pages/reciept' , [
           'reciept'=>$reciept,
           'Wallet'=>$wallet,
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TempDeposit  $tempDeposit
     * @return \Illuminate\Http\Response
     */
    public function edit(TempDeposit $tempDeposit)
    {
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TempDeposit  $tempDeposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TempDeposit $tempDeposit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TempDeposit  $tempDeposit
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user=TempDeposit::findOrFail($user);
        $user->delete($user);
        return redirect('/Deposit');
    }
}
