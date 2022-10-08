<x-app-layout>
    <x-slot name="header">
    <div class="header"><h3>INVESTMENT GROWTH</h3>
    </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
               
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
                    <div class="table-container">
                    <table class="table table-stripe">
                        <tr class="tr">
                                <td>id</td>
                                <td>Name</td>
                                <td>Wallet Address</td>
                                <td>Withdraw</td>
                                <td>Time</td>
                                <td>status</td>
                                <td>Action</td>
                        </tr>
                        <tbody>
                        @foreach($users as $user)
                              @if($user->status == 'pending')                       

                            <tr key="{{ ($user->updated_at->diffForHumans()) }}">
                                <td>{{ ($user->user->id)}}</td>
                                <td>{{ ($user->user->name)}}</td>
                                <td> {{ ($user->wallet_addr)}}</td>
                                <td> {{ ($user->user->email)}}</td>
                                <td>{{ ($user->currency) }} {{ ($user->amount) }}</td>
                                <td> {{ ($user->updated_at->diffForHumans()) }}</td>
                                <td> {{ ($user->status) }}</td>
                                <td><a href="/ConfirmPay/{{  ($user->id)}}">Confirm</a><a href="/CancelConfirm/{{  ($user->id)}}">Cancel</a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
</table>
</div>
    </div>
</x-app-layout>
