<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValidDepositController;
use App\Http\Controllers\TempDepositController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\referring;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CurrencyController;
use App\Mail\PaymentVerificationMail;
use App\Models\validDeposit;
use App\Models\withdrawal;
use App\Models\TempDeposit;
use App\Models\News;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email/{user}', [AdminController::class, 'Email'])->name('Email');


Route::get('/dashboard', function () {
    if( auth()->user()->validDeposit)
            {           
    $users=auth()->user()->validDeposit->referral;
    $withdraw=withdrawal::where('user_id',auth()->user()->id)->get()->last();
    $deposit=TempDeposit::where('user_id',auth()->user()->id)->get()->last();
    $users=validDeposit::where('referral',$users);
    return view('dashboard',[
        'referral'=> $users,
        'withdraw'=> $withdraw,
        'deposit'=> $deposit,
    ]);
}
else{
    return view('dashboard'); 
}
})->middleware(['auth'])->name('dashboard');

Route::get('/Profile' , function () {
    return view('Pages.profile');
})->middleware(['auth'])->name('Profile');

Route::get('/signup/', [referring::class, 'referring'] )->name('register');

Route::get('register/referral/{direct}', [referring::class, 'direct'] );

Route::get('referral/{direct}', [referring::class, 'index'] );

Route::post('update.user' , [ ProfileController::class , 'create']);

Route::post('/transfer' , [ TempDepositController::class , 'create']);

Route::post('/Charges/update/{user}' , [ AdminController::class , 'Charges']);

Route::post('/withdrawal/withdraw' , [ WithdrawalController::class , 'create']);

Route:: get('/depositStatus/{reciept}' , [ TempDepositController::class , 'show'])->name('Deposit');

Route:: get('/Deposit' , [ TempDepositController::class , 'index'])->name('Deposit');

Route:: get('/About' , function(){
    return view('/Review');
});

Route::post('/uploadProof', [ TempDepositController::class , 'uploadProof']);

Route:: get('/withdrawal' , [ WithdrawalController::class , 'index'])->name('Withdrawal');

Route:: get('/Charges/Pay/{user}' , [ WithdrawalController::class , 'Charges'])->name('Charge');

Route:: post('/PaY/Charge/{user}' , [ WithdrawalController::class , 'PayCharges']);

Route:: get('/transaction' , [ TempDepositController::class , 'transaction'])->name('transaction');

Route:: get('/Account' , [ ValidDepositController::class , 'show'])->name('Account');


Route:: get('/Account/Coined' ,function(){
    return view('Pages/account');
});

Route:: middleware('auth')->get('/Account/Ongoing' ,function(){
    return view('Pages/account');
});


Route:: get('/Dedicated/Admin' , [ AdminController::class , 'view'])->name('Admin');

Route:: get('/Dedicated/AdminTable' , [ AdminController::class , 'viewTemp'])->name('Temp');

Route:: get('/validate/delete/{user}' , [ AdminController::class , 'deleteTemp']);

Route:: get('/validate/{user}' , [ AdminController::class , 'ValidateDep']);

Route:: get('/restart/{user}' , [ TempDepositController::class , 'destroy']);

Route::post('/validate/update/{user}' , [ AdminController::class , 'validating']);

Route:: get('/Dedicated/investmentgrowth' , [ AdminController::class , 'Invest'])->name('Growth');

Route:: get('/Dedicated/PayUsers' , [ AdminController::class , 'Pay'])->name('PayInvest');

Route:: get('/investment/{user}' , [ AdminController::class , 'investmentUser']);

Route::post('/investment/update/{user}' , [ AdminController::class , 'updateInvestment']);

Route::post('/investment/delete/{user}' , [ AdminController::class , 'deleteInvestment']);

Route::post('/investment/reinstate/{user}' , [ AdminController::class , 'updatereinstate']);

Route:: get('/delete/{user}' , [ AdminController::class , 'delete']);

Route:: get('/ConfirmPay/{user}' , [ WithdrawalController::class , 'ConfirmPay']);

Route:: get('/gatewaySwitch' , [ AdminController::class , 'currency'])->name('gatewaySwitch');

Route:: post('crypto.user', [ AdminController::class , 'updateCurrency']);

Route:: post('crypto.user.update', [ AdminController::class , 'updateCurrency2']);

Route:: get('/UsersMail' , [ AdminController::class , 'currency'])->name('gatewaySwitch');

Route:: get('/user/{user}' , [ AdminController::class , 'user']);

Route:: post('/user/update/{user}',[ WithdrawalController::class , 'UserWithdrawal']);

Route::get('/paided', function (){
    return view('email.Withdrawal');
});


Route::get('/News',function(){
    $post=News::all();
    return view('/News',[
        'post'=>$post,
    ]);
});

Route::get('/Newspost',function(){
    $user=auth()->user()->email;
    if($user== 'autoorji1@gmail.com'){
    return view('/Pages/News');
}
});

Route::get('/News-{user}', [ CurrencyController::class , 'view']);

Route::post('/post/newsletter', [ CurrencyController::class , 'index']);

require __DIR__.'/auth.php';
