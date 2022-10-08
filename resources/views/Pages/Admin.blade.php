<x-app-layout>
    <x-slot name="header">
    <div class="headers"><h3>Balance</h3>
    </div>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="col-lg-12">
                        <div class="row">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="table-container">
                    <table class="table table-stripe">
                        <tr class="tr">
                                <td>id</td>
                                <td>user</td>
                                <td>email</td>
                                <td>joined</td>
                                <td>paid investor</td>
                                <td>action</td>
                        </tr>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ ($user->id)}}</td>
                                <td>{{ ($user->name)}}</td>
                                <td>{{ ($user->email)}}</td>
                                <td>{{ ($user->created_at->diffForHumans())}}</td>
                                <td>@if(!empty($user->validDeposit))
                                   Deposited
                                   @else
                                    Not Deposit yet
                                    @endif
                                </td>
                                <td><a style="color:green" href="/user/{{  ($user->id)}}">Users</a><a style="color:red" href="/delete/{{  ($user->id)}}">delete</a></td>
                            </tr>
                            @endforeach
                    </tbody>
</table>
</div>

               
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
