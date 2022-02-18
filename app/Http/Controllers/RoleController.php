<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function all(){
        return view('roles.all');
    }

    public function add(){
        return view('roles.add');
    }

    public function save(Request $request){
        //validate then save

        $validated = $request->validate([
            'role_name' => 'required|alpha',
            'role_desc' => 'required|alpha',
        ]);
        //save
        $role = new Role();
        $role->name = $request->get('role_name');
        $role->desc = $request->get('role_desc');
        $role->save();
        return redirect('roles');
    }
}
