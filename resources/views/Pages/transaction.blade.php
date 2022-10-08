<x-app-layout>
    <x-slot name="header">
    <div class="headers"><h3>Balance</h3>
        <h2> {{ (auth()->user()->validDeposit->currency) ?? ('USD') }} {{ (auth()->user()->validDeposit->growth) ?? ('00.00') }}</h2>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<div class="table-container">
<div class="transact-container">
<h1 style=' font-weight:600;font-size:20px; margin-top:2rem ; margin-bottom:2rem ;'>Deposited transaction</h1>
<hr style='margin-bottom:1rem;width:20%;height:4px;background: #8200dd;'>
@if(!empty($deposits))
@foreach($deposits as $deposit)
<div class="contend mb-2" >
    <div class="element-{{ ($deposit->status) ?? ('pending') }}">
        <ul>
            <li>id </li>
            <li>plan </li>
            <li>amount</li>
            <li>ACC ID</li>
            <li>time</li>
            <li>status</li>
        </ul>
    </div>
    
   
    <div class="true">
        
    <ul>
   
            <li>{{ ($deposit->id) }} </li>
            <li> {{ ($deposit->plan) }}</li>
            <li>{{ ($deposit->amount) }} {{ (auth()->user()->TempDeposit->currency) }}</li>
            <li>{{ ($deposit->acc_id) }}</li>
            <li>{{ ($deposit->created_at->diffForHumans())}}</li>
            <li><a href="/deposit/status/{{ ($deposit->id) }}"> {{ ($deposit->status) }}</a> @if($deposit->status == 'recieved') 
            {{ ($deposit->updated_at->diffForHumans()) }}
            @endif
            </li>
         
           
         
        </ul>
    </div>
    <div class='proof'>
        <a href="/storage/{{ (auth()->user()->TempDeposit->photo) ?? ('/') }}">Click to view your proof</a>
        </div>
</div>
@endforeach
@endif
</div>
               
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
