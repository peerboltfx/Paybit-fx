<x-app-layout>
    <x-slot  name="header" >
       <div class="headers"><h3>User</h3>
        <h2>{{ ($user->name)  }}  </h2>
       
    </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
               

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/user/update/{{ ($user->id) }}">
            @csrf
            <div class="mt-4">
                <x-label for="plan" :value="__('Name')" />

                <x-input id="plan" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="plan" value="{{ ($user->name) }}"  />
            </div>
            <div class="mt-4">
                <x-label for="gateway" :value="__('Time')" />

                <x-input id="gateway" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="gateway" value="time" />
            </div>
            <div class="mt-4">
                <x-label for="currency" :value="__('currency')" />

                <x-input id="currency" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="currency" value="BTC"  />
            </div>
            <div class="mt-4">
                <x-label for="currency" :value="__('Email')" />

                <x-input id="currency" class="block mt-1 w-full" placeholder="" type="mail" name="email" value="" />
            </div>
            <div class="mt-4">
                <x-label for="Amount" :value="__('Amount')" />

                <x-input id="amount" class="block mt-1 w-full" placeholder="10,000 USD" type="text" name="amount" value="{{ ($user->amount) }}"  />
            </div>

            <div class="mt-4">
                <x-label for="Acc_id" :value="__('Acc ID')" />

                <x-input id="acc_id" class="block mt-1 w-full" placeholder="248fesdu009xaq_083dhh" type="text" name="acc_id" value="{{($user->acc_id) }}"  />
            </div>


            <div class="flex items-center justify-end mt-4">
               

            <button  type="submit">validate <span>→</span></button>

            </div>
            @if (session('success'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('success')}}
            </div>
        @endif
        </form>
  
                </div>
    </div>
   
</x-app-layout>
