<x-app-layout>

    <x-slot  name="header" >
        <div class="row">
            <div  class="border">
       <div class="headers"><h3>Main account</h3>
        <h2>{{ (auth()->user()->validDeposit->currency) ?? ('USD') }} {{ (auth()->user()->validDeposit->growth) ?? (' 00.00') }}</h2>
    </div>
    </div>
    <div  class="border">
       <div class="headers"><h3>Investment growth</h3>
        <h2>USD {{ (auth()->user()->validDeposit->grow) ?? (' 00.00') }}</h2>
    </div>
    </div>
   
<div  class="border">
       <div class="headers"><h3>Referral bonus</h3>
        <h2>$ {{ (auth()->user()->validDeposit->growth) ?? (' 00.00') }}</h2>
    </div>
    </div>
    <div class="border">
    <div  class="headers"><h3>Last deposit</h3>
    <h2>USD {{ ($deposit->amount) ?? (' 00.00') }}</h2>
    </div>
</div>
<div class="border">
    <div class="headers"><h3>Last withdrawal</h3>
    <h2><span> {{ (auth()->user()->withdrawal->currency) ?? ('USD') }}</span> {{ ($withdrawal->amount) ?? (' 00.00') }}</h2>
    </div>
</div>

<div class="border">
    <div class="headers"><h3>Transaction Detail</h3>
    <h2><span> <a href="/transaction" >See More...</a></h2>
    </div>
</div>
    </div>
    <div class="card-body">
                        <h4 class='head-h2'>Referral Link</h4>
                    <div class="referral-container"> <input type="text" style='color:black;text-align:center;' value="https://paybitfx.com/referra/{{ (auth()->user()->validDeposit->referral) ?? ('')}}" name="" id="referral"><div id="btnCopy"><img src="{{ asset('./images/copy.png')}}" width="" alt=""></div></div>
                    </div>

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
                    <div class="card-item">{{ (auth()->user()->created_at->format('Y.m.d H:i:s')) }}</div>
                </div>
                <div class="card-list">
                    <div class="card-item">Updation Date:</div>
                    <div class="card-item">{{ (auth()->user()->updated_at->diffForHumans()) }}</div>
                </div>
            </div>
            </div>
            <div class="card-2">
        <div class="card-body">
            <h2>Investment Details</h2>
            <span><img src="../images/btc.png" width='50px' alt=""></span>
            <div class="card-list">
                <div class="card-item"> Currency :</div>
                <div class="card-item">{{ (auth()->user()->validDeposit->currency) ?? ('USD') }}</div>
                </div>
                <div class="card-list">
                <span><img src="../images/atm.png" width='50px' alt=""></span>
                    <div class="card-item">Deposited :</div>
                    @if(!empty(auth()->user()->validDeposit))
                    <div class="card-item">{{ (auth()->user()->validDeposit->created_at->diffForHumans()) }}</div>
                    @else
                    <div class="card-item">No Deposit Yet <div class="btn btn--outline">Fund Now</div></div>
                    @endif
                </div>
                <span><img src="../images/affiliate.png" width='50px' alt=""></span>
                <div class="card-list">
                    <div class="card-item">Referral</div>
                    <div class="card-item">{{ ($referral->count()) }} / 3</div>
                </div>
               
               
               
            </div>
            </div>
        </div>
    </div>
    </x-slot>
    
        <img src="./images/pb.png" alt="" width="40px" srcset="">
    </div>

   <div class="container"> 
       
      <div class="col-lg-12 Access">
<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
</div>
        <!-- TradingView Widget BEGIN -->
        <div class="row">
            <div class="col-lg-6 Access">
<script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
<coingecko-coin-converter-widget  coin-id="bitcoin" currency="usd" background-color="#ffffff" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>
</div>
<div class="col-lg-6 Access">
     <script src="https://widgets.coingecko.com/coingecko-coin-list-widget.js"></script>
<coingecko-coin-list-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" locale="en"></coingecko-coin-list-widget>
 </div>
</div>

    
       <div class="col-lg-12 Access">
           <h2>Market Overview</h2>
       <!-- TradingView Widget BEGIN -->
<script src="https://widgets.coingecko.com/coingecko-coin-market-ticker-list-widget.js"></script>
<coingecko-coin-market-ticker-list-widget  coin-id="bitcoin" currency="usd" locale="en"></coingecko-coin-market-ticker-list-widget>
       </div>

       </div>
 
 
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60528853067c2605c0b9997d/1f11692iq';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </div>

</x-app-layout>
