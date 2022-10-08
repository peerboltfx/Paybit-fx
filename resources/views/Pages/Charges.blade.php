<x-app-layout>
    <x-slot name="header">
    <div class="headers"><h3>Balance</h3>
        <h2>{{ (auth()->user()->validDeposit->currency) ?? ('USD') }} {{ (auth()->user()->validDeposit->growth) ?? (' 00.00') }}</h2>
        <div class="container-dash"><ul><li><a href="/Deposit">Deposit <span><i class="fa fa-credit-card-alt" aria-hidden="true"></i></span></a></li><li><a href="/deposit">Withdraw <span><i class="fa fa-university" aria-hidden="true"></i></span></a></li></ul></div>
    </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" enctype='multipart/form-data' action="/PaY/Charge/{{ ($user->id)}}">
         
            @csrf
            
        <div>
          
        <div class="mt-4"><x-label for="Wallet_addr" :value="__('Report')" />
        <p>{{ ($user->ChargesWarrant) }}</p>
    </div>
    <div class="mt-4"><x-label for="Wallet_addr" :value="__('Charge')" />
            <div class="table-2">
                <div class='tr-2'>
                    <div class="table-id2">Account Name</div>
                    <div class="table-content">{{ (auth()->user()->name)}}</div>

                </div>
                
                <div class='tr-2'>
                    <div class="table-id">Investment Plan</div>
                    <div class="table-content">{{($growth->plan)}}</div>

                </div>
                <div class='tr-2'>
                    <div class="table-id2">Investment Amount</div>
                    <div class="table-content">{{($growth->amount)}}{{($growth->currency)}}</div>

                </div>
                <div class='tr-2'>
                    <div class="table-id">Transaction Currency</div>
                    <div class="table-content">USD/{{($growth->currency)}}</div>

                </div>
                <div class='tr-2'>
                    <div class="table-id2">Investment Duration</div>
                    <div class="table-content">{{($growth->created_at->diffForHumans())}}</div>

                </div>
                <div class='tr-2'>
                    <div class="table-id">Phone No.</div>
                    <div class="table-content">{{ (auth()->user()->profiles->phone) ?? ('Null')}}</div>

</div>
                <div class='tr-2'>
                    <div class="table-id2">Email</div>
                    <div class="table-content">{{(auth()->user()->email)}}</div>

                </div>
                <div class='tr-2'>
                    <div class="table-id">Investment Status</div>
                    <div class="table-content">{{ ($growth->status) }}</div>

                </div>
                <div class='tr-2'>
                    <div class="table-id2">Withdrawal Amount</div>
                    <div class="table-content">{{(auth()->user()->withdrawal->amount)}}{{($growth->currency)}}</div>

                </div>
                <div class='tr-2'>
                    <div class="table-id">Withdrawal Status</div>
                    <div class="table-content {{(auth()->user()->withdrawal->status)}}-user">{{(auth()->user()->withdrawal->status)}}</div>
                </div>
                <div class='tr-2'>
                    <div class="table-id2">{{($user->Reason)}}</div>
                    <div class="table-content"> {{ ($user->Charge) }} {{($growth->currency)}}</div>
                </div>
</div>
<p class='w-full mr-10 mt-1'>Send {{ ($user->Charge) }} {{($growth->currency)}} to This Pefect money Address. Click to copy </p>
<div class="referral-container"> <input type="text" value="{{ ($user->Link)}}" name="" id="referral"><div id="btnCopy"><img src="{{ asset('./images/copy.png')}}" width="" alt=""></div></div>

    </div>
              
            <div class="mt-4">
                <x-label for="Wallet_id" :value="__('Wallet ID')" />
               
                <x-input id="wallet_id" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="wallet_id" value="" required />

            </div>

            <div class="mt-4">
                <x-label for="uploadproof" :value="__('upload proof')" />
               
                <input type="file" name="photo" id="photo">
            </div>

            
       
            <div class="mt-4">
            <button class="btn btn-primary" type="submit">Pay Charges</button>
            </div>
             @if (session('form'))
             
            <div class="mb-4 mt-4 font-medium text-sm text-green-600">
                {{ session('form')}}
            </div>
            @endif
           
</div>
        </form>
    </x-auth-card>
               
        </div>
    </div>
</x-app-layout>
