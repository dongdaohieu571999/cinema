<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class RoleController extends Controller
{
    
    public function index()
    {
        $roles=Role::all();
        return view('admin2.layout.informationRole', compact('roles'));

    }

    public function role_add()
    {
        return view('admin2.layout.addrole');
    }

    public function role_store(Request $request)
    {
        if ($request->isMethod('POST')){
            $newRole = new Role();
            $newRole->role_name = $request->role_name;
            $newRole->save();
            return redirect() -> route('role.index')
            ->with('success','Role added succesfully');
        }
    }

    public function role_edit($role_id)
    {
        $role = Role::find($role_id);
        return view('admin2.layout.editrole', ['role' => $role]);
    }

    public function role_update(Request $request)
    {
        if ($request->isMethod('POST')){
            $role = Role::find($request->input('role_id'));
            if ($role != null) {
                
                $role->role_name = $request->role_name;
                $role->save();   
                return redirect() ->route('role.index')
                -> with('success', 'Role is updated successfully');
            } 
            else
            {
                return redirect() ->route('role.index')
                -> with('Error', 'Role is not updated');
            }
        }
    }

    public function role_destroy($role_id)
    {
        $role = Role::find($role_id);
        $role->delete();
        return redirect()->route('role.index')
        ->with('success', 'Role is deleted successfully');
    }
}  