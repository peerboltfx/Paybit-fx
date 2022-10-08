<?php

namespace App\Http\Controllers;

use App\Models\validDeposit;
use App\Models\TempDeposit;
use App\Models\withdrawal;
use Illuminate\Http\Request;
use App\Models\User;



class ValidDepositController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\validDeposit  $validDeposit
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user=TempDeposit::where('user_id',auth()->user()->id)->get()->sortDesc();
    $user_withdrawal=withdrawal::where('user_id',auth()->user()->id)->get()->sortDesc();
 return view('/Pages/account', [
     'using'=> $user,
     'using_withdr'=> $user_withdrawal,
 ]);
    }
    public function shows()
    {
        $user=TempDeposit::all();
        $using=User::all();
        return view('/Pages/account', [
            'using'=> $user,
            'users'=>$using,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\validDeposit  $validDeposit
     * @return \Illuminate\Http\Response
     */
    public function edit(validDeposit $validDeposit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\validDeposit  $validDeposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, validDeposit $validDeposit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\validDeposit  $validDeposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(validDeposit $validDeposit)
    {
        //
    }
}
