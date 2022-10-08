<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="PaybitFx is a business investment company established in the year 2019.">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:PaybitFx" content="" /> <!-- website name -->
	<meta property="og:PaybitFx.com" content="" /> <!-- website link -->
	<meta property="og:PaybitFx" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="../images/pb.png" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>PaybitFx</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Ubuntu:wght@300&display=swap" rel="stylesheet">   <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @if(!empty($direct))
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
	<link href="../css/magnific-popup.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">

    @endif
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
    <div class="spinning">
        <h3 >PaybitFx</h3>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
        </div>
        <img src="./images/pb.png" alt="" width="40px" srcset="">
    </div>
    <!-- end of preloader -->
    

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
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">INTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#callMe">TRADEVIEW</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#projects">INVESTMENT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/About">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
               
                    @if(empty(auth()->user()))
                    @if(empty($direct))
                    <button class="btn--outline options">
                    <a href="{{ route('register')}}">
                        {{ ('Register')}}
                       
                    </a>
                    </button>
                    @else
                    <button class="btn--outline options">
                    <a href="/register/{{ ($direct)}}">
                        {{ ('Register')}}
                       
                    </a>
                    </button>
                    @endif
                    <button class="btn--outline-sm options">
                    <a href="/login">
                        {{ ('Login')}}
                       
                    </a>
                    </button>
                    @else
                    <button class="btn--outline options">
                    <a href="/dashboard">
                        {{ ('Dashboard')}} 
                    </a>
                    </button>
                    <button class="btn--outline-sm options">
                     <a href="/logout">
                        {{ ('Logout')}} 
                    </a>
                    </button>
                    @endif

            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header"  class="header">
        <div class="header-content">
            <div class="containered">
                <div class="stream">
                    <div class="col-lg-12">
                        <div class="text-container">
                        <h1 data-aos="zoom-out-left"  data-aos-duration="1000" ><span id="js-rotating" >PAYBITFX, INVESTMENT, PLATFORM</span></h1>
                                                    <h2 data-aos="zoom-out-right"  data-aos-duration="700">Invest with us today!</h2>
                            <p class="p-headings p-large" data-aos="zoom-out-bottom"  data-aos-duration="800">Invest in a Leading, Professional, and Reliable Company. We provide you with financial solutions and help you on your goal to financial freedom. Take that bold step today and invest with us. We guarantee security of your investment. </p>
                            <a style="margin-bottom:0.5rem;" class="btn--outline page-scroll" href="#intro">get started</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
            <div class="row" >
                <div class="col-md-6">
                    <div class="container">
                    <div class="text-container">
                        <div class="section-title" data-aos-duration="1000"
    data-aos-easing="ease-in-out" data-aos="fade-up">About</div>
                        <h2 data-aos="fade-up" data-aos-duration="600"
    data-aos-easing="ease-in-out">Paybit<span class="dark">FX</span></h2>
                        <p data-aos="fade-left"
     
     data-aos-duration="700">We are an international financial company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.</p>
                        
                        <p data-aos="fade-left"
     
     data-aos-duration="800" class="testimonial-text">Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.</p>

                    </div> <!-- end of text-container -->
                    </div> <!-- end of container -->
                </div> <!-- end of col -->
                <div class="col-md-6">
                    <div class="image-container">
                        <img data-aos="fade-left"
     
     data-aos-duration="500" class="img-fluid" src="{{ asset('./images/connect.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
       
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <h2 data-aos="fade-bottom" data-aos-duration="500" style="text-align:center; color:rgb(235, 136, 23);margin-bottom:1rem;">Why Choose us</h2>
        <p  data-aos="fade-right" data-aos-duration="600" class="p-heading" style="color:black">Our clients are our partners and we can not imagine a better future for our company without helping them reach their objectives</p>
          
                <div class="row">
                    

                     <!-- Card -->
                     <div class="card col-md-3">
                        <span class="fa-stack">
                            <img src="../images/legal-paper.png" class="card1-img"/>
                        </span>
                        <div class="column">
                            <h4 class="card-title">Legal Company</h4>
                            <p>Our company conducts absolutely legal activities in the legal field. We are certified to operate investment business, we are legal and safe.</p>
                        </div>
                    </div>
                    <!-- end of card -->
 <!-- Card -->
                    <div data-aos="zoom-out-right"  data-aos-duration="600" class="card col-md-3">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <img src="../images/padlock.png" class="card1-img"/>
                        </span>
                        <div class="column">
                            <h4 class="card-title">Maximum Security</h4>
                            <p>We are trusted by a huge number of people. We are working hard constantly to improve the level of our security system and minimize possible risks.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div  data-aos="zoom-out-right"  data-aos-duration="800" class="card col-md-3">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <img src="../images/anonymity.png" class="card1-img"/>
                        </span>
                        <div class="column">
                            <h4 class="card-title">Anonymity</h4>
                            <p>Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money – this is one of the most convenient ways of cooperation.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                      <!-- Card -->
                      <div  data-aos="zoom-out-right"  data-aos-duration="1000" class="card col-md-3">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <img src="../images/fast-delivery.png"  class="card1-img"/>
                        </span>
                        <div  class="column">
                            <h4 class="card-title">Quick withdrawal</h4>
                            <p>Our all retreats are treated spontaneously once requested. There are high maximum limits. The minimum withdrawal amount is only $10.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                     <!-- Card -->
                     <div data-aos="zoom-out-right"  data-aos-duration="1200" class="card col-md-3">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <img src="../images/referral-program.png"  class="card1-img" />
                        </span>
                        <div class="column">
                            <h4 class="card-title">Referral program</h4>
                            <p>We are offering a certain level of referral income through our referral program. you can increase your income by simply refer a few people.</p>
                        </div>
                    </div>
                    <!-- end of card -->
