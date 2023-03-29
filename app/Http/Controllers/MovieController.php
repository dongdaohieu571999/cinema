<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Seat;
use App\Models\Hall;
use App\Models\Movie;
use App\Models\Show;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class MovieController extends Controller
{
    // 
    
    //Admin Movie Management Index
    public function index()
    {
        $movies=Movie::all();
        return view('admin2.layout.Movie.informationMovie', compact('movies'));

    }

    // User Homepage Movie 
    public function index_user_nowshowing()
    {
        $nowshowing_movies=Movie::where('status','LIKE','%'.'Now Showing'.'%')
        ->get();
        $comingsoon_movies=Movie::where('status','LIKE','%'.'Coming Soon'.'%')
        ->get();
        return view('website.layout.homepage', compact('nowshowing_movies','comingsoon_movies'));
    }

    // Admin Homepage Movie
    public function index_admin_nowshowing()
    {
        $nowshowing_movies=Movie::where('status','LIKE','%'.'Now Showing'.'%')
        ->get();
        $comingsoon_movies=Movie::where('status','LIKE','%'.'Coming Soon'.'%')
        ->get();
        return view('website.layout.adHomepage', compact('nowshowing_movies','comingsoon_movies'));
    }

    // User Movie Detail
    public function movie_detail($m_id)
    {        
        $selected_movie = Movie::find($m_id);
        $nowshowing_movies = Movie::where('status','LIKE','%'.'Now Showing'.'%')
        ->get();
        $startDate = Carbon::today()->subHour();
        $endDate = Carbon::today()->addDays(7);
        $movie_show = Show::where('m_id','LIKE','%'.$m_id.'%');
        $selected_movie_showdate = $movie_show->whereBetween('showdate', [$startDate, $endDate])
        ->select('showdate')
        ->orderBy('showdate', 'asc')
        ->groupBy('showdate')
        ->get();
        // // dd($selected_movie_showdate);
        $selected_movie_showtime = collect();
        foreach ($selected_movie_showdate as $show) {
            $movie_showtime = Show::where('showdate', $show->showdate)
                ->orderBy('stt_time')
                ->get();
            $selected_movie_showtime = $selected_movie_showtime->merge($movie_showtime);
        }
        

        return view('website.layout.Movie.MovieDetail',compact('nowshowing_movies','selected_movie_showdate', 'selected_movie_showtime'), ['selected_movie' => $selected_movie]);
        
    }


    // Admin Movie Add
    public function movie_add()
    {
        return view('admin2.layout.Movie.addMovie');
    }

    public function movie_store(Request $request)

    {

        if ($request->isMethod('POST')) {

        //     $validator = Validator::make($request->all(), [

        //         'email' => 'required|email|max:100',

        //         'name' => 'required|min:6|max:1000',

        //         'password' => 'required|confirmed|min:6'

        // ]);

        // if ($validator->fails()) {

        // return redirect()->back()

        // ->withErrors($validator)

        // ->withInput();

        // }

    

            if ($request->hasFile('movie_banner')) {

                $file = $request->file('movie_banner');

                $path = public_path('AdminCSS/Movie_Banner');

                $fileName = time() . '_' . $file->getClientOriginalName();

                $file->move($path, $fileName);

                } else {

                $fileName = 'noname.jpg';

            }

        

            $newMovie = new Movie();

            $newMovie->name = $request->name;

            $newMovie->director = $request->director;

            $newMovie->actors = $request->actors;

            $newMovie->duration = $request->duration;

            $newMovie->genre = $request->genre;

            $newMovie->description = $request->description;

            $newMovie->premiere = $request->premiere;

            $newMovie->language = $request->language;

            $newMovie->trailer = $request->trailer;

            $newMovie->movie_banner = $fileName;

            $newMovie->status = $request->status;

            $newMovie->save();

            return redirect()->route('movie.index')->withSuccess("Create success!");

        } 
    
    else {

        return redirect()->route('movie.add')->with('message', 'Create failed!');

        }

        

    }

    // Admin Movie Edit
    public function movie_edit($m_id)
    {
        $movie = Movie::find($m_id);
        return view('admin2.layout.Movie.editMovie', ['movie' => $movie]);
    }
    
    public function movie_update(Request $request)
    {
        
        if ($request->isMethod('POST')){
            $fileName="";
            if ($request->hasFile('movie_banner')) {

                $file = $request->file('movie_banner');
    
                $path = public_path('AdminCSS/Movie_Banner');
    
                $fileName = time() . '_' . $file->getClientOriginalName();
    
                $file->move($path, $fileName);
    
                } 
            
    
            $movie = Movie::find($request->input('m_id'));
    
            if ($movie != null) {                    
    
                $movie->name = $request->name;

                $movie->director = $request->director;

                $movie->actors = $request->actors;

                $movie->duration = $request->duration;

                $movie->genre = $request->genre;

                $movie->description = $request->description;

                $movie->premiere = $request->premiere;

                $movie->language = $request->language;

                $movie->trailer = $request->trailer;

                if($fileName){
                    $movie->movie_banner = $fileName;
                }
                $movie->status = $request->status;

                $movie->save();              
    
    
                return redirect()->route('movie.index')->withSuccess("Movie updated successfully!");
    
                } 
            
            else {
    
                return redirect()->route('movie.index')->with('message', 'Movie is not updated!');
    
                }
        }        

    }
    
    // Admin Movie Delete
    public function movie_delete($m_id)

    {

        $movie = Movie::find($m_id);

        $image_path = "/AdminCSS/Movie_Banner/.$movie->movie_banner"; // Value is not URL but directory file path

        if(File::exists($image_path)) {

            File::delete($image_path);

        }

        $movie->delete();

        return redirect()->route('movie.index')

        ->withSuccess("Movie deleted successfully!");

    }
}
