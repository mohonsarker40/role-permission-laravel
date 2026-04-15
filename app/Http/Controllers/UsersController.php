<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }


    public function list()
    {
        $data['users'] = $this->model
            ->select('users.*', 'roles.name as role_name')
            ->leftJoin('roles', 'roles.id', '=', 'users.role_id')
            ->orderBy('users.id', 'desc')
            ->get();

        return view('admin.users.list', $data);
    }


    public function add()
    {
        $data['roles'] = Role::orderBy('id', 'desc')->get();
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
        $data['users'] = User::find($id);
        $data['roles'] = Role::orderBy('id', 'desc')->get();
        return view('admin.users.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => $request->password ? Hash::make($request->password) : $data->password,
        ]);
        return redirect('admin/users')->with('success', 'Update Successfully');
    }


    public function delete($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect('admin/users')->with('success', "Delete Successfully");
    }

    public function show($users)
    {
        //
    }

}
