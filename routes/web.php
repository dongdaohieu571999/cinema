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

// Default Page


// Admin Routes
Route::get('/admin', function () {

    return view('admin2.layout.index');

});

Route::get('/MovieManagement', function(){
    return view('admin2.layout.informationMovie');
});

Route::get('/addMovie', function(){
    return view('admin2.layout.addMovie');
});

Route::get('editMovie', function(){
    return view('admin2.layout.editMovie');
});

Route::get('/ShowManagement', function(){
    return view('admin2.layout.informationShow');
}); 

Route::get('/addShow', function(){
    return view('admin2.layout.addshow');
});

Route::get('editShow', function(){
    return view('admin2.layout.editShow');
});

Route::get('/RoleManagement', function(){
    return view('admin2.layout.informationRole');
});

Route::get('/addRole', function(){
    return view('admin2.layout.addrole');
});

// Route::get('/editrole/{role_id}/{role_name}', function($role_id, $role_name){
//     $edit_role = $role_name;
//     return view('admin2.layout.editrole')->with('edit_role',$edit_role);
// });

Route::get('/editRole', function(){   
    return view('admin2.layout.editrole');
});

Route::get('/UserInformation', function(){
    return view('admin2.layout.informationUser');
});

Route::get('/addUser', function(){
    return view('admin2.layout.adduser');
});

Route::get('/editUser', function(){
    return view('admin2.layout.edituser');
});


// User Routes

Route::get('/login', function(){
    return view('website.layout.login');
});

Route::Get('/register', function(){
    return view('website.layout.register');
});

// Website Routes

Route::get('/', function(){
    return view('website.layout.homepage');
});