<!-- Card -->
                    <div data-aos="zoom-out-right" data-aos-duration="1400" class="card col-md-3">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <img src="../images/headphones.png"  class="card1-img" />
                        </span>
                        <div class="column">
                            <h4 class="card-title">24/7 support</h4>
                            <p>Years of programming experience has made it possible to create cross-platform applications specifically designed for a number of digital exploits.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div data-aos="zoom-out-right"  data-aos-duration="1800" class="card col-md-3">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <img src="../images/server.png" class="card1-img" />
                        </span>
                        <div class="column">
                            <h4 class="card-title">Dedicated server</h4>
                            <p>We are using a dedicated server for the website which allows us exclusive use of the resources of the entire server.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- Card -->
                    <div data-aos="zoom-out-right"  data-aos-duration="2000" class="card col-md-3">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <img src="../images/ssl.png" class="card1-img" />
                        </span>
                        <div class="column">
                            <h4 class="card-title">SSL Secured</h4>
                            <p>Comodo Essential-SSL Security encryption confirms that the presented content is genuine and legitimate.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                      <!-- Card -->
                      <div data-aos="zoom-out-right" data-aos-duration="2200" class="card col-md-3">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <img src="../images/ddos.png" class="card1-img" />
                        </span>
                        <div class="column">
                            <h4 class="card-title">DDOS Protection</h4>
                            <p>We are using one of the most experienced, professional, and trusted DDoS Protection and mitigation provider.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->
    <hr>
    <div class="card-3">
      
            <h2>~ How it Works ~</h2>
      
      
               <div class="row">
               <div data-aos="fade-left" data-aos-duration="500" class=" card-33">
               <h2><img src="../images/Element/signUp.png" width='60px' alt=""></h2>
                   <p class="text-space">Create Your Account</p>
               </div>
               <div data-aos="fade-left" data-aos-duration="600"  class=" card-33">
                   <h2><img src="../images/Element/deposit.png" width='60px' alt=""></h2>
                   <p class="text-space">Make a Deposit</p>
               </div>
               <div data-aos="fade-left" data-aos-duration="700"  class=" card-33">
               <h2><img src="../images/Element/growth.png" width='60px' alt=""></h2>
                   <p class="text-space">Watch Your Earning Grow</p>
               </div>
               <div data-aos="fade-left" data-aos-duration="500"  class=" card-33">
               <h2><img src="../images/Element/withdraw.png" width='60px' alt=""></h2>
                   <p class="text-space">Withdraw Profit Instantly</p>
               </div>
               </div>
           </div>

    <!-- Services -->
    <div id="services" class="cards-2">
        
            <div class="row">
                <div class="col-lg-12">
                    <h2 data-aos="fade-bottom" data-aos-duration="500" >Investment Plan</h2>
                    <p data-aos="fade-right" data-aos-duration="600"  class="p-heading"><span class="dark">To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</span></p>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
         
         
           
        </div> <!-- end of container -->
            <div class="cantainer">
        <div class="col-lg-12">
                    <div class="row">

                    <div class="card plan-card">
                        <div class="card-body">
                            <div class="image-filter"><img src="../images/ingots.png" width="50px" srcset=""></div>
                           <h2>BRONZE</h2>
                                <div class="contents"><ul>
                                    <li>$100 - $1000</li>
                                    <li>4% Profit Daily</li>
                                    <li>24Hrs Virtual assistance</li>
                                </ul>
                            <div class="page-croll"><div class="btn-solid-reg"><a href="/Deposit">>> get started</a></div></div>
                            </div>
                        </div>
                    </div>
                     <!-- end of card -->

                     <div class="card plan-card">
                     <div class="card-body">
                            <div class="image-filter"><img src="../images/ingots.png" width="50px" srcset=""></div>
                           <h2>GOLD</h2>
                                <div class="contents"><ul>
                                    <li>$1500 and above</li>
                                    <li>10% Profit in 65 Minutes</li>
                                    <li>24Hrs Virtual assistance</li>
                                </ul>
                            <div class="page-croll"><div class="btn-solid-rog"><a href="/Deposit">>> get started</a></div></div>
                            </div>
                        </div>
                    </div>
 <!-- end of card -->

                    <div class="card plan-card">
                    <div class="card-body">
                            <div class="image-filter"><img src="../images/diamond.png" width="50px" srcset=""></div>
                           <h2>DIAMOND</h2>
                                <div class="contents"><ul>
                                    <li>$100 - $1000</li>
                                    <li>4% Profit Daily</li>
                                    <li>24Hrs Virtual assistance</li>
                                </ul>
                                <div class="page-croll"><div class="btn-solid-rog"><a href="/Deposit">>> get started</a></div></div>
                            </div>
                        </div>
                    </div>
 <!-- end of card -->

                    <div class="card plan-card">
                    <div class="card-body">
                            <div class="image-filter"><img src="../images/platinum.png" width="50px" srcset=""></div>
                           <h2>PLATINUM</h2>
                                <div class="contents"><ul>
                                    <li>$10000 above</li>
                                    <li>5% Profit for 30 Days</li>
                                    <li>Instant withdrawal</li>
                                </ul>
                                <div class="page-croll"><div class="btn-solid-reg"><a href="/Deposit">>> get started</a></div></div>
                            </div>
                        </div>
                    </div>
                     <!-- end of card -->

                    </div>
                    <!-- end of row -->
