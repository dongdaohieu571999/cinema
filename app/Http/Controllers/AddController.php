<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use voku\helper\ASCII;

class AddController extends Controller
{
    public function add(){
        $movie = Movie::all();
        return view('admin2.layout.index', compact("movie"));
    }

    public function getAdd(){
        return view('admin2.layout.addMovie');
    }

    public function postMovie(Request $request){
        $movie = new Movie;
        $movie -> movie_id = $request -> movie_id;
        $movie -> movie_name = $request -> movie_name;
        $movie -> movie_description = $request -> movie_description;
        $movie -> movie_director = $request -> movie_director;
        $movie -> movie_actor = $request -> movie_actor;
        $movie -> movie_premiere = $request -> movie_premiere;
        $movie -> movie_duration = $request -> movie_duration;
        $movie -> movie_language = $request -> movie_language;
        $movie -> movie_banner = $request -> movie_banner;
        $movie -> save();
        return redirect() -> route('admin2.layout.index');
    }

    public function getEditMovie($movie_id){
        $data['movie'] = Movie::find($movie_id);
        return view('admin2.layout.',$data);
    }

    public function postEditMovie(Request $request, $movie_id){
        $movie = Movie::find($movie_id);
        $movie->movie_name = $request->movie_name;
        $movie->movie_description = $request->movie_description;
        $movie -> movie_director = $request -> movie_director;
        $movie -> movie_actor = $request -> movie_actor;
        $movie -> movie_premiere = $request -> movie_premiere;
        $movie -> movie_duration = $request -> movie_duration;
        $movie -> movie_language = $request -> movie_language;
        $movie -> movie_banner = $request -> movie_banner;
        $movie->save();
        return redirect()->route('admin.category.index')->with('success', 'Product added successfully!');
    }

    public function delete($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return back();
    }
}
