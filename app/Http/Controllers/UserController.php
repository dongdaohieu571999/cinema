<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\File;

class UserController extends Controller

{
    // Admin Panel function

    public function index()
    {
        $users=User::all();
        return view('admin2.layout.User.informationUser', compact('users'));

    }

    public function user_add()
    {
        $roles=Role::all();
        return view('admin2.layout.User.adduser', ['roles' => $roles]);
    }

    public function admin_user_store(Request $request)

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

    

        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');

            $path = public_path('UserCSS/Users_Avatar');

            $fileName = time() . '_' . $file->getClientOriginalName();

            $file->move($path, $fileName);

            } else {

            $fileName = 'noname.jpg';

        }

        $user = DB::table('users')->where('email', $request->email)->first();

        if (!$user) {

            $newUser = new User();

            $newUser->email = $request->email;

            $newUser->password = Hash::make($request->password);

            $newUser->full_name = $request->full_name;

            $newUser->role_id = $request->role_id;

            $newUser->phone = $request->phone;

            $newUser->avatar = $fileName;

            $newUser->save();

            return redirect()->route('user.index')->with('message', 'Create success!');

            } 
        
        else {

            return redirect()->route('user.add')->with('message', 'Create failed!');

            }

        }

    }

    public function admin_user_edit($user_id)
    {
        $roles = Role::all();
        $user = User::with('roleid') -> find($user_id);
        return view('admin2.layout.User.edituser', ['user' => $user, 'roles' => $roles]);
    }
    
    public function admin_user_update(Request $request)
    {
        
        if ($request->isMethod('POST')){
            $fileName="";
            if ($request->hasFile('avatar')) {

                $file = $request->file('avatar');
    
                $path = public_path('UserCSS/Users_Avatar');
    
                $fileName = time() . '_' . $file->getClientOriginalName();
    
                $file->move($path, $fileName);
    
            } 
    
            $user = User::find($request->input('user_id'));
    
            if ($user != null) {                    
    
                $user->email = $request->email;
    
                $user->full_name = $request->full_name;
    
                $user->role_id = $request->role_id;
    
                $user->phone = $request->phone;

                if ($user->password != $request->password){
                    $user->password = Hash::make($request->password);
                }
    
                if($fileName){
                    $user->avatar = $fileName;
                }

              
    
                $user->save();
    
                return redirect()->route('user.index')->with('message', 'User updated successfully!');
    
                } 
            
            else {
    
                return redirect()->route('user.index')->with('message', 'User is not updated!');
    
                }
        }        

    }
    
    public function admin_user_delete($user_id)

    {

        $user = User::find($user_id);

        $image_path = "/UserCSS/Users_Avatar/.$user->avatar"; // Value is not URL but directory file path

        if(File::exists($image_path)) {

            File::delete($image_path);

        }

        $user->delete();

        return redirect()->route('user.index')

        ->with('success', 'User deleted successfully');

    }
    
    // User Function

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
                $userEmail = Auth::user()->full_name;
                $request->session()->put('user',$userEmail);
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

    public function user_self_update(Request $request)
    {
        
        if ($request->isMethod('POST')){
            $fileName="";
            if ($request->hasFile('avatar')) {

                $file = $request->file('avatar');
    
                $path = public_path('UserCSS/Users_Avatar');
    
                $fileName = time() . '_' . $file->getClientOriginalName();
    
                $file->move($path, $fileName);
    
            } 
    
            $user = User::find($request->input('user_id'));
    
            if ($user != null) {                    
    
                $user->email = $request->email;
    
                $user->full_name = $request->full_name;
    
                $user->role_id = $request->role_id;
    
                $user->phone = $request->phone;

                if ($user->password != $request->password){
                    $user->password = Hash::make($request->password);
                }
    
                if($fileName){
                    $user->avatar = $fileName;
                }

              
    
                $user->save();
    
                return redirect()->route('user.profile')->with('message', 'User updated successfully!');
    
                } 
            
            else {
    
                return redirect()->route('user.profile')->with('message', 'User is not updated!');
    
                }
        }        

    }

}