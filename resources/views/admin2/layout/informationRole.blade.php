
@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Role Management</h4>
            <a href="{{route('role.add')}}"><button class="btn btn-gradient-primary mr-2">+ Add a Role</button></a>
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Role Name </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->role_id}} </td>
                        <td>{{ $role->role_name }}</td>
                        <td> 
                            <a href="{{route('role.edit', $role->role_id)}}"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                            <a href="{{route('role.delete', $role->role_id)}}"><button class="btn btn-light">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
