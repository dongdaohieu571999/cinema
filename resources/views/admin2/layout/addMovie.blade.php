@extends('admin2.layout.index')

@section('content')

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
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Movie banner</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="exampleInputConfirmPassword2" placeholder="Language of Movie">
                </div>
            </div>


            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
@endsection
