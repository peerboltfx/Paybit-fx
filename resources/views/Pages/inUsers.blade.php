<x-app-layout>
    <x-slot  name="header" >
       <div class="headers"><h3>Growth</h3>
        <h2>{{ ($user->currency) }}  {{ ($user->growth) ?? ('00.00') }}</h2>
         </div>
         <div class="header"><h3>Name</h3>
        <h2>{{ ($using->name) }}</h2>
         </div>
         <div class="header"><h3>Email</h3>
        <h2>{{ ($using->email) }}</h2>
         </div>
         <div class="header"><h3>Invested</h3>
        <h2>{{ ($user->amount) }}{{ ($user->currency) }}</h2>
         </div>
    </x-slot>

    <div class="py-12">
        
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

        <form method="POST" action="/investment/update/{{ ($user->id) }}">
            @csrf
            <div class="mt-4">
                <ol>
                @if($user->plan == 'Bronze')
              <li>Pay This {{ ($user->plan)}} investor: {{ ($user->amount * 0.30) }} {{ ($user->currency) }}</li> 
                @elseif($user->plan == 'Gold')
                <li>Pay This {{ ($user->plan)}} investor: {{ ($user->amount * 0.15) }} {{ ($user->currency) }}</li> 
                @elseif($user->plan == 'Diamond')
                <li>Pay This {{ ($user->plan)}} investor: {{ ($user->amount * 0.50) }}{{ ($user->currency) }}</li> 
                @elseif($user->plan == 'Platinum')
                <li>Pay This {{ ($user->plan)}} investor: {{ ($user->amount * 0.100) }}{{ ($user->currency) }}</li> 
                @endif
                <li>{{ ( 7 - $user->value ) }} times left to pay up this investor's growth</li>
                </ol>
        </div>
            <div class="mt-4">
                <x-label for="growth" :value="__('Coin Growth')" />

                <x-input id="amount" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="growth" value="" required />
            </div>


            <div class="flex items-center justify-end mt-4">
               

            <button  type="submit">validate <span>→</span></button>

            </div>
            @if (session('upgrade'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('upgrade')}}
            </div>
        @endif
        </form>
    
        @if($user->value >= 7)

            <a href="/investment/reinstate/{{ ($user->id) }}"><button  type="submit">refresh </button></a>
            @endif
    </x-auth-card>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/Charges/update/{{ ($user->user_id) }}">
            @csrf
            <div class="mt-4">
                <x-label for="growth" :value="__('Admin Wallet Address')" />

                <x-input id="" class="block mt-1 w-full" type="text" name="Link" value="Charges/Pay" required />
            </div>
            <div class="mt-4">
                <x-label for="growth" :value="__('Charge Amount')" />

                <x-input id="" class="block mt-1 w-full" type="text" name="Charge" value="" required />
            </div>

            <div class="mt-4">
                <x-label for="growth" :value="__('Charge Reason')" />

                <x-input id="" class="block mt-1 w-full" type="text" name="Reason" value="" required />
            </div>

            <div class="mt-4">
                <x-label for="growth" :value="__('Charge Report')" />

                <x-input id="" class="block mt-1 w-full h-40" type="text" name="ChargesWarrant" value="" required />
            </div>
            <div class="flex items-center justify-end mt-4">
               

            <button  type="submit">Charge Investor <span>→</span></button>

         

            </div>
            @if (session('message'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('message')}}
            </div>
        @endif
        </form> 


        </x-auth-card>

        @if(auth()->user()->Charges)
        @foreach(auth()->user()->Charges as $user)
        <div class="Charges bg-red">
            <h2>Charges...</h2>
            <div class="content">
                <h4>{{ ($user->id) }}</h4>
            </div>
        </div>
@endforeach
@endif

</div>
            </div>
                       
   
</x-app-layout>
