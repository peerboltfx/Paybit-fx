<x-app-layout>
    <x-slot name="header">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
            <div class="card">
        <div class="card-body">
            <div class="card-list">
                <div class="card-item">Username :</div>
                <div class="card-item">{{ (auth()->user()->name) }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Reg Date :</div>
                    <div class="card-item">{{ (auth()->user()->created_at->diffForHumans()) }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Email</div>
                    <div class="card-item">{{ (auth()->user()->email) }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Phone</div>
                    <div class="card-item">{{ (auth()->user()->profile->phone) ?? ('NULL') }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Reg Date :</div>
                    <div class="card-item">{{ (auth()->user()->created_at->diffForHumans()) }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Updation Date:</div>
                    <div class="card-item">{{ (auth()->user()->updated_at->diffForHumans()) }}</div>
                </div>
            </div>
            </div>

            <div class="card">
        <div class="card-body">
            <div class="card-list">
                <div class="card-item">Firstname :</div>
                <div class="card-item">{{ (auth()->user()->profile->firstname) ?? ('NULL') }}</div>
                </div>
               <div class="card-list">
                <div class="card-item">Lastname :</div>
                <div class="card-item">{{ (auth()->user()->profile->lastname) ?? ('NULL') }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Phone :</div>
                    <div class="card-item">{{ (auth()->user()->created_at->diffForHumans()) }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Country</div>
                    <div class="card-item">{{ (auth()->user()->profile->country) ?? ('NULL') }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Phone</div>
                    <div class="card-item">{{ (auth()->user()->profile->phone) ?? ('NULL') }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Updation Date:</div>
                    @if(!empty(auth()->user()->profile))
                    <div class="card-item">{{ (auth()->user()->profile->created_at->diffForHumans()) }}</div>
                @endif
                </div>
            </div>
            </div>
            </div>
            </div>

    </x-slot>


   
                
        <x-slot name="logo">
            update profile
    </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/update.user">
            @csrf

            <!-- Name -->
            <div class="row">
        <div class="col-md-8">
    <div class="Plan-object">
            <div class="mt-4">
            <label for="Firstname">  Firstname</label>

                <input id="firstname" class="block mt-1 w-full plan-object-element" placeholder="10,000 USD" type="text" name="firstname"  value="{{ (auth()->user()->profile->firstname) ?? ('')}}" />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
            <label for="Lastname">  Lastname</label>

            <input id="lastname" class="block mt-1 w-full plan-object-element" placeholder="10,000 USD" type="text" name="lastname"  value="{{ (auth()->user()->profile->lastname) ?? ('')}}"/>
            </div>

            <div class="mt-4">
            <label for="Phone">  Phone</label>

                <input id="phone" class="block mt-1 w-full  plan-object-element" type="text" name="phone" value="{{ (auth()->user()->profile->phone) ?? ('')}}"  />
            </div>
            <div class="mt-4">
                 <label for="Country">  Country</label>
                 <input id="country" class="block mt-1 w-full  plan-object-element" type="text" name="country" value="{{ (auth()->user()->profile->country) ?? ('')}}"  />
               
            </div>
            
            </div>
            
            </div>
            <div class="col-md-4">
    <div class="Plan-object">
            <div class="mt-4">
            <label for="Username">  Username</label>

                <input id="name" class="block mt-1 w-full plan-object-element" placeholder="10,000 USD" type="text" name="name" value="{{ (auth()->user()->name) ?? ('')}}" />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
            <label for="Email">  Email</label>

            <input id="email" class="block mt-1 w-full plan-object-element" placeholder="10,000 USD" type="text" name="email" value="{{ (auth()->user()->email) ?? ('')}}" />
            </div>

            <div class="mt-4">
            <label for="Phone">  BTC Wallet Address</label>

                <input id="phone" class="block mt-1 w-full  plan-object-element" type="text" name="acc_id" value="{{ (auth()->user()->acc_id) ?? ('')}}"  />
            </div>
            
            
            

           
            
            </div>
            <div class="flex items-center justify-end mt-4">
               

               <button class="btn btn--outline">
                   {{ __('update') }}
               </button>
           </div>
        </div>
        
        </form>
    
    </div>
</x-app-layout>
