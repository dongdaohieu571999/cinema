@extends('admin2.layout.index')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Movie</h4>
            <p class="card-description"> Fill all required fields to add new movie </p>
            <form class="forms-sample" action="{{ route ('movie.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Movie Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername2" name="name" placeholder="Name of Movie">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputEmail2" name="description" placeholder="Content of Movie">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Directors</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputPassword2" name="director" placeholder="Author">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Actors</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name ="actors" id="exampleInputConfirmPassword2" placeholder="Actor">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Genre</label>
                    <select name="genre" class="form-control" id="exampleInputPassword2">                            
                            <option value="Action">Action</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Drama">Drama</option>
                            <option value="Action">Action</option>
                            <option value="Fantasy & Fiction">Action</option>
                            <option value="Horror">Comedy</option>
                            <option value="Mystery">Drama</option>
                            <option value="Romance">Action</option>
                            <option value="Thriller">Action</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Premiere</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" class="form-control" name="premiere" id="exampleInputConfirmPassword2" placeholder="Movie premiere day">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Duration</label>
                    <div class="col-sm-9">
                        <input type="time" class="form-control" name="duration" id="exampleInputConfirmPassword2" placeholder="Movie length">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Language</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="language" id="exampleInputConfirmPassword2" placeholder="Language of Movie">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Movie banner</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="movie_banner" id="exampleInputConfirmPassword2" >
                    </div>
                </div>
                
                <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="Now Showing" checked=""> Now Showing <i class="input-helper"></i></label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="Coming Soon"> Coming Soon <i class="input-helper"></i></label>
                              </div>
                            </div>
                          </div>
                </div>


                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
@endsection
