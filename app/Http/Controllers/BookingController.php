<?php

namespace App\Http\Controllers;

use App\Models\Show;
use App\Models\Hall;
use App\Models\Movie;
use App\Models\Seat;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;


class BookingController extends Controller
{
    //User Function
    public function user_booking()
    {
        $user_id = Auth::user()->user_id;
        $bookings = Booking::where('user_id', 'LIKE', '%'.$user_id.'%')->get();
        return view('website.layout.User.OrderHistory', compact('bookings'));
    }

    //Admin Function
    public function index()
    {
        $bookings=Booking::all();
        return view('admin2.layout.Booking.informationBooking', compact('bookings'));

    }

    public function booking_delete($booking_id)
    {
        $booking = Booking::find($booking_id);
        $booking->delete();
        return redirect()->route('booking.index')
        ->with('success', 'Booking is deleted successfully');
    }

    //New Booking
    public function booking_store(Request $request)
    {
        if ($request->isMethod('POST')){
            $newBooking = new Booking();
            $newBooking->user_id = $request->user_id;
            $newBooking->show_id  = $request->show_id;
            $newBooking->seat_number = $request->seat_number;
            $newBooking->total_price = $request->total_price;
            $newBooking->save();
            return redirect() -> route('show.payment');
        }
    }

}
