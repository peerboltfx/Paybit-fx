<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\TempDeposit;
use App\Models\validDeposit;
use App\Models\withdrawal;
use App\Models\Charges;
use App\Models\currency;
use App\Mail\PaymentVerificationMail;
use Illuminate\Support\Facades\Mail;





class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view(){
        $users=User::all();
        $TempDep=TempDeposit::all();
        $validDep=validDeposit::all();
        if(auth()->user()->email == 'autoorji1@gmail.com'){
        return view('Pages/admin' , [
            'users' => $users ,
        ]);
        }
        else{
            return redirect('/Account');
        }
    }
    public function viewTemp(){
          $TempDep=TempDeposit::all();
        if(auth()->user()->email == 'autoorji1@gmail.com'){
        return view('Pages/adminRequest' , [
            'tempDep'=>$TempDep,
        ]);
        }
        else{
            return redirect('/Account');
        }
    }
    public function deleteTemp($user){
        $user=TempDeposit::findOrFail($user);
        $user->delete($user);
        return redirect('AdminTable');
    }

    public function ValidateDep($user){
        $user =TempDeposit::findOrFail($user);
        
        $id=$user->user_id;
        $id=User::findOrFail($id);

        $referral=$id->referral;

        $referral=validDeposit::where('referral', $referral)->get()->first();
        


        return view('Pages/validate' , [
            'user'=>$user,
            'referral'=>$referral,
        ]);


        
        
    }

    public function validating($user) {
        $id=TempDeposit::findOrFail($user);
        $data=request()->validate([
            'plan'=>'required',
            'gateway'=>'required',
            'amount'=>'required',
            'acc_id'=>'required',
            'currency'=>'required',
            'refer'=>'required',
            'referid'=>'',
        ]);
        $user=$id->user_id;
        $user=User::findOrFail($user);

        $id= $id->id;
        $id=urlencode(base64_encode( $id *(93348765432173462823423/572345123243442216789)));

        $referral=$data['referid'];

       
           
            
           
        $user->validDeposit()->create([
            'amount'=>$data['amount'],
            'acc_id'=>$data['acc_id'],
            'currency'=>$data['currency'],
            'plan'=>$data['plan'],
            'gateway'=>$data['gateway'],
            'status'=>'enabled',
            'referral'=>$id,
        ]);


        $user->TempDeposit()->update([
            'status'=>'recieved',
        ]);

        $referral=validDeposit::find($referral);
        if(!empty($referral)){
            
            $amount=$referral->amount;
            $amount+=$data['refer'];

        $referral->update([
            'growth' => $amount,
        ]);
        }
        

        return redirect('/email/'.$user->id);

    }

    public function Email($user){
        $user=User::findOrFail($user);
        $email=$user->email;
        $name=$user->name;
        $amount=$user->TempDeposit->amount;
        $acc_id=$user->TempDeposit->acc_id;
        $time=$user->TempDeposit->created_at->diffForHumans();
        $referral=$user->validDeposit->referral;
        $plan=$user->TempDeposit->plan;
        $currency=$user->TempDeposit->currency;
        $details=[
            'title'=>'Transaction slip',
            'body'=>'Congratulation You have made a deposit',
            'Amount'=>$amount,
            'time' => $time,
            'wallet_id' => $acc_id,
            'referral' => $referral,
            'plan' => $plan,
            'currency' => $currency,
            'name' => $name,
        ];
        Mail::to($email)->send(new PaymentVerificationMail($details));
    }

    public function deleteInvestment($user){
        $user=TempDeposit::findOrFail($user);

        $user->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function Invest(){
        $users=validDeposit::all();
        return view('Pages/growing' , [
            'growth' => $users,
        ]);
    }

    public function investmentUser($user){
        $user=validDeposit::findOrFail($user);
        $using=$user->user_id;
        $using=User::findOrFail($using);
        $charge=Charges::all()
        ->where('user_id',$using)
        ->first();
        
        return view('Pages/inUsers' , [
            'user' => $user,
            'using'=>$using,
            'charge'=>$charge,
        ]);
    }

    public function updateInvestment($user){
        $data=request()->validate([
            'growth'=>'required',
        ]);
       $user=validDeposit::findOrFail($user);
       $value=$user->value;
       $value+=1;
        $add=$user->growth;
        $add+=$data['growth'];

       $user->update(
           [
               'growth'=>$add,
               'value'=>$value,
               'grow'=>$value,
           ]
       );

       return back()->with('upgrade','upgraded successfully!');
    }
    public function updatereinstate($user){
        $user=validDeposit::findOrFail($user);
        $user->update([
            'plan'=> '',
            'amount'=>'',
            'status'=>'disabled',
            'currency'=>'USD',
            'growth'=>'00.00',
            'wallet_id'=> 'null',
        ]);
    }
    public function delete($user){
        $user=User::findOrFail($user);
        $user->delete($user);
        return redirect('Dedicated/Admin');
    }


    public function charges($user){
        $data=request()->validate([
            'Charge'=> 'required',
            'Link' => 'required',
            'ChargesWarrant' => 'required',
            'Reason'=>'required',
        ]);

        $user=User::findOrFail($user);

        $user->Charges()->create([
            'ChargesWarrant'=> $data['ChargesWarrant'],
            'Charge' => $data['Charge'],
            'Link' => $data['Link'],
            'Reason'=>$data['Reason'],
        ]);

        $sent='Bill sent successfully!';
        return back()->with('message',$sent);

    }

    public function Pay(){
        $users=withdrawal::all();
        return view('Pages/payUsers', [
            'users'=>$users,
        ]);
    }

   
    
    public function currency(){

         if(auth()->user()->email == 'autoorji1@gmail.com'){
             $currency=currency::all()->first();
            return view('Pages/gateway',['currency'=>$currency,]);
        
         }
    }
    protected function updateCurrency(){
        $data=request()->validate([
            'BTC'=> '',
            'ETH' => '',
            'LTC' => '',
            ]);
               
             
                    auth()->user()->currency()->create([
                'BTC'=>$data['BTC'],
                'ETH'=>$data['ETH'],
                'LTC'=>$data['LTC'],
            ]);
    return back()->with('success','you have successfully changed the crypto wallet(s)'); 
       }
       
       protected function updateCurrency2(){
        $data=request()->validate([
            'BTC'=> '',
            'ETH' => '',
            'LTC' => '',
            ]);
               
             
                    auth()->user()->currency()->update([
                'BTC'=>$data['BTC'],
                'ETH'=>$data['ETH'],
                'LTC'=>$data['LTC'],
            ]);
    return back()->with('success','you have successfully changed the crypto wallet(s)'); 
       }
       
       public function user($user){
           $user=User::findOrFail($user);
           return view('Pages/user',
        [
            'user'=>$user,
        ]);
       }
}
