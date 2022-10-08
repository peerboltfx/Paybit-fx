<x-app-layout>
    <x-slot  name="header" >
       <div class="headers"><h3>Depositing</h3>
        <h2>{{ ($user->currency) ?? ('') }}  {{ ($user->amount) ?? ('00.00') }}</h2>
        <h3>referral bonus</h3>
        @if(!empty($referral))
        <h2>convert {{ ($user->currency) ?? ('00.00') }}  {{ ($user->amount * 0.2) ?? ('00.00') }} in {{ ($referral->currency) ?? ('00.00') }} (if not same currency)</h2>
    @else
    <h2>This User Does not Have referral</h2>
    @endif
    </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <a href="/storage/{{ auth()->user()->TempDeposit->photo }}"><img src="/storage/{{ auth()->user()->TempDeposit->photo }}" width='200px'></a>
            </a>
        </x-slot>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/validate/update/{{ ($user->id) }}">
            @csrf
            <div class="mt-4">
                <x-label for="plan" :value="__('plan')" />

                <x-input id="plan" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="plan" value="{{ ($user->plan) }}" required />
            </div>
            <div class="mt-4">
                <x-label for="gateway" :value="__('gateway')" />

                <x-input id="gateway" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="gateway" value="{{ ($user->gateway) }}" required />
            </div>
            <div class="mt-4">
                <x-label for="currency" :value="__('currency')" />

                <x-input id="currency" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="currency" value="{{ ($user->currency) }}" required />
            </div>
            <div class="mt-4">
                <x-label for="Amount" :value="__('Amount')" />

                <x-input id="amount" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="amount" value="{{ ($user->amount) }}" required />
            </div>

            <div class="mt-4">
                <x-label for="Acc_id" :value="__('Acc ID')" />

                <x-input id="acc_id" class="block mt-1 w-full" placeholder="248fesdu009xaq_083dhh" type="text" name="acc_id" value="{{($user->acc_id) }}" required />
            </div>

            <div class="mt-4">
                <x-label for="ref" :value="__('referral %')" />

                <x-input id="refer" class="block mt-1 w-full" placeholder="{{ ($user->currency) }}  {{ ($user->amount * 0.2) ?? ('00.00') }}" type="text" name="refer" value="" required />
            </div>
            <x-input id="referid" type="hidden" name="referid" value="{{ ($referral->id) ?? ('') }}" />


            <div class="flex items-center justify-end mt-4">
               

            <button  type="submit">validate <span>→</span></button>

            </div>
            @if (session('success'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('success')}}
            </div>
        @endif
        </form>
    </x-auth-card>
                </div>
    </div>
   
</x-app-layout>
