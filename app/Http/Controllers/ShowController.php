<?php

namespace App\Http\Controllers;


use App\Models\Show;
use App\Models\Hall;
use App\Models\Movie;
use App\Models\Seat;
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

class ShowController extends Controller
{
    
    public function index()
    {
        $shows=Show::all();
        return view('admin2.layout.Show.informationShow', compact('shows'));

    }

    public function show_seat_select($show_id)
    {
        $show = Show::find($show_id);
        $seats_rowA = Seat::where('hall_id','LIKE','%'.$show->hallid->hall_id.'%')->where('seat_row','LIKE','%'.'A'.'%')->orderBy('seat_number','asc')
        ->get();       
        $seats_rowB = Seat::where('hall_id','LIKE','%'.$show->hallid->hall_id.'%')->where('seat_row','LIKE','%'.'B'.'%')->orderBy('seat_number','asc')
        ->get();
        $seats_rowC = Seat::where('hall_id','LIKE','%'.$show->hallid->hall_id.'%')->where('seat_row','LIKE','%'.'C'.'%')->orderBy('seat_number','asc')
        ->get();
        $seats_rowD = Seat::where('hall_id','LIKE','%'.$show->hallid->hall_id.'%')->where('seat_row','LIKE','%'.'D'.'%')->orderBy('seat_number','asc')
        ->get();
        return view('website.layout.Ticket.Seat-Select', compact('seats_rowA', 'seats_rowB','seats_rowC','seats_rowD'), ['show' => $show]);
    }

    public function show_checkout($show_id)
    {
        $show = Show::find($show_id);
        return view('website.layout.Ticket.Booking-Confirm', ['show' => $show]);
    }

    public function show_add()
    {
        $halls=Hall::all();
        $movies=Movie::all();
        return view('admin2.layout.Show.addshow', ['halls' => $halls, 'movies' => $movies]);
    }

    public function show_store(Request $request)
    {
        if ($request->isMethod('POST')){
            $newShow = new Show();
            $newShow->show_id = $request->show_id;
            $newShow->m_id = $request->m_id;
            $newShow->hall_id = $request->hall_id;
            $newShow->stt_time = $request->stt_time;
            $newShow->showdate = $request->showdate;
            $newShow->save();
            return redirect() -> route('show.index')
            ->with('success','Show added succesfully');
        }
    }

    public function show_edit($show_id)
    {
        $halls = Hall::all();
        $movies = Movie::all();
        $show = Show::find($show_id);

        return view('admin2.layout.Show.editShow', ['show' => $show, 'halls' => $halls , 'movies'=>$movies]);
    }

    public function show_update(Request $request)
    {
        if ($request->isMethod('POST')){
            $show = Show::find($request->input('show_id'));
            if ($show != null) {
                
                $show->m_id = $request->m_id;
                $show->hall_id = $request->hall_id;
                $show->stt_time = $request->stt_time;
                $show->showdate = $request->showdate;
                $show->save();   
                return redirect() ->route('show.index')
                -> with('success', 'Show is updated successfully');
            } 
            else
            {
                return redirect() ->route('show.index')
                -> with('Error', 'Show is not updated');
            }
        }
    }

    public function show_destroy($show_id)
    {
        $show = Show::find($show_id);
        $show->delete();
        return redirect()->route('show.index')
        ->with('success', 'Show is deleted successfully');
    }
}  

