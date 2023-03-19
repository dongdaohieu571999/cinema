@extends('admin2.layout.index')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Movie</h4>
            <p class="card-description"> Fill all required fields to add new movie </p>
            <form class="forms-sample" action="{{ route ('movie.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Movie Name</label>
                    <div class="col-sm-9">
                    <input type="hidden" class="form-control" id="exampleInputName1" name="m_id" placeholder="Name" value="{{$movie->m_id}}">
                        <input type="text" class="form-control" id="exampleInputUsername2" name="name" value="{{ $movie->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputEmail2" name="description" value="{{ $movie->description }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Directors</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputPassword2" name="director" value="{{ $movie->director }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Actors</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name ="actors" id="exampleInputConfirmPassword2" value="{{ $movie->actors }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Genre</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="genre" id="exampleInputConfirmPassword2" value="{{ $movie->genre }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Premiere</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="premiere" id="exampleInputConfirmPassword2" value="{{ $movie->premiere }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Duration</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="duration" id="exampleInputConfirmPassword2" value="{{ $movie->duration }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Language</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="language" id="exampleInputConfirmPassword2" value="{{ $movie->language }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Trailer</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="trailer" id="exampleInputConfirmPassword2" placeholder="Movie Trailer">
                    </div>
</div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Movie banner</label>
                    <div class="col-sm-9">
                    <div><img src="{{ asset('AdminCSS/Movie_Banner/'.$movie->movie_banner) }}" alt="" height=200 width=200></div>
                                
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
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="Coming Soon"> Coming Soon <i class="input-helper"></i></label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="Not Available"> Not Available <i class="input-helper"></i></label>
                              </div>
                            </div>
                            <!-- <div class="col-sm-5">
                              
                            </div>
                            <div class="col-sm-4">
                              
                            </div> -->
                          </div>
                </div>


                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
@endsection
