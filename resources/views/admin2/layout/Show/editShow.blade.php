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
                        <label for="m_id"> Movie</label>
                        <select name="m_id" class="form-control">
                            @foreach ($movies as $movie)
                                <option value="{{ $movie->m_id }}">{{ $movie->name }}</option>
                            @endforeach
                        </select>
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
                    <label for="showdate">Show Date </label>
                    <input class="form-control" type="date" id="showdate"value="{{ $show->showdate }}" name="showdate">
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Edit</button>
                    <a href="/ShowManagement"><button class="btn btn-light" style="pointer-events:none">Cancel</button></a>
            </form>
    </div>
</div>

@endsection