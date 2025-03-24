<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function list()
    {
        $data['getRoles'] = Role::getRoles();
        return view('admin.role.list', $data);
    }

    public function add()
    {
        $getPermission = Permission::getRecord();
        $data['getPermission'] = $getPermission;
        return view('admin.role.add', $data);
    }

    public function insert(Request $request)
    {
        $data = New Role;
        $data->name = $request->name;
        $data->save();

        return redirect('admin/role')->with('success', 'Insert Successfully');
    }

    public function edit($id)
    {
        $data['getRoles'] = Role::getSingle($id);
        return view('admin.role.edit', $data);
    }

    public function update($id, Request $request)
    {
        $data= Role::getSingle($id);
        $data->name = $request->name;
        $data->save();

        return redirect('admin/role')->with('success', 'Update Successfully');
    }

    public function delete($id)
    {
        $data= Role::getSingle($id);
        $data->delete();

        return redirect('admin/role')->with('success', 'Delete Successfully');
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Role $role)
    {
        //
    }

}
