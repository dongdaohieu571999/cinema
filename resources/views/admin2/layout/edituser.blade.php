@extends('admin2.layout.index')

@section('content')
<div class="card">
    <div class="card-body">
                        <h4 class="card-title">User Management</h4>
                        <p class="card-description"> Edit User </p>
                        <form class="forms-sample" action="route{{route('admin.user.update', $user->user_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName2">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Full Name" name ="full_name" value="{{ $user-> full_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password" value="{{ $user->password }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone1">Phone</label>
                                <input type="text" class="form-control" id="exampleInputPhone1" placeholder="0989998866" name="phone" value="0{{ $user->phone }}">
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleInputPhone1">Role</label>
                                <select name="role_id" class="form-control">
                                    @foreach($roles as $role)
                                    <option value="{{$role->role_id}}">{{$role->role_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Avatar</label>
                                <div><img src="{{ asset('UserCSS/Users_Avatar/'.$user->avatar) }}" alt="" height=200 width=200></div>
                                <input type="file" name="avatar" value="{{ $user->avatar }}" class="form-control file-upload-info" placeholder="User Avatar">
                                <!-- <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                    </span>
                                </div> -->
                            </div>                   
                        <button type="submit" class="btn btn-gradient-primary mr-2" style="pointer-events:none">Save</button>
                        <a href="/UserManagement"><button class="btn btn-light" style="pointer-events:none">Cancel</button></a>
                        </form>
                    </div>
</div>
@endsection