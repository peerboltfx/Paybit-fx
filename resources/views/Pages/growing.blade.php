<x-app-layout>
    <x-slot name="header">
    <div class="headers"><h3>INVESTMENT GROWTH</h3>
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
                                <td>Deposited</td>
                                <td>Growth</td>
                                <td>time</td>
                                <td>action</td>
                        </tr>
                        <tbody>
                        @foreach($growth as $user)
                        @if($user->status == 'enabled')
                            <tr key="{{ ($user->updated_at->diffForHumans()) }}">
                                <td>{{ ($user->user_id)}}</td>
                                <td>{{ ($user->currency) }} {{ ($user->amount)}}</td>
                                <td>{{ ($user->currency) }} {{ ($user->growth) }}</td>
                                <td> {{ ($user->updated_at->diffForHumans()) }}</td>
                                <td><a href="/investment/{{  ($user->id)}}">edit</a> <a href="/investment/delete/{{  ($user->id)}}">delete</a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
</table>
</div>

               
    </div>
</x-app-layout>
