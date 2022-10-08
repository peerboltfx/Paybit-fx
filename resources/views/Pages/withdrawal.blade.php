<x-app-layout>
    <x-slot name="header">
    <div class="headers"><h3>Balance</h3>
        <h2>{{ (auth()->user()->validDeposit->currency) ?? ('USD') }} {{ (auth()->user()->validDeposit->growth) ?? (' 00.00') }}</h2>
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

        <form method="POST" action="/withdrawal/withdraw">
            @csrf

            
        <div>
          
<div class="mt-4">
                <x-label for="Gateway" :value="__('Gateway')" />

                <select name="gateway" class="block mt-1 w-full" id="gateway">
            <option value="">--select--</option>
            <option value="{{ (auth()->user()->validDeposit->gateway) ?? ('') }}">{{ (auth()->user()->validDeposit->gateway ) ?? ('') }}</option>
            </select>
            </div>    
            <div style="display:flex;">           
<div class="mt-4">
                <x-label for="Amount" :value="__('Amount')" />
               
                <x-input id="amount" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="" value="{{ (auth()->user()->validDeposit->growth) }}" disabled />
                </div>
       
<div class="mt-4 m-1">
                <x-label for="currency" :value="__('Currency')" />
               
                <x-input id="amount" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="" value="{{ (auth()->user()->validDeposit->currency) }}" disabled />
                </div>

            </div>
              
            <div class="mt-4">
                <x-label for="Wallet_addr" :value="__('Wallet Address')" />
               
                <x-input id="wallet_addr" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="wallet_addr" value="" required />

            </div>

            
           @if(auth()->user()->validDeposit->value >= 7  && !empty(auth()->user()->validDeposit))

         
            <button class="btn btn--outline" type="submit">proceed to checkout <span>→</span></button>
           
             @if (session('message') == 'withdrawal-request')
            <div class="mb-4 font-medium text-sm text-green-600">
                Your Request to withdraw {{ (auth()->user()->validDeposit->growth) }} {{ (auth()->user()->validDeposit->currency) }} has been sent!
            </div>
        @endif
            @else
            <p class="mb-4 font-medium text-sm text-yellow-600" style="padding:1rem;">Investment still in progress, withdrawal will be available in {{( 7 - auth()->user()->validDeposit->value ) }} days time</p>
            @endif
            </div>
           
        </form>
    </x-auth-card>
               
        </div>
    </div>
</x-app-layout>
