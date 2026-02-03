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
        $data['getUserData'] = User::getUserData();
        return view('admin.users.list', $data);
    }


    public function add()
    {
        $data['getRoleData'] = Role::getRoleData();
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


    public function edit($id)
    {
        $data['getUserData'] = User::getUserId($id);
        $data['getRoleData'] = Role::getRoleData();
        //  dd($data['getUserData']);
        return view('admin.users.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = User::getUserId($id);

        $data->name = trim($request->name);
        $data->email = trim($request->email);

        if (!empty($request->password)) {
            $data->password = Hash::make($request->password);
        }

        $data->role_id = trim($request->role_id);
        $data->save();

        return redirect('admin/users')->with('success', 'Update Successfully');
    }


    public function delete($id)
    {
        $data = User::getUserId($id);
        $data->delete();

        return redirect('admin/users')->with('success', "Delete Successfully");
    }

    public function show($users)
    {
        //
    }

}
