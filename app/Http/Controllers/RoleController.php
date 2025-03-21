<?php

namespace App\Http\Controllers;

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
        return view('admin.role.add');
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


    public function update(Request $request, Role $role)
    {
        //
    }


    public function destroy(Role $role)
    {
        //
    }
}
