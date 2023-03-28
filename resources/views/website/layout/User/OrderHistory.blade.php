@INCLUDE('website.layout.head')

@if(session()->has('user'))
    @INCLUDE('website.layout.navbar-admin-log')
@else
    @INCLUDE('website.layout.navbar-unlog')
@endif
   
<link rel="stylesheet" href="{{ asset('AdminCSS/assets/css/style.css')}}">
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Your Booking</h4>
        
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Movie </th>
                        <th> Showtime </th>
                        <th> Seat Numbers</th>
                        <th> Booking Date </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        
                        <td>{{ $booking->showid->mid->name }}</td>
                        <td>{{ $booking->showid->stt_time }} {{ $booking->showid->showdate }}</td>
                        <td>{{ $booking->seat_number }}</td>
                        <td>{{ $booking->created_at }}</td>
                        
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <br></br>

                <a href="/UserProfile"><button class="btn btn-primary profile-button"  type="button">Return to your Profile Settings</button></a>
        </div>
    </div> 
    </div>

@INCLUDE('website.layout.footer')