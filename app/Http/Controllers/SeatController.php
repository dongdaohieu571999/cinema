<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Seat;
use App\Models\Hall;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class SeatController extends Controller
{
    //
    public function index()
    {
        $seats=Seat::all();
        return view('admin2.layout.Seat.informationSeat', compact('seats'));

    }


    public function index_hall1()
    {
        $seats=Seat::where('hall_id','LIKE','1')
        ->get();
        return view('admin2.layout.Seat.informationSeat', compact('seats'));

    }

    public function index_hall2()
    {
        $seats=Seat::where('hall_id','LIKE','2')
        ->get();
        return view('admin2.layout.Seat.informationSeat', compact('seats'));

    }


    public function index_hall3()
    {
        $seats=Seat::where('hall_id','LIKE','3')
        ->get();
        return view('admin2.layout.Seat.informationSeat', compact('seats'));

    }

    public function seat_add()
    {
        $halls=Hall::all();
        return view('admin2.layout.Seat.addSeat', ['halls' => $halls]);
    }

    public function seat_store(Request $request)

    {

        if ($request->isMethod('POST')) {      
            $newSeat = new Seat();
            $newSeat->hall_id = $request->hall_id;
            $newSeat->seat_row = $request->seat_row;
            $newSeat->seat_number = $request->seat_number;
            $newSeat->isEmpty = $request->isEmpty;
            $newSeat->save();
            return redirect() -> route('seat.index')
            ->with('success','Seat added succesfully');
        }    

    }
    
    


    public function seat_edit($seat_id)
    {
        $halls = Hall::all();
        $seat = Seat::with('hallid') -> find($seat_id);
        $hall_selected = Seat::first()->hall_id;
        $row_selected = Seat::first()->seat_row;
        $number_selected = Seat::first()->seat_number;
        return view('admin2.layout.Seat.editSeat', compact('hall_selected','row_selected','number_selected'), ['seat' => $seat, 'halls' => $halls]);
    }
    
    public function seat_update(Request $request)
    {
        
        if ($request->isMethod('POST')){          
    
            $seat = Seat::find($request->input('seat_id'));
    
            if ($seat != null) {                    
    
                $seat->hall_id = $request->hall_id;
                $seat->seat_row = $request->seat_row;
                $seat->seat_number = $request->seat_number;
                $seat->isEmpty = $request->isEmpty;
                $seat->save();
    
                return redirect()->route('seat.index')->with('message', 'Seat updated successfully!');
    
                } 
            
            else {
    
                return redirect()->back()->with('message', 'Seat is not updated!');
    
                }
        }        

    }
    
    public function seat_delete($seat_id)

    {

        $seat = Seat::find($seat_id);        

        $seat->delete();

        return redirect()->route('seat.index')

        ->with('success', 'Seat deleted successfully');

    }
}
