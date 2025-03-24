<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function list()
    {
        return view('admin.users.list');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Users $users)
    {
        //
    }


    public function edit(Users $users)
    {
        //
    }


    public function update(Request $request, Users $users)
    {
        //
    }


    public function destroy(Users $users)
    {
        //
    }
}
