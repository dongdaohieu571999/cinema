
@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Seat Management</h4>
            <a href="{{route('seat.add')}}"><button class="btn btn-gradient-primary mr-2">+ Add a Seat</button></a>
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Hall Name </th>
                        <th> Seat Row </th>
                        <th> Seat Number </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($seats as $seat)
                    <tr>
                        <td>{{ $seat->seat_id}} </td>
                        <td>{{ $seat->hallid->hall_name }}</td>
                        <td>{{ $seat->seat_row}} </td>
                        <td>{{ $seat->seat_number }}</td>
                        <td> 
                            <a href="{{route('seat.edit', $seat->seat_id)}}"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                            <a href="{{route('seat.delete', $seat->seat_id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-light">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
