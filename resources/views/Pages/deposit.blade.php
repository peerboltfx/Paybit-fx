<x-app-layout>
    <x-slot name="header">
    <h2><a href="/dashboard">Home/</a>Deposit</h2>
    <div class="headers"><h3>Balance</h3>
        <h2>{{ (auth()->user()->validDeposit->currency) ?? ('USD') }} {{ (auth()->user()->validDeposit->growth) ?? (' 00.00') }}</h2>
    </div>
    </x-slot>

    <div class="">
                <div class="">
                <div>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/transfer">
            @csrf

            
            <div class="Plan-object">
               <input type="radio" name="plan" value='Bronze' class='radio' id="">
               <label for="Bronze">  10% after 24 Hours</label>
               <div class="plan-table">
                <table border='0'>
                    <tr>
                        <td>Plan</td>
                        <td>Spent Amount ($) </td>
                        <td>Profit (%)</td>
                    </tr>
                    <tr>
                        <td>Bronze Plan</td>
                        <td>$50.00 - $1000.00 </td>
                        <td>15.00</td>
                    </tr>
                </table>
                </div>
            </div>

            <div class="Plan-object">
               <input type="radio" name="plan" value='Gold' class='radio' id="">
               <label for="Gold">  15% after 24 Hours</label>
               <div class="plan-table">
                <table border='0'>
                    <tr>
                        <td>Plan</td>
                        <td>Spent Amount ($) </td>
                        <td>Profit (%)</td>
                    </tr>
                    <tr>
                        <td>Gold Plan</td>
                        <td>$500.00 - $5000.00 </td>
                        <td>15.00</td>
                    </tr>
                </table>
                </div>
            </div>

            <div class="Plan-object">
               <input type="radio" name="plan" value='Silver'class='radio' id="">
               <label for="Diamond">  30% after 48 Hours</label>
               <div class="plan-table">
                <table border='0'>
                    <tr>
                        <td>Plan</td>
                        <td>Spent Amount ($) </td>
                        <td>Profit (%)</td>
                    </tr>
                    <tr>
                        <td>Diamond Plan</td>
                        <td>$1000.00 - $50000.00 </td>
                        <td>20.00</td>
                    </tr>
                </table>
                </div>
            </div>

            <div class="Plan-object">
               <input type="radio" name="plan" value='Platinum' class='radio' id="">
               <label for="Platinum">  100% after 48 Hours</label>
               <div class="plan-table">
                <table border='0'>
                    <tr>
                        <td>Plan</td>
                        <td>Spent Amount ($) </td>
                        <td>Profit (%)</td>
                    </tr>
                    <tr>
                        <td>Platinum Plan</td>
                        <td>$50.00 - $1000.00 </td>
                        <td>100.00</td>
                    </tr>
                </table>
                </div>
            </div>

            <!-- Email Address -->
            <div class="Plan-object">
            <div class="row">

             <div class="col-lg-6" id="currency">
             <label for="Currency">  Currency</label>

            <select name="currency" class="block mt-1 w-full plan-object-element" id="plan">
            <option value="">CURRENCY</option>
            <option value="XRP">USD <img src="./images/euro.png" alt=""></option>
            <option value="BTC">BTC <img src="./images/btc.png" alt=""></option>
            <option value="ETH">ETH <img src="./images/ETH.webp" alt=""></option>
        </option>
</select>
</div>

            <div class="col-lg-6">
            <label for="Gateway">  Gateway</label>

                <select name="gateway" class="block mt-1  w-full  plan-object-element" id="gateway">
            <option value="">--select--</option>
            <option value="Perfect Money">Perfect Money</option>
            <option value="Coinbase">Coinbase</option>
            <option value="trustWallet">trustWallet</option>
            <option value="TRNX Wallet">TRNX Wallet</option>
            </select>
            </div> 
</div>   
    <div class="row">
            <div class="col-lg-6">
            <label for="Amount">  Amount</label>

                <input id="amount" class="block mt-1 w-full plan-object-element" placeholder="10,000 USD" type="text" name="amount" :value="old('amount')" required />
            </div>
            <div class="col-lg-6">
            <label for="Amount">  Wallet_Address</label>

                <input id="amount" class="block mt-1 w-full plan-object-element" placeholder="10,000 USD" type="text" name="acc_id" :value="old('acc_id')" required />
            </div>
     
            </div>
            <div class="flex items-center justify-end mt-4">
               
            @if(empty($deposit))
            <button class=" btn btn--outline" type="submit">proceed to checkout <span>→</span></button>
            @elseif($deposit->status == 'recieved')
            <button class="btn btn--outline" type="submit">proceed to checkout <span>→</span></button>
            @elseif($deposit->status == 'pending')
            <button class="btn btn--outline" disabled type="submit">proceed to checkout <span>→</span></button>
            <p style="color:white;text-shadow:0px 0px 20px red;"><a href="/depositStatus/{{ ($deposit->id)}}">transaction</a> still in progress, Complete payment process if you wish to continue</p>
            @endif
            </div>
            </div>

        </form>
    </div>
               
        </div>
    </div>
</x-app-layout>
