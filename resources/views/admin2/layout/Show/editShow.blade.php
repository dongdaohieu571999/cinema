@extends('admin2.layout.index')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Show</h4>
                <p class="card-description">Update Show</p>
                <form class="forms-sample" action="{{ route ('show.update') }}" method="POST" enctype="multipart/form-data">
                    
                    </div>
                    <div class="form-group">
                        <label for="m_id"> ID Movie </label>
                        <input type="text" class="form-control" id="m_id" placeholder="ID Movie">
                    </div>
                    <div class="form-group">
                        <label for="hall_id">Hall</label>
                        <select name="hall_id" class="form-control" placeholder="{{$show->hall_id}}">
                            <!-- <option value=" {{ $show->hall_id }}" place>{{$show->hall_id}}</option> -->
                            @foreach($halls as $hall)
                            <option value="{{ $hall->hall_id }}" {{ $hall_selected == $hall->hall_id ? 'selected="selected"' : '' }}>{{ $hall->hall_name }}</option>         
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stt_time"> Start Time </label>
                        <input class="form-control" type="time" id="stt_time" name="stt_time">
                    </div>
                    <div class="form-group">
                        <label for="end_time"> End Time </label>
                        <input class="form-control" type="time" id="end_time" name="end_time" required>
                    </div>
                    <div class="form-group">
                        <label for="showdate">Show Date </label>
                        <input class="form-control" type="date" id="showdate" name="showdate">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
