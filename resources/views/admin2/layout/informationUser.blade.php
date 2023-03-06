
@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">User Management</h4>
            <a href="/addUser"><button class="btn btn-gradient-primary mr-2">+ Add a User</button></a>
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Email </th>
                            <th> Full Name </th>                                             
                            <th> Phone </th>
                            <th> Role </th>
                            <th> Avatar </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user) 
                        <tr>
                            <td> {{ $user->user_id}} </td>
                            <td> {{ $user->email}} </td>
                            <td> {{ $user->full_name}} </td>                            
                            <td> 0{{ $user->phone}} </td>
                            <td> {{ $user->roleid->role_name}} </td>  
                            <td><img src="{{ asset('UserCSS/Users_Avatar/'.$user->avatar) }}" alt="" border= height=300 width=400></td>
                            <td> 
                                <a href="{{ route('admin.user.edit', $user->user_id) }}"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                                <button class="btn btn-light">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
