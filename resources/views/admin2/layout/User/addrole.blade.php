
@extends('admin2.layout.index')

@section('content')
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Role Management</h4>
                    <p class="card-description"> Add New Role </p>
                    
                    <form class="forms-sample" action="{{route('role.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Role Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="role_name" placeholder="Name">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <a href="/UserManagement"><button class="btn btn-light" style="pointer-events:none">Cancel</button></a>
                    </form>
                  </div>

</div>

@endsection