</div>
                </div>
    </div> <!-- end of cards-2 -->
    <!-- end of services -->

    <!-- Testimonials -->
    <div class="slider">
       
            <div class="row">
                <div class="col-lg-12">
                    <h2>Testimonials</h2>
                    <p class="p-heading">Our clients are our partners and we can not imagine a better future for our company without helping them reach their objectives</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                  
                <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card ">
                                        <div  style="background:blue;"  class="card-img">J</div>
                                        <div class="testimonial-author">Jude Thorn - Founder</div>
                                        <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                        <div class="moment">20 mins ago</div>
                                        <div class="card-body">
                                            <div class="testimonial-text">Seamless transaction, great services, way to go, this is my second withdrawal, thumbs up PaybitFx.</div>
                                            <div class="google">
                                                <p style="margin-top:1rem;margin-bottom:0;">
                                                    Posted on
                                                </p>
                                                <p style="color :blue; font-size:30px;">
                                                  G<span style="color : red;">o</span><span  style="color : rgb(240, 156, 0);">o</span>g<span style="color :green;">l</span><span style="color : rgb(240, 156, 0);">e</span>    
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card ">
                                    <div  style="background:brown;"  class="card-img">M</div>
                                        <div class="testimonial-author">Marsha Singer</div>
                                        <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                        <div class="moment">20 mins ago</div>
                                        <div class="card-body">
                                            <div class="testimonial-text">I purchased the Gold service plan few months ago and I renewed the contract each week. </div>
                                            <div class="google">
                                                <p style="margin-top:1rem;margin-bottom:0;">
                                                    Posted on
                                                </p>
                                                <p style="color :blue; font-size:30px;">
                                                  G<span style="color : red;">o</span><span  style="color : rgb(240, 156, 0);">o</span>g<span style="color :green;">l</span><span style="color : rgb(240, 156, 0);">e</span>    
                                                </p>

                                            </div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/client1.jpg" alt="alternative">
                                        <div class="testimonial-author">Patel Suresh </div>
                                        <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        <div class="moment">21h ago</div>
                                        <div class="card-body">
                                            <div class="testimonial-text">Great site for making money, i want to invite all my friends and have their referral bonuses.</div>
                                            <div class="google">
                                                <p style="margin-top:1rem;margin-bottom:0;">
                                                    Posted on
                                                </p>
                                                <p style="color :blue; font-size:30px;">
                                                  G<span style="color : red;">o</span><span  style="color : rgb(240, 156, 0);">o</span>g<span style="color :green;">l</span><span style="color : rgb(240, 156, 0);">e</span>    
                                                </p>

                                            </div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/client2.jpg" alt="alternative">
                                        <div class="testimonial-author">Ronald Spice </div>
                                        <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        <div class="moment">5 days ago</div>
                                        <div class="card-body">
                                            <div class="testimonial-text">At the beginning I thought the prices are a little high for what they offer but they over deliver each and every time.</div>
                                            <div class="google">
                                                <p style="margin-top:1rem;margin-bottom:0;">
                                                    Posted on
                                                </p>
                                                <p style="color :blue; font-size:30px;">
                                                  G<span style="color : red;">o</span><span  style="color : rgb(240, 156, 0);">o</span>g<span style="color :green;">l</span><span style="color : rgb(240, 156, 0);">e</span>    
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                    <div  style="background:green;"  class="card-img">L</div>
                                    <div class="testimonial-author">Lindsay Rune</div>
                                    <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                        <div class="moment">1h ago</div>
                                        <div class="card-body">
                                            <div class="testimonial-text">Although the intrest rates arent as extravagant as others i heard of, you guys deliver just as promised!</div>
                                            <div class="google">
                                                <p style="margin-top:1rem;margin-bottom:0;">
                                                    Posted on
                                                </p>
                                                <p style="color :blue; font-size:30px;">
                                                  G<span style="color : red;">o</span><span  style="color : rgb(240, 156, 0);">o</span>g<span style="color :green;">l</span><span style="color : rgb(240, 156, 0);">e</span>    
                                                </p>

                                            </div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/client3.jpg" alt="alternative">
                                        <div class="testimonial-author">Gary</div>
                                        <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        <div class="card-body">
                                        <div class="moment">3 days ago</div>

                                            <div class="testimonial-text">Honestly bitcoin is the best, cant imagine what type of currency brings so much profit so fast without stress! kudos, i am really impressed with your platform so far.</div>

                                            <div class="google">
                                                <p style="margin-top:1rem;margin-bottom:0;">
                                                    Posted on
                                                </p>
                                                <p style="color :blue; font-size:30px;">
                                                  G<span style="color : red;">o</span><span  style="color : rgb(240, 156, 0);">o</span>g<span style="color :green;">l</span><span style="color : rgb(240, 156, 0);">e</span>    
                                                </p>

                                            </div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                                  <!-- Slide -->
                                  <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/client4.jpg" alt="alternative">
                                        <div class="testimonial-author">Annastecia</div>
                                        <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        <div class="card-body">
                                        <div class="moment">3 days ago</div>

                                            <div class="testimonial-text">Awesome and legit cryptocurrency investment program, never taught it would be this easy and true, Well i already have experienced first hand the power of Cryptocurrency trading.</div>

                                            <div class="google">
                                                <p style="margin-top:1rem;margin-bottom:0;">
                                                    Posted on
                                                </p>
                                                <p style="color :blue; font-size:30px;">
                                                  G<span style="color : red;">o</span><span  style="color : rgb(240, 156, 0);">o</span>g<span style="color :green;">l</span><span style="color : rgb(240, 156, 0);">e</span>    
                                                </p>

                                            </div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                  <!-- Slide -->
                                  <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/client5.jpg" alt="alternative">
                                        <div class="testimonial-author">Robert Griffin</div>
                                        <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        <div class="card-body">
                                        <div class="moment">3 days ago</div>

                                            <div class="testimonial-text">Very very impressive, easy platform to increase income, am still trying to understand how exactly you guys do it, would love to learn to trade please.</div>

                                            <div class="google">
                                                <p style="margin-top:1rem;margin-bottom:0;">
                                                    Posted on
                                                </p>
                                                <p style="color :blue; font-size:30px;">
                                                  G<span style="color : red;">o</span><span  style="color : rgb(240, 156, 0);">o</span>g<span style="color :green;">l</span><span style="color : rgb(240, 156, 0);">e</span>    
                                                </p>

                                            </div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->


                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                         

                </div> <!-- end of col -->
           
       <!-- end of container -->
   

    </div>
