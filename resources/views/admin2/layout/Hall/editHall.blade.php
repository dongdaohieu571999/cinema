
@extends('admin2.layout.index')

@section('content')
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Hall Management</h4>
                    <p class="card-description"> Edit Hall</p>
                    <form class="forms-sample" method="post" action="{{route('hall.update')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Hall Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="hall_name" placeholder="Name" value="{{$hall->hall_name}}">
                        <input type="hidden" class="form-control" id="exampleInputName1" name="hall_id" placeholder="Name" value="{{$hall->hall_id}}">
                     
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                      <a href="/HallManagement"><button class="btn btn-light" style="pointer-events:none">Cancel</button></a>
                    </form>
                  </div>

</div>

@endsection