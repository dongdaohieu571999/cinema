
@extends('admin2.layout.index')

@section('content')
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Role Management</h4>
                    <p class="card-description"> Add New Role </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Role Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>

</div>

@endsection