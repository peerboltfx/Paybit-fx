<x-app-layout>
    <x-slot name="header">
       <div class="identity">
           <h2> {{(auth()->user()->email)}}</h2>
       </div>
    </x-slot>


    
            
    <div class="Plan-object">
        <x-slot name="logo">
            update profile
    </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @if($currency->currency)
        <form method="POST" action="/crypto.user">
            @else
            <form method="POST" action="/crypto.user.update">
                @endif
            @csrf

            <!-- Name -->
            <div>
                <x-label for="Bitcoin" :value="__('Bitcoin wallet')" />

                <x-input id="btc" class="block mt-1 w-full" type="text" name="BTC" value="{{ ($currency->BTC) }}"  autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="Ethereum" :value="__('Ethereum wallet')" />

                <x-input id="ETH" class="block mt-1 w-full" type="text" name="ETH" value="{{ ($currency->ETH) ?? ('')}}"  />
            </div>

            <div class="mt-4">
                <x-label for="Litecoin" :value="__('Litecoin wallet')" />

                <x-input id="LTC" class="block mt-1 w-full" type="text" name="LTC" value="{{ ($currency->LTC) ?? ('')}}"  />
            </div>

            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('update') }}
                </x-button>
            </div>
            @if (session('success'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('success')}}
            </div>
        @endif
        </form>
</div>
               
        </div>
    </div>
</x-app-layout>
