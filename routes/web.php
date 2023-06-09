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

Route::get('/demo', function(){
    return view('admin2.layout.demo');
});

Route::get('/add', function(){
    return view('admin2.layout.add');
});