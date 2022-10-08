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
        <div class="col-md-6">
           
           <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="Plan-object">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mt-4">
                        <label for="Email">  Email</label>
                <input id="email" class="block mt-1 w-full  plan-object-element" placeholder="" type="text" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
            <label for="password">  Password</label>

                <input id="password" class="block mt-1 w-full  plan-object-element" placeholder="" type="text" name="password" :value="old('password')" required />
            </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn--outline">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
     
        @if(empty(auth()->user()))
      <div class="container-log">
     @if (empty($direct))
                                    <a class="btn btn-link" href="{{ route('register')}}">{{ __('Register') }}</a>
                                @else
                                <a class="btn btn-link" href="/register/{{ ($direct) ?? ('') }}">{{ __('Register') }}</a>
                                
                                 @endif
                               
                                   
                                    </div>
                                  
      @endif  
      </div>
    </div>
</div>
</x-auth-card>
</x-guest-layout>