@extends('admin2.layout.index')

@section('content')

<<<<<<< Updated upstream:resources/views/admin2/layout/addMovie.blade.php
    <div class="card-body">
        <h4 class="card-title">Add Movie</h4>
        <p class="card-description"> Show time </p>
        <form class="forms-sample">
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Movie ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Name of Movie">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Movie Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Name of Movie">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Content of Movie">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Directors</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Author">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Actors</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Actor">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Genre</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Category of movie">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Premiere</label>
                <div class="col-sm-9">
                    <input type="datetime-local" class="form-control" id="exampleInputConfirmPassword2" placeholder="Movie premiere time">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Duration</label>
                <div class="col-sm-9">
                    <input type="time" class="form-control" id="exampleInputConfirmPassword2" placeholder="Movie showtime">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Language</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Language of Movie">
=======
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Movie</h4>
            <p class="card-description"> Fill all required fields to add new movie </p>
            <form class="forms-sample" action="{{ route ('movie.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Movie Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Name of Movie" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Content of Movie" name="description">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Directors</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Author" name="director">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Actors</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Actor" name="actor">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Genre</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Category of movie" name="genre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Premiere</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" class="form-control" id="exampleInputConfirmPassword2" placeholder="Movie premiere time" name="premiere">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Duration</label>
                    <div class="col-sm-9">
                        <input type="time" class="form-control" id="exampleInputConfirmPassword2" placeholder="Movie showtime" name="duration">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Language</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Language of Movie" name="language">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Movie banner</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="exampleInputConfirmPassword2" placeholder="Language of Movie" name="movie_banner">
                    </div>
>>>>>>> Stashed changes:resources/views/admin2/layout/Movie/addMovie.blade.php
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Movie banner</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="exampleInputConfirmPassword2" placeholder="Language of Movie">
                </div>
            </div>


<<<<<<< Updated upstream:resources/views/admin2/layout/addMovie.blade.php
            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
=======
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                <a href="/MovieManagement"><button class="btn btn-light" style="pointer-events:none">Cancel</button></a>
            </form>
        </div>
>>>>>>> Stashed changes:resources/views/admin2/layout/Movie/addMovie.blade.php
    </div>
@endsection
