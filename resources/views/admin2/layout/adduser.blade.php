@extends('admin2.layout.index')

@section('content')
<div class="card">
    <div class="card-body">
                        <h4 class="card-title">User Management</h4>
                        <p class="card-description"> Add New User </p>
                        <form class="forms-sample" action="{{ route ('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf                       
                        <div class="form-group">
                            <label for="exampleInputName2">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Full Name" name ="full_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone1">Phone</label>
                            <input type="text" class="form-control" id="exampleInputPhone1" placeholder="0989998866" name="phone">
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
                            <input type="file" name="avatar" value="" class="form-control file-upload-info" placeholder="User Avatar">
                            <!-- <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                </span>
                            </div> -->
                        </div>
                                        
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
</div>
@endsection