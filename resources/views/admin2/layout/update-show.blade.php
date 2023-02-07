@extends('Admin.layout.index')

@section('content')

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Update Show</h4>
              <p class="card-description">Update Show</p>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputName1">Name show </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div> --}}
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Premiere schedule</label>
                      <div class="col-sm-9">
                        <input class="form-control" placeholder="dd/mm/yyyy" />
                      </div>
                    </div>
                {{-- <div class="form-group">
                  <label for="exampleSelectGender">Gender</label>
                  <select class="form-control" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                  </select> --}}
                </div>
                <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Movie duration</label>
                  <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
       
@endsection