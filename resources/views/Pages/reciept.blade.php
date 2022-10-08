<x-app-layout>
    <x-slot name="header">
       
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Validation Errors -->
        <div class="content-status first">

          <p class="p-heading">plan</p>
          @if($reciept->plan == 'Gold')
          <p class="h-body"><img src="{{ asset('/images/gold.png') }}" /></p>
          @elseif($reciept->plan == 'Silver')
          <p class="h-body"><img src="{{ asset('/images/Silver.png') }}" /></p>
          @elseif($reciept->plan =='Diamond')
          <p class="h-body"><img src="{{ asset('/images/Diamond.png') }}" /></p>
          @elseif($reciept->plan =='Platinum')
          <p class="h-body"><img src="{{ asset('/images/Platinum.png') }}" /></p>
            @endif
            <div class="status-content"><p>status</p><p  class="{{($reciept->status)}}">{{ ($reciept->status)}}</p></div>
      </div>
      <div class="content-status">
          <p class="p-heading">Profit</p>
          @if($reciept->plan == 'Gold')
          <h1 class="h-body">10% For 24 hours</h1>
          @elseif($reciept->plan == 'Silver')
          <h1 class="h-body">15% For 24 hours</h1>
          @elseif($reciept->plan =='Diamond')
          <h1 class="h-body">30% For 48 hours</h1>
          @elseif($reciept->plan =='Platinum')
          <h1 class="h-body">100% For 48 hours</h1>
            @endif
      </div>

      <div class="content-status">
          <p class="p-heading color-red">send Exactly {{ ($reciept->amount) }}{{ ($reciept->currency) }}</p>
          @if($reciept->currency == 'BTC')
        <h1 style="font-size:16px;" class="h-body">BTC : {{ ($Wallet->BTC)}}</h1>
            @elseif($reciept->currency == 'ETH')
        <h1 style="font-size:16px;" class="h-body">ETH : {{ ($Wallet->ETH)}}</h1>
            @elseif($reciept->currency == 'LTC')
        <h1 style="font-size:16px;" class="h-body">LTC : {{ ($Wallet->LTC)}}</h1>
            @endif
      </div>
      <div class=" p-2">
          <img src="../images/pay.png" width='100%' alt="">
      </div>
      <div class="content-status">
          <p class="p-heading">Date</p>
          <h1 class="h-body">{{ ($reciept->created_at->diffForHumans())}}</h1>
      </div>
      <div class="content-status">
          <p class="p-heading">gateway</p>
          <h1 class="h-body">{{ ($reciept->gateway)}}</h1>
      </div>
      <div class="content-status">
          <p class="p-heading">Principal return</p>
          <h1 class="h-body">Yes</h1>
      </div>

      <div class="content-status">
         <form action="/uploadProof" enctype='multipart/form-data' method="post">
        
         @csrf
    <input type="file" name="photo" id="photo">
         <button type='submit' class="btn btn-primary">Harsh key</button>
        </form>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status')}}
                <a href="/storage/{{ (auth()->user()->TempDeposit->photo) }}"><img src="/storage/{{ (auth()->user()->TempDeposit->photo) }}" alt="Proof" style='margin:1rem 5rem' width='100px'></a>
            </div>
        @endif
      </div>
      <div class="content-status">
           <h1 class="h-body"></h1>
           @if($reciept->status == 'pending')
           <p class="p-heading alert-warning">will only be valid in less than 24Hrs</p>
           <p class="p-heading alert-warning"><a href="/restart/{{ ($reciept->id) }}" style="text-decoration:underline;">click</a> to restart process</p>
           @elseif($reciept->status == 'recieved')
           <p class="p-heading alert-success">Your payment has been verified and your investment approved.</p>
            @endif
           <a href="/transaction">proceed →</a>

      </div>
      </x-auth-card>
               
               </div>
           </div>
</x-app-layout>
