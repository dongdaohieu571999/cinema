@extends('admin2.layout.index')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Show Management</h4>
            <p class="card-description">Edit Show</p>
            <form class="forms-sample" action="{{ route('show.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="form-group">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Movie Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputName1" name="show_id" placeholder="Name"
                    value="{{ $show->show_id }}">
                <input type="hidden" class="form-control" id="exampleInputName1" name="m_id" placeholder="Name"
                    value="{{ $show->m_id }}" >
            </div>
       

        <div class="form-group">
            <label for="hall_id">Hall</label>
            <select name="hall_id" class="form-control">
                @foreach ($halls as $hall)
                    <option type="hidden"value="{{ $hall->hall_id }}">{{ $hall->hall_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="stt_time"> Start Time </label>
            <input class="form-control" type="time" id="stt_time" value="{{ $show->stt_time }}" name="stt_time">
        </div>
        <div class="form-group">
            <label for="end_time"> End Time </label>
            <input class="form-control" type="time" id="end_time"value="{{ $show->end_time }}" name="end_time" required>
        </div>
        <div class="form-group">
            <label for="showdate">Show Date </label>
            <input class="form-control" type="date" id="showdate"value="{{ $show->showdate }}" name="showdate">
        </div>
        <button type="submit" class="btn btn-gradient-primary me-2">Edit</button>
        <a href="/ShowManagement"><button class="btn btn-light" style="pointer-events:none">Cancel</button></a>
        </form>
    </div>
</div>

@endsection
