<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Seat;
use App\Models\Hall;
use App\Models\Movie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\File;

class MovieController extends Controller
{
    // 
    public function index()
    {
        $movies=Movie::all();
        return view('admin2.layout.Movie.informationMovie', compact('movies'));

    }

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

            $newMovie->movie_banner = $fileName;

            $newMovie->status = $request->status;

            $newMovie->save();

            return redirect()->route('movie.index')->withSuccess("Create success!");

        } 
    
    else {

        return redirect()->route('movie.add')->with('message', 'Create failed!');

        }

        

    }

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
