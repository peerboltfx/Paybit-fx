<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PaybitFx') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/function.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script> <!-- Custom scripts -->
    <script src="https://kit.fontawesome.com/44da6499ee.js" crossorigin="anonymous"></script>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap-grid.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/apps.css') }}" rel="stylesheet">

    


</head>
<body data-spy="scroll" data-target=".fixed-top">
    <div id="app">
        <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html"></a> -->

        <!-- Image Logo -->
       <H2> <a class="navbar-brand logo-image" href="/"><img src="../images/pb.png" class="logo" alt=""></a></H2>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/Account">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{Route('Deposit')}}">Deposit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{Route('Withdrawal')}}">Withdrawal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/transaction">Transactions</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ Route('Profile') }}">Edit Profile</a>
                </li>
                @if(auth()->user()->email == 'autoorji1@gmail.com')

<li>
    <a href="{{route('Admin')}}">
        Members table
    </a>
    
</li>
<li>
    <a href="{{route('Temp')}}">
      Admin Payment Verification
    </a>
    
</li>
<li>
    <a href="{{route('Growth')}}">
         Users Investment Growing
    </a>
    
</li>
<li>
    <a href="{{route('PayInvest')}}">
         Pay Users
    </a>
    
</li>
<li>
    <a href="{{route('gatewaySwitch')}}">
         Change wallet
    </a>
    
</li>


@endif

                    <li class="nav-item">
                    <button class="btn--outline-sm options">
                    <a href="/Account">
                        {{ (auth()->user()->name)}}   
                    </a>
                    </button>
                    </li>
                    <li class="nav-item">
                    <button class="btn--outline options">
                    <a href="/logout">
                        {{ ('Logout')}}
                       
                    </a>
                    </button>
                    </li>
            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->



             
        <div class="all-main">
        <header class="shadow">
                <div class="">
                    @if(auth()->user())
                    {{ $header }}
                    @endif
                </div>
            </header>
        <main class="py-4 general">
            @if(auth()->user())
           {{$slot}}
           @endif
        </main>
        </div>
        </div>
        </div>
        </div>
    </div>
     <!-- Footer -->
     <div class="footer">
       
            <div class="row">
               
                 <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Tools</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">Serviceprovider.tech</a>
                            </li>
                            <li>
                               <a class="white" href="#your-link">influencers.com</a>
                            </li>
                            <li class="media">
                                <a class="white" href="#your-link">optimizer.net</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">unicorns.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">staffmanager.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">association.gov</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    
                </div> <!-- end of col -->
                <div class="col-md-4 about">
                        <h4>Accepted Currency</h4>
                        <div class="row white">
                       <img src="../images/btc.jpg" alt="" srcset="">
                        <img src="../images/btc.jpg"  alt="" srcset="">
                        <img src="../images/btc.jpg"  alt="" srcset="">
                     <img src="../images/btc.jpg" alt="" srcset="">
                 
                    </div> <!-- end of text-container -->
                    
            </div> <!-- end of row -->
            
            <div class="col-md-4">
                <div class="text-container about">
                        <h4></h4>
                       <p class="white"> <img src="../images/live-chat.png" width='70px' alt="" srcset="">Ask Whatever you want, Our live support is online to reply.</p>
                    </div> 
                </div>
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->

 <!-- Copyright -->
 @if(!empty(auth()->user()))
 <div class="copyright">
            <div class="row copying">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="/">peerboltfx</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
       
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    @endif
   
</body>

</html>
