<?php

<<<<<<< Updated upstream
=======
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MovieController;
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
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
=======
    // Admin Movie Management
    Route::get('/MovieManagement', [MovieController::class, 'index'])
        -> name('movie.index');

    Route::get('/addMovie', [MovieController::class, 'movie_add'])
        -> name('movie.add');

    Route::post('/movie_added', [MovieController::class, 'movie_store'])
        -> name('movie.store');

    Route::get('/editMovie/{m_id}', [MovieController::class, 'movie_edit'])
        -> name('movie.edit');

    Route::post('/movie_updated', [MovieController::class, 'movie_update'])
        -> name('movie.update');

    Route::get('/movie_delete/{m_id}', [MovieController::class, 'movie_delete'])
        ->name('movie.delete');

    // Admin Show Management
    Route::get('/ShowManagement', function(){
        return view('admin2.layout.informationShow');
    });
>>>>>>> Stashed changes

Route::get('/editrole', function(){   
    return view('admin2.layout.editrole');
});

Route::get('/adduser', function(){
    return view('admin2.layout.adduser');
});

<<<<<<< Updated upstream
Route::get('/edituser', function(){
    return view('admin2.layout.edituser');
});
=======
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
>>>>>>> Stashed changes
