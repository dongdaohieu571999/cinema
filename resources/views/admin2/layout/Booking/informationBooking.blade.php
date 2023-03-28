
@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Booking Management</h4>
        
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> UserName </th>
                        <th> Movie </th>
                        <th> Showtime </th>
                        <th> Seat Numbers</th>
                        <th> Booking Date </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>B{{ $booking->booking_id}} </td>
                        <td>{{ $booking->userid->full_name }}</td>
                        <td>{{ $booking->showid->mid->name }}</td>
                        <td>{{ $booking->showid->stt_time }} {{ $booking->showid->showdate }}</td>
                        <td>{{ $booking->seat_number }}</td>
                        <td>{{ $booking->created_at }}</td>
                        <td> 
                            <a href="{{route('hall.edit', $booking->booking_id)}}"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                            <a href="{{route('booking.delete', $booking->booking_id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-light">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
