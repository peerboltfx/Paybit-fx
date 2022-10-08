<?php

namespace App\Http\Controllers;

use App\Models\withdrawal;
use App\Models\Charges;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\validDeposit;
use App\Mail\PaymentVerificationMail;
use Illuminate\Support\Facades\Mail;



class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages/withdrawal');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $user=auth()->user()->id;
        $charge=Charges::all()->where('user_id',$user)->first();
        
        $data=$request->validate([
            'currency'=>'',
            'wallet_addr'=> 'Required',
            'gateway' => 'Required',

        ]);

        if(empty($charge)){
       


        $currency=auth()->user()->validDeposit->currency;

        $user_balance=auth()->user()->validDeposit->growth;
            $query_withdrawal=auth()->user()->withdrawal()->create([
                'gateway' => $data['gateway'],
                'currency'=> $currency,
                'amount'=>  $user_balance,
                'wallet_addr'=>$data['wallet_addr'],
                'status'=>'pending',
            ]);

                        
            return back()->with('message', 'withdrawal-request');
    }
    else{
        $user_balance=auth()->user()->validDeposit->growth;
        $get=auth()->user()->id;
        $query_withdrawal=auth()->user()->withdrawal()->create([
            'amount'=>  $user_balance,
            'status'=>'pending',
        ]);

        return redirect('/Charges/Pay/'.$get);
    }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Charges($user)
    {
        $take=Charges::all()
        ->where('user_id',$user)
        ->first();
        $profile=validDeposit::all()
        ->where('user_id', $user)
        ->first()
        ;
        return view('Pages/Charges',[
            'user'=>$take,
            'growth'=>$profile,
        ]);


         $auth = Hash::make($request->password);
    }
    

  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function PayCharges($user)
    {
        $user=Charges::findOrFail($user);
        $data=request()->validate([
            'wallet_id'=>'required',
            'photo'=>'required | image' ,
        ]);

         $imagepath=$data['photo']->store('Charges','public');

        
        $user->update([
            'wallet_id'=>$data['wallet_id'],
            'photo' =>$imagepath,
        ]);
       
        return back()->with('form','Submitted . your withdrawal will be processed in after verifying charges. verification will take nothing less than 12hr');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function edit(withdrawal $withdrawal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function ConfirmPay($user){
        $user=withdrawal::findOrFail($user);

        $using=$user->user_id;
        $restart=User::all()->where('id',$using)->first();
        
        
      

        $users= $user->user_id;
        $users=User::where('id',$using)->first();
        $emails=$users->email;
        $names=$users->name;
        $amounts=$users->validDeposit->growth;
        $times=$users->validDeposit->updated_at->diffForHumans();
        $plans=$users->validDeposit->plan;
        $currencys=$users->validDeposit->currency;
        $wallets= $users->withdrawal->wallet_addr;
        $gateways= $users->withdrawal->gateway;
        $details=[
            'title'=>'Withdrawal Notification',
            'amount'=>$amounts,
            'time' => $times,
            'plan' => $plans,
            'currency' => $currencys,
            'wallet' => $wallets,
            'gateway'=> $gateways,
            'name'=> $names,
        ];

        Mail::to($emails)->send( new PaymentVerificationMail($details) );
        return back();
    }

    public function UserWithdrawal($user){
        $data=Request()->validate([
            'amount'=>'',
            'name'=>'',
            'currency'=>'',
            'acc_id'=>'',
            'time'=>'',
            'email'=>'',
        ]);
        $emails=$data['email'];
        $details=[
            'amount'=>$data['amount'],
           
            'currency' => $data['currency'],
            'wallet' => $data['acc_id'],
           
        ];
        Mail::to($emails)->send( new PaymentVerificationMail($details) );
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function destroy(withdrawal $withdrawal)
    {
        //
    }
}
