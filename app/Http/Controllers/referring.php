<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\validDeposit;

use App\Models\User;


class referring extends Controller
{

   


    public function index ($direct){
            $users=validDeposit::all()
            ->where( 'referral',$direct)
            ->first();
            if(!empty($users)){
            $users = $users->referral;
        
  
return view('/welcome',
     [
         'direct'=>$users,
     ]);
            }
            else{
                return view('/welcome');
            }
     }
      

    
 
 
    

    public function direct($direct){
      $users=validDeposit::all() 
      ->where('referral',$direct)
      ->first();
            $userss=$users ->referral;
            $using=User::where('referral',$userss)->get()->count();

        
        
    
  
return view('auth/register',
     [
         'direct'=>$userss,
         'directing'=>$using,
     ]);
     
     

    
 }

 public function referring(){

   
     
     

    
 }
}
