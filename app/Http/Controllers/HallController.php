<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Seat;
use App\Models\Hall;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class HallController extends Controller
{
    //
    public function index()
    {
        $halls=Hall::all();
        return view('admin2.layout.Hall.informationHall', compact('halls'));

    }

    public function hall_add()
    {
        return view('admin2.layout.Hall.addHall');
    }

    public function hall_store(Request $request)
    {
        if ($request->isMethod('POST')){
            $newHall = new Hall();
            $newHall->hall_name = $request->hall_name;
            $newHall->save();
            return redirect() -> route('hall.index')
            ->with('success','Hall added succesfully');
        }
    }

    public function hall_edit($hall_id)
    {
        $hall = Hall::find($hall_id);
        return view('admin2.layout.Hall.editHall', ['hall' => $hall]);
    }

    public function hall_update(Request $request)
    {
        if ($request->isMethod('POST')){
            $hall = Hall::find($request->input('hall_id'));
            if ($hall != null) {
                
                $hall->hall_name = $request->hall_name;
                $hall->save();   
                return redirect() ->route('hall.index')
                -> with('success', 'Hall is updated successfully');
            } 
            else
            {
                return redirect() ->route('hall.index')
                -> with('Error', 'Hall is not updated');
            }
        }
    }

    public function hall_destroy($hall_id)
    {
        $hall = Hall::find($hall_id);
        $hall->delete();
        return redirect()->route('hall.index')
        ->with('success', 'Hall is deleted successfully');
    }
}
