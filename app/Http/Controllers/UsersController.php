<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function list()
    {
        $data['getRecord'] = User::getRecord();
        return view('admin.users.list', $data);
    }


    public function add()
    {
        $data['getRecord'] = Role::getRecord();
        return view('admin.users.add', $data);
    }


    public function insert(Request $request)
    {
        request()->validate([
            'email'=> 'required|email|unique:users',
        ]);

        $data = new User();
        $data->name = trim($request->name);
        $data->email = trim($request->email);
        $data->password = Hash::make($request->password);
        $data->role_id = trim($request->role_id);
        $data->save();

        return redirect('admin/users')->with('success', "Insert Successfully");

    }

    public function show($users)
    {
        //
    }


    public function edit($users)
    {
        //
    }


    public function update(Request $request, $users)
    {
        //
    }


    public function destroy($users)
    {
        //
    }
}
