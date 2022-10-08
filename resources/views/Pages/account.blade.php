<x-app-layout>
    <x-slot  name="header" >
    <h2><a href="/dashboard">Home/</a>Account</h2>
       <div class="headers"><h3>Balance</h3>
        <h2>{{ (auth()->user()->validDeposit->currency) ?? ('USD') }} {{ (auth()->user()->validDeposit->growth) ?? (' 00.00') }}</h2>
    </div>
    </x-slot>
    <div class="container">
   <div class="Account">
   <div class="col-lg-12">
   <div class="">
                    <div class="card-body">
                        <h4 class='head-h2'>Referral Link</h4>
                    <div class="referral-container"> <input type="text" value="https://paybitfx.com/referra/{{ (auth()->user()->validDeposit->referral) ?? ('')}}" name="" id="referral"><div id="btnCopy"><img src="{{ asset('./images/copy.png')}}" width="" alt=""></div></div>
                    </div>
                   
                    </div>

            <div class="row entity">


                    <div class="card card-rep">
                        <Typography align='center' class='head-h2' gutterBottom variant="h2" component="h2">
                            Other Acc Details
                                </Typography>
                   
                    <div class="card-body">
                        <h4>Name</h4>
                            {{ (auth()->user()->profile->firstname) ?? ('XXXXX')}}         {{ (auth()->user()->profile->lastname) ?? ('XXXXX')}}
                    </div>
                        <div class="card-body">
                            <h4>Phone</h4>
                                {{ (auth()->user()->phone) ?? ('XXXXX')}}
                        </div>
                        <div class="card-body">
                            <h4>Country</h4>
                                {{ (auth()->user()->country) ?? ('XXXXX')}}
                        </div>
                    </div>


                    
                    <div class="card card-rep">
                        <Typography align='center' class='head-h2' gutterBottom variant="h2" component="h2">
                            Investment Details
                                </Typography>
                    @if(!empty(auth()->user()->validDeposit))
                    <div class="card-body">
                        <h4>Plan</h4>
                            <h3 align='center'>{{  (auth()->user()->validDeposit->plan)}}</h3>
                    </div>
                        <div class="card-body">
                            <h4>Amount</h4>
                            <h3 align='center'>{{  (auth()->user()->validDeposit->amount)}}</h3>
                        </div>
                        <div class="card-body">
                            <h4>Currency</h4>
                            <h3 align='center'><img src='./images/{{  (auth()->user()->validDeposit->currency)}}.webp' class='currency' width='30px' /></h3>
                        </div>
                        <div class="card-body">
                            
                            <h3 class='text-sm'>{{  (auth()->user()->validDeposit->updated_at->diffForHumans())}}</h3>
                        </div>
                        @else
                        <h4>No Deposit Yet!</h4>
                        @endif
                    </div>
                </div>
                </div>

            
    </div>
   
   <div class="row">
    <div class="col-lg-6">
    <Typography align='center' gutterBottom variant="h2" component="h2">
        
                           <b> Deposited </b>
                                </Typography>
        <table class="tablet table-stripe">
            <tr class='trow'>
                    <td>ID</td>
                    <td>Status</td>
                    <td>time</td>
                    <td>Amount</td>
                    <td>Wallet</td>

            </tr>
            <tbody>
            @foreach( $using as $usage)
            @if(!empty($usage))
            <tr class='trow2' key="{{ $usage->id }}">
            <td>{{ ($usage->id) }}</td>
            <td>{{ ($usage->status) }}</td>
            <td>  {{ ($usage->updated_at->diffForHumans()) }}</td>
                <td>{{ ($usage->amount) }}</td>
                <td><img  src='./images/{{ ($usage->currency) }}.webp'  width='30px'/></td>


            </tr>
            @else
            <tr>
                <p>No Deposit Yet <a href="/Deposit">Click</a> to make your first deposit</p>
            </tr>
            @endif
            @endforeach
            </tbody>
           
        </table>
     
    </div>

   <div class="col-lg-6">
   <Typography align='center' gutterBottom variant="h2" component="h2">
                           <b> Withdrawal </b>
                                </Typography>
        <table class="tablet table-stripe">
            <tr class='trow'>
                    <td>Name</td>
                    <td>Amount</td>
                    <td>Wallet</td>

            </tr>
            <tbody>
            @foreach( $using as $usage)
            <tr class='trow2' key=''>
                <td>Someone Withraw {{ ($usage->created_at->diffForHumans()) }}</td>
                <td>{{ ($usage->amount) }}</td>
                <td><img  src='./images/{{ ($usage->currency) }}.webp'  width='30px'/></td>


            </tr>
            @endforeach
            </tbody>
        </table>
   </div>
   </div> <div class="data-link">

        </div>
   </div>
  
   </div>
    </x-app-layout>
