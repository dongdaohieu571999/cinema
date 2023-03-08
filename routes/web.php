<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddMovieController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

    return view('admin2.layout.index');

});

Route::get('/hello-world', function(){

    return view('hello-world');

});

Route::get('/hello-world/{year}', function($year){

    echo ('Hello world, ' . $year);

    // return view('hello-world');

});

Route::get('/hello-world/{year}/{yourname?}', function($year, $yourname = null){

    $hello_string = '';

    if($yourname == null){

    $hello_string = 'Hello world, ' . $year;

    }else{

    $hello_string = 'Hello world, ' . $year . '. My name is ' . $yourname;

    }

    return view('hello-world')->with('hello_str', $hello_string);

    });

Route::get('/information', function(){
    return view('admin2.layout.informationMovie');
});

Route::get('/addMovie', function(){
    return view('admin2.layout.addMovie') ;
});

Route::get('/addrole', function(){
    return view('admin2.layout.addrole');
});

// Route::get('/editrole/{role_id}/{role_name}', function($role_id, $role_name){
//     $edit_role = $role_name;
//     return view('admin2.layout.editrole')->with('edit_role',$edit_role);
// });

Route::get('/editrole', function(){
    return view('admin2.layout.editrole');
});

Route::get('/adduser', function(){
    return view('admin2.layout.adduser');
});

Route::get('/edituser', function(){
    return view('admin2.layout.edituser');
});


Route::post('/storeMovie', [AddMovieController::class, 'postMovie'])->name('storeMovie');
