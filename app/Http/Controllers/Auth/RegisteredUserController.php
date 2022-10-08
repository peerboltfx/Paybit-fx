<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'referral' =>'',
            'currency' => '',
        ]);
        $referral = 0;

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'referral'=> $request->referral,
            'password' => Hash::make($request->password),
        ])
        );

        if(auth()->user()){
        return redirect('/register/update');
    }
    }

    public function update(){
        
        $id= auth()->user()->id;
        $name= auth()->user()->name;
        $id=urlencode(base64_encode( $id * (93348765432173462823423/572345123243442216789)));
        auth()->user()->validDeposit()->create(
           [ 'referral'=> $id ?? "empty" ,
            'amount'=> '0.0000',
            'status'=> 'disabled',
            'currency'=> 'BTC',
            'acc_id'=> '10',
            'plan'=> 'NULL',
            'gateway'=>'coinbase',
            'name'=>$name,
            ]
        );

        return redirect(RouteServiceProvider::HOME);
    }
}