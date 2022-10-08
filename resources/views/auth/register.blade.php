<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <link rel="stylesheet" href="{{ asset('css/apps.css')}}">
        <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                      <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="/register">
                          
                        @csrf

                        <div class="mt-4">
                <x-label for="Name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" placeholder="" type="text" name="name" :value="old('name')" required />
            </div>

            <div class="mt-4">
                <x-label for="Email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" placeholder="" type="text" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="Password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" placeholder="" type="password" name="password" :value="old('password')" required />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('password')" />

                <x-input id="password_conf" class="block mt-1 w-full" placeholder="" type="password" name="password_confirmation" :value="old('password_confirmation')" required />
            </div>

            
            <div class="mt-4">

                            @if(!empty($direct))
                            <button type="submit" name="referral" value="{{ ($direct) }}" class="btn btn--outline register-btn">
                                    {{ __('Register') }}
                                </button>
                @else
                <button type="submit" class="btn btn--outline register-btn">
                                    {{ __('Register') }}
                                </button>

                @endif
<a  class="btn btn-link" href="{{ route('login') }}">Already have an account?</a>
                            </div>
                        
                    </form>
                </div>
            </div>
       
      </div> 
    </div>
</div>
</x-auth-card>
</x-guest-layout>