</div>
</div>
</div>

  <div class="tradingview-widget-container">
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
                {
                "proName": "FOREXCOM:SPXUSD",
                "title": "S&P 500"
                },
                {
                "proName": "FOREXCOM:NSXUSD",
                "title": "Nasdaq 100"
                },
                {
                "proName": "FX_IDC:EURUSD",
                "title": "EUR/USD"
                },
                {
                "proName": "BITSTAMP:BTCUSD",
                "title": "BTC/USD"
                },
                {
                "proName": "BITSTAMP:ETHUSD",
                "title": "ETH/USD"
                }
            ],
            "showSymbolLogo": true,
            "colorTheme": "light",
            "isTransparent": false,
            "displayMode": "regular",
            "locale": "en"
            }
            </script>

            <!-- TradingView Widget END -->
                </div>
     
   <div class="row ">
        <div class="calculator col-md-6">
        <h1 styl='font-weight:700'><b>Profit <span class="color">Calculator</span></b></h1>
            <p class="p-heading">You must know the calculation before investing in any plan, so you never make mistakes. Check the calculation and you will get as our calculator says.</p>
       
              
                   
                    <div class="form-group">
                    <label for="plan">Profit amount</label>
                    <select name="plan" class="form-control-input" id="plan">
                        <option value="">--select plan--</option>
                            <option value="0.04">Silver plan</option>
                            <option value="0.10">Gold plan</option>
                            <option value="0.25">Diamond plan</option>
                            <option value="0.05">Platinum plan</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="amount">amount</label>
                        <input type="text" class="form-control-input" onchange="display()" placeholder="amount" name="amount" id="amount">
                      
                    </div>
                   
                   >
                    <div class="form-group">
                        <label for="profit">Profit amount</label>
                    <input  class="form-control-input" placeholder="amount" name="profit" id="profit">
                    </div>
               
             

        </div>

        <div class='col-md-6' style="padding:2rem 0rem;width:100%;display:block">
 <!-- TradingView Widget BEGIN -->
      

    <!-- Details 1 -->
	<div id="details" class="accordion">
		<div class="area-1">
        <h2>Market Overview</h2>
       <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "light",
  "dateRange": "12M",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "width": "100%",
  "height": "100%",
  "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
  "plotLineColorFalling": "rgba(33, 150, 243, 1)",
  "gridLineColor": "rgba(240, 243, 250, 1)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
  "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
  "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
  "tabs": [
    {
      "title": "Indices",
      "symbols": [
        {
          "s": "FOREXCOM:SPXUSD",
          "d": "S&P 500"
        },
        {
          "s": "FOREXCOM:NSXUSD",
          "d": "Nasdaq 100"
        },
        {
          "s": "FOREXCOM:DJI",
          "d": "Dow 30"
        },
        {
          "s": "INDEX:NKY",
          "d": "Nikkei 225"
        },
        {
          "s": "INDEX:DEU30",
          "d": "DAX Index"
        },
        {
          "s": "FOREXCOM:UKXGBP",
          "d": "FTSE 100"
        }
      ],
      "originalTitle": "Indices"
    },
    {
      "title": "Commodities",
      "symbols": [
        {
          "s": "CME_MINI:ES1!",
          "d": "S&P 500"
        },
        {
          "s": "CME:6E1!",
          "d": "Euro"
        },
        {
          "s": "COMEX:GC1!",
          "d": "Gold"
        },
        {
          "s": "NYMEX:CL1!",
          "d": "Crude Oil"
        },
        {
          "s": "NYMEX:NG1!",
          "d": "Natural Gas"
        },
        {
          "s": "CBOT:ZC1!",
          "d": "Corn"
        }
      ],
      "originalTitle": "Commodities"
    },
    {
      "title": "Bonds",
      "symbols": [
        {
          "s": "CME:GE1!",
          "d": "Eurodollar"
        },
        {
          "s": "CBOT:ZB1!",
          "d": "T-Bond"
        },
        {
          "s": "CBOT:UB1!",
          "d": "Ultra T-Bond"
        },
        {
          "s": "EUREX:FGBL1!",
          "d": "Euro Bund"
        },
        {
          "s": "EUREX:FBTP1!",
          "d": "Euro BTP"
        },
        {
          "s": "EUREX:FGBM1!",
          "d": "Euro BOBL"
        }
      ],
      "originalTitle": "Bonds"
    },
    {
      "title": "Forex",
      "symbols": [
        {
          "s": "FX:EURUSD"
        },
        {
          "s": "FX:GBPUSD"
        },
        {
          "s": "FX:USDJPY"
        },
        {
          "s": "FX:USDCHF"
        },
        {
          "s": "FX:AUDUSD"
        },
        {
          "s": "FX:USDCAD"
        }
      ],
      "originalTitle": "Forex"
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
        </div> 
          </div>
</div>   
<hr>

<h2 style='text-align:center;width:100%;'>~PaybitFX best investment company~</h2>
                <div class="row">
                    <div class="col-md-6">
                                    <!-- Accordion -->
            <div class="accordion">
            <div class="accordion-container" id="accordionOne">
                <h2>Frequently Asked <span class="color">Questions</span></h2>
                <div class="accordion-body">
                We answer some of your Frequently Asked Questions regarding our platform. If you have a query that is not answered here, Please contact us.</div>
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="circle-numbering">1</span><span class="accordion-title">When can i deposit/withdraw from my investment account</span>
                        </span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="accordion-body">
                        Deposit and withdrawal are available for at any time. Be sure, that your funds are not used in any ongoing trade before the withdrawal. The available amount is shown in your dashboard on the main page of Investing platform. Deposit and withdrawal are available for at any time. Be sure, that your funds are not used in any ongoing trade before the withdrawal. The available amount is shown in your dashboard on the main page of Investing platform.            </div>
                    </div>
                </div> <!-- end of item -->
            
                <div class="item">
                    <div id="headingTwo">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                            <span class="circle-numbering">2</span><span class="accordion-title">How can i check my account balance</span>
                        </span>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                        <div class="accordion-body">
                        You can see this anytime on your accounts dashboard. You can see this anytime on your accounts dashboard.                        </div>
                    </div>
                </div> <!-- end of item -->
            
                <div class="item">
                    <div id="headingThree">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                            <span class="circle-numbering">3</span><span class="accordion-title">I lost my password how do i retrieve it?</span>
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                        <div class="accordion-body">
                        Visit the password reset page, type in your email address and click the `Reset` button. Visit the password reset page, type in your email address and click the `Reset` button.               </div>
                    </div>
                </div> <!-- end of item -->
            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->

		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->
  


   

               

    <div class="col-md-6">
    <!-- Call Me -->
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">Update Me</div>
                        <h2 class="white">Subscribe to our NEWSLETTER</h2>
                        <p class="white">By filling the form you are about subscribing to our News Channel to get a personalized updates about on trading options.</p>
                        <ul class="list-unstyled li-space-lg white">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">It's very easy just fill in the form and submit.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">While recieving updates, You can become enthusiastic on a professional trading option.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Don't hesitate to email us for any questions or inquiries</div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                   
                    <!-- Call Me Form -->
                    <form action="/save/newsletter" method="POST">
                       @csrf
                    
                       @method('post')
                    <div class="form-group">
                            <input type="email" class="form-control-input" id="lemail" name="email" required>
                            <label class="label-control" for="lemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox white">
                            <input type="checkbox" id="lterms" value="Agreed-to-Terms" name="Email" required>I agree with peerbolt's stated <a class="white" href="privacy-policy.html">Privacy Policy</a> and <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Subscribe</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of call me form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->
    </div>
    </div>
    </div>


    <!-- Projects -->
	<div id="projects" class="filter">
    
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Transaction</div>
                    <h2>our recent transactions lately</h2>
                    <p class="p-heading">Here is the log of the most recent transactions including withdraw and deposit made by our users.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            </div> <!-- end of container -->
            <div class="row">
            <div class="contents-container">
                      <table>
                          <tr class="thead">
                              <td>Name</td>
                              <td>Amount</td>
                              <td>Wallet</td>
                          </tr>
                          <tr class="tbody">
                              <td>Harr blunt</td>
                              <td>$ 150</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Habidash</td>
                              <td>$ 1500	</td>
                              <td><img src='../images/ETH.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Eclastons</td>
                              <td>$ 500</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>mastotachs</td>
                              <td>$ 2,000</td>
                              <td><img src='../images/litecoin.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Gabandivochv</td>
                              <td>$ 1300</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Annastecia</td>
                              <td>$ 800</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Gideon</td>
                              <td>$ 4,000</td>
                              <td><img src='../images/litecoin.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Sabatour</td>
                              <td>$ 500</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                         
                      </table>
                  </div>
                    

                  <div class="contents-container">
                      <table>
                          <tr class="thead">
                              <td>Name</td>
                              <td>Amount</td>
                              <td>Wallet</td>
                          </tr>
                          <tr class="tbody">
                              <td>Harr blunt</td>
                              <td>$ 150</td>
                              <td><img src='../images/btc.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Habidash</td>
                              <td>$ 1500	</td>
                              <td><img src='../images/ETH.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Eclastons</td>
                              <td>$ 500</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>mastotachs</td>
                              <td>$ 2,000</td>
                              <td><img src='../images/litecoin.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Gabandivochv</td>
                              <td>$ 1300</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Annastecia</td>
                              <td>$ 800</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Gideon</td>
                              <td>$ 4,000</td>
                              <td><img src='../images/litecoin.webp' width='30px' /></td>
                          </tr>
                           <tr class="tbody">
                              <td>Sabatour</td>
                              <td>$ 500</td>
                              <td><img src='../images/BTC.webp' width='30px' /></td>
                          </tr>
                         
                      </table>
                  </div>
            </div> <!-- end of row -->
    <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    

   

    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="./images/mountain.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>We're Passionate About Delivering Growth Services</h2>
                        <p>Our goal is to provide the right business growth services at the appropriate time so companies can benefit from the created momentum and thrive for a long period of time</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Everything we recommend has direct positive impact</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">You will become an important partner of our company</div>
                            </li>
                        </ul>

                        <!-- Counter -->
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="2871">1</div>
                                <div class="counter-info">members<span><img src="./images/user.png" alt="alternate" width="25px"></span></div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="34">1</div>
                                <div class="counter-info">Deposited <span><img src="./images/btc.png" alt="alternate" width="25px"></span></div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="54">1</div>
                                <div class="counter-info">withdraw<span><img src="./images/btc.png" alt="alternate" width="25px"></span></div>
                            </div>
                            
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->      
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->
   </div>



   
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About PeerboltFX</h4>
                        <p class="white">We're passionate about delivering the best business growth services for companies just starting out as startups or industry players that have established their market position a long tima ago.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
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
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="#">peerboltfx</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
   
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/App.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('js/scripts.js') }}"></script> <!-- Custom scripts -->
    @if(!empty($direct))
    <script src="../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->

    <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="../js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="../js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../js/scripts.js"></script> <!-- Custom scripts -->    @endif

    <script>
   AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 100, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease-in-out', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
  </script>
</body>

</html>