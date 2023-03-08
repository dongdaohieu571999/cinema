@extends('admin2.layout.index')

@section('content')

    <div class="card-body">
        <h4 class="card-title">Add Movie</h4>
        <p class="card-description"> Show time </p>
        <form class="forms-sample" action="{{route('storeMovie')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Movie ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Name of Movie" name="id">
                </div>
            </div>
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
                    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Author" name="direction">
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
                    <input type="file" class="form-control" id="exampleInputConfirmPassword2" placeholder="Image of Movie" name="image">
                </div>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>

@endsection
