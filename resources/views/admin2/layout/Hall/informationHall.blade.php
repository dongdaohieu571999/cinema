
@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Hall Management</h4>
            <a href="{{route('hall.add')}}"><button class="btn btn-gradient-primary mr-2">+ Add a Hall</button></a>
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Hall Name </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($halls as $hall)
                    <tr>
                        <td>{{ $hall->hall_id}} </td>
                        <td>{{ $hall->hall_name }}</td>
                        <td> 
                            <a href="{{route('hall.edit', $hall->hall_id)}}"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                            <a href="{{route('hall.delete', $hall->hall_id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-light">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
