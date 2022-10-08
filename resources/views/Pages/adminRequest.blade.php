<x-app-layout>
    <x-slot name="header">
    <div class="headers"><h3>Temporary Deposit</h3>
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
                                <td>user</td>
                                <td>Amount</td>
                                <td>tran Rcpt</td>
                                <td>time</td>
                                <td>action</td>
                        </tr>
                        <tbody>
                        @foreach($tempDep as $user)
                        @if($user->status == 'pending')
                            <tr>
                                <td>{{ ($user->id)}}</td>
                                <td>{{ ($user->user->email)}}</td>
                                <td>{{ ($user->currency) }} {{ ($user->amount) }}</td>
                                <td> {{ ($user->acc_id) }}</td>
                                <td> {{ ($user->updated_at->diffForHumans()) }}</td>
                                <td><a href="/validate/{{  ($user->id)}}">edit</a> <a href="/validate/delete/{{  ($user->id)}}">delete</a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
</table>
@if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status')}}
            </div>
        @endif
    </div>
    </div>
</div>
</x-app-layout>
