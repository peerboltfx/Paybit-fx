<?php

namespace App\Http\Controllers;

use App\Models\currency;
use Illuminate\Http\Request;
use App\Models\withdrawal;
use App\Models\User;
use App\Models\News;
use App\Models\TempDeposit;
use App\Models\validDeposit;
use App\Mail\Withdrawalmailing;
use Illuminate\Support\Facades\Mail;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=request()->validate([
            'post'=> 'required',
            'header'=>'required',
            'photo'=>'required|image',
            '_token'=>'required',
        ]);
            $imagepath=$data['photo']->store('uploads','public');
            auth()->user()->News()->create(array_merge([
                'photo'=>$imagepath,
                'header'=>$data['header'],
                'post'=>$data['post'],
            ]));

        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($user)
    {
        $user=News::findOrFail($user);
        return view('/Read',[
            'post'=>$user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function ConfirmPay($user){
        $user=withdrawal::findOrFail($user);

        $using=$user->user_id;
        $restart=User::all()->where('id',$using)->first();
        
        
        $restart->validDeposit->update([
            'growth'=> '0.000',
            'status'=> 'pending',
            'amount'=>'0.000',
            'currency'=>'',
            ]);
        $user->update([
            'status'=> 'confirmed',
        ]);

        $users= $user->user_id;
        $users=User::where('id',$using)->first();
        $email=$users->email;
        $name=$users->name;
        $amount=$users->validDeposit->growth;
        $time=$users->validDeposit->updated_at->diffForHumans();
        $plan=$users->validDeposit->plan;
        $currency=$users->validDeposit->currency;
        $wallet= $users->withdrawal->wallet_addr;
        $gateway= $users->withdrawal->gateway;
        $detail=[
            'title'=>'Transaction slip',
            'Amount'=>$amount,
            'time' => $time,
            'plan' => $plan,
            'currency' => $currency,
            'wallet' => $wallet,
            'gateway'=> $gateway,
            'name'=> $name,
        ];

        Mail::to($email)->send( new Withdrawalmailing($detail) );
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, currency $currency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(currency $currency)
    {
        //
    }
}
