<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Controllers;

class MovieController extends Controller
{
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
            $newMovie = new Movie();
            $newMovie->m_id = $request->m_id;
            $newMovie->name = $request->name;
            $newMovie->description = $request->description;
            $newMovie->director = $request->director;
            $newMovie->actor = $request->actor;
            $newMovie->genre = $request->genre;
            $newMovie->premiere = $request->premiere;
            $newMovie->duration = $request->duration;
            $newMovie->language = $request->language;
            $newMovie->movie_banner = $request->movie_banner;
            $newMovie->save();
            return redirect() -> route('movie.index')
                ->with('success','Movie added succesfully');
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
            $movie = Movie::find($request->input('m_id'));
            if ($movie != null) {
                $movie->m_id = $request->m_id;
                $movie->name = $request->name;
                $movie->description = $request->description;
                $movie->director = $request->director;
                $movie->actor = $request->actor;
                $movie->genre = $request->genre;
                $movie->premiere = $request->premiere;
                $movie->duration = $request->duration;
                $movie->language = $request->language;
                $movie->movie_banner = $request->movie_banner;
                $movie->save();
                return redirect()->route('movie.index')->with('message', 'Movie updated successfully!');
            }
            else {
                return redirect()->route('movie.index')->with('message', 'Movie is not updated!');
            }
        }
    }

    public function movie_delete($m_id)
    {
        $movie = Movie::find($m_id);
        $movie->delete();
        return redirect()->route('movie.index')
            ->with('success', 'Movie deleted successfully');
    }
}
