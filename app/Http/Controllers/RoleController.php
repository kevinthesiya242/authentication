<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Role;
use Session;

class RoleController extends Controller
{
    public function index()
    {
    	return view('admin.role.index');
    }

    public function create(){
   		return view('admin.role.create');
   	}

   	public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10|min:3',
        ]);

        if ($validator->fails()) {
        	session::flash('roc','Role not created.');
            return redirect('admin/role/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Store the blog post...
        $role = new Role;
        $role->name = $request->name;
        $role->save();
        session::flash('rc','role is created');
        return redirect('admin/role/create');
    }
}
