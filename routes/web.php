<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    // Admin Homepage
    Route::get('/admin', function () {

        return view('admin2.layout.index');

    });

    // Admin Movie Management
    Route::get('/MovieManagement', function(){
        return view('admin2.layout.informationMovie');
    });

    Route::get('/addMovie', function(){
        return view('admin2.layout.addMovie');
    });

    Route::get('editMovie', function(){
        return view('admin2.layout.editMovie');
    });

    // Admin Show Management
    Route::get('/ShowManagement', function(){
        return view('admin2.layout.informationShow');
    }); 

    Route::get('/addShow', function(){
        return view('admin2.layout.addshow');
    });

    Route::get('editShow', function(){
        return view('admin2.layout.editShow');
    });

    // Admin Role Management
    Route::get('/RoleManagement', [RoleController::class, 'index'])
        -> name('role.index');

    Route::get('/addRole', [RoleController::class, 'role_add'])
        -> name('role.add');

    Route::post('/role_added', [RoleController::class, 'role_store'])
        -> name('role.store');

    // Route::get('/editrole/{role_id}/{role_name}', function($role_id, $role_name){
    //     $edit_role = $role_name;
    //     return view('admin2.layout.editrole')->with('edit_role',$edit_role);
    // });

    Route::get('/editRole/{role_id}', [RoleController::class, 'role_edit'])
        -> name('role.edit');

    Route::post('/role_updated', [RoleController::class, 'role_update'])
        -> name('role.update');

    Route::get('/role_delete/{role_id}', [RoleController::class, 'role_destroy'])
        ->name('role.delete');

    // Admin User Management
    Route::get('/UserInformation', function(){
        return view('admin2.layout.informationUser');
    });

    Route::get('/addUser', function(){
        return view('admin2.layout.adduser');
    });

    Route::get('/editUser', function(){
        return view('admin2.layout.edituser');
    });

    // Admin Page Redirect
    Route::get('/adHomepage', function(){
        return view('website.layout.adHomepage');
    })
        ->name('adHomepage');


// User Routes

    // User Login
    Route::get('/login', [UserController::class,'showLogin'])
        ->name('login');

    
    Route::post('/login_successful', [UserController::class, 'login'])
        ->name('auth.login');

    // User Registration
    Route::get('/register', [UserController::class,'showRegister'])
        ->name('register');

    Route::post('/register_successful', [UserController::class, 'store'])
        ->name('auth.register');   
    
    Route::get('/logout', [UserController::class,'logout'])
        ->name('logout');

// Website Routes

Route::get('/', function(){
    return view('website.layout.homepage');
})
    ->name('home');