<?php

use Illuminate\Support\Facades\Route;

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

// Admin Routes
Route::get('/admin', function () {

    return view('admin2.layout.index');

});

Route::get('/information', function(){
    return view('admin2.layout.informationMovie');
});

Route::get('/addMovie', function(){
    return view('admin2.layout.addMovie');
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


// User Routes

Route::get('/login', function(){
    return view('user.layout.login');
});

Route::Get('/register', function(){
    return view('user.layout.register');
});