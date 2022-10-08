<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\TempDeposit;
use App\Models\withdrawal;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route:: get('/alternate' , [API::class , 'view']);

Route:: get('/TemporaryDeposit' , function (){
    return TempDeposit::all(); 
});

Route:: get('/WithdrawalPage' , function (){
    return withdrawal::all(); 
});
