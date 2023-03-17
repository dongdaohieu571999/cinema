<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\MovieController;

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

    Route::get('/editRole/{role_id}', [RoleController::class, 'role_edit'])
        -> name('role.edit');

    Route::post('/role_updated', [RoleController::class, 'role_update'])
        -> name('role.update');

    Route::get('/role_delete/{role_id}', [RoleController::class, 'role_destroy'])
        ->name('role.delete');

    // Admin User Management

    Route::get('/addUser', [UserController::class, 'user_add'])
        -> name('user.add');


    Route::get('/UserManagement', [UserController::class, 'index'])
        -> name('user.index');

    Route::post('/user_added', [UserController::class, 'admin_user_store'])
        -> name('admin.user.store');

    Route::get('/editUser/{user_id}', [UserController::class, 'admin_user_edit'])
        -> name('admin.user.edit');

    Route::post('/updateUser', [UserController::class, 'admin_user_update'])
        -> name('admin.user.update');
    
    Route::get('/deleteUser/{user_id}', [UserController::class, 'admin_user_delete'])
        -> name('admin.user.delete');
        
    // Admin Page Redirect
    Route::get('/adHomepage', function(){
        return view('website.layout.adHomepage');
    })
        ->name('adHomepage');


    // Admin Hall Management
    Route::get('/HallManagement', [HallController::class, 'index'])
        -> name('hall.index');

    Route::get('/addHall', [HallController::class, 'hall_add'])
        -> name('hall.add');

    Route::post('/Hall_added', [HallController::class, 'hall_store'])
        -> name('hall.store');

    Route::get('/editHall/{hall_id}', [HallController::class, 'hall_edit'])
        -> name('hall.edit');

    Route::post('/hall_updated', [HallController::class, 'hall_update'])
        -> name('hall.update');

    Route::get('/hall_delete/{hall_id}', [HallController::class, 'hall_destroy'])
        ->name('hall.delete');

    // Admin Seat Management
    Route::get('/SeatManagement', [SeatController::class, 'index'])
        -> name('seat.index');

    Route::get('/addSeat', [SeatController::class, 'seat_add'])
        -> name('seat.add');

    Route::post('/Seat_added', [SeatController::class, 'seat_store'])
        -> name('seat.store');

    Route::get('/editSeat/{seat_id}', [SeatController::class, 'seat_edit'])
        -> name('seat.edit');

    Route::post('/Seat_updated', [SeatController::class, 'seat_update'])
        -> name('seat.update');

    Route::get('/Seat_delete/{seat_id}', [SeatController::class, 'seat_delete'])
        ->name('seat.delete');

    // Admin Movie Management
    Route::get('/MovieManagement', [MovieController::class, 'index'])
        -> name('movie.index');

    Route::get('/addMovie', [MovieController::class, 'movie_add'])
        -> name('movie.add');

    Route::post('/Movie_added', [MovieController::class, 'movie_store'])
        -> name('movie.store');

    Route::get('/editMovie/{m_id}', [MovieController::class, 'movie_edit'])
        -> name('movie.edit');

    Route::post('/Movie_updated', [MovieController::class, 'movie_update'])
        -> name('movie.update');

    Route::get('/Movie_delete/{m_id}', [MovieController::class, 'movie_delete'])
        ->name('movie.delete');

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