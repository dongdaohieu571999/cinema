@extends('admin2.layout.index')

@section('content')
<div class="card">
    <div class="card-body">
                        <h4 class="card-title">User Management</h4>
                        <p class="card-description"> Add New User </p>
                        <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Username</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName2">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone1">Phone</label>
                            <input type="text" class="form-control" id="exampleInputPhone1" placeholder="0989998866">
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                            </span>
                            </div>
                        </div>                     
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
</div>
@endsection