<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller

{

    public function showRegister()

    {

        return view('website.layout.register'); //return register page

    }

    public function showLogin()

    {

        return view('website.layout.login'); //return login page

    }

    public function login(Request $request)

    {

        // $validator = Validator::make($request->all(), [

        // 'email' => 'required|email',

        // 'password' => 'required',

        // ]);

        // if ($validator->fails()) {

        //     return redirect()->back()

        //     ->withErrors($validator)

        //     ->withInput();

        //     }

        // $remember = $request->remember;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            if (Auth::user()->role_id == 2) {
            
                $userEmail = Auth::user()->full_name;
                $request->session()->put('user',$userEmail);

            return view('website.layout.homepage');

            } else {

                return view('admin2.layout.index');

            }

        }

    else{
        return redirect()->route('login')->with('message','Invalid email or password');
    }

    }

    public function store(Request $request)

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

    

        // if ($request->hasFile('avatar')) {

        //     $file = $request->file('avatar');

        //     $path = public_path('UserCSS/Users_Avatar');

        //     $fileName = time() . '_' . $file->getClientOriginalName();

        //     $file->move($path, $fileName);

        //     } else {

        //     $fileName = 'noname.jpg';

        // }

        $user = DB::table('users')->where('email', $request->email)->first();

        if (!$user) {

            $newUser = new User();

            $newUser->email = $request->email;

            $newUser->password = Hash::make($request->password);

            $newUser->full_name = $request->full_name;

            $newUser->role_id = 2;

            $newUser->phone = $request->phone;

            $newUser->save();

            return redirect()->route('login')->with('message', 'Create success!');

            } 
        
        else {

            return redirect()->route('register')->with('message', 'Create failed!');

            }

        }

    }

    public function logout()

    {

        Auth::logout();
        Session::flush();

        return redirect()->route('login');

    }

}