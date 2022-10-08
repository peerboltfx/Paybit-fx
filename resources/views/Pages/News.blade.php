<x-app-layout>
    <x-slot  name="header" >
    <h2><a href="/dashboard">Home/</a>Account</h2>
       <div class="headers"><h3>Balance</h3>
        <h2>{{ (auth()->user()->validDeposit->currency) ?? ('USD') }} {{ (auth()->user()->validDeposit->growth) ?? (' 00.00') }}</h2>
    </div>
    </x-slot>
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
	<link href="../css/magnific-popup.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">


    <div class="col-lg-12">
    <!-- Call Me -->
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="section-title">Update Me</div>
                        <h2 class="white">post news</h2>
                        <p class="white">whats the latest update.</p>
                        
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-12">
                   
                    <!-- Call Me Form -->
                    <form action="/post/newsletter" method="POST"  enctype='multipart/form-data'>
                       @csrf
                    
                       @method('post')
                    <div class="form-group">
                            <input type="text"  style='color:black;' class="form-control-input" id="lemail" name="header" required>
                            <label class="label-control" for="lemail">Header</label>
                            <div class="help-block with-errors"></div>

                        </div>
                        <div class="form-group">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name='post' id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your Post</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="Photo">Photo</label>
                        <input type="file" name="photo" id="photo">
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

    </x-app-layout>
