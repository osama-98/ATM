<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function edit($id)
    {
        return view('users.index', [
            'id' => $id
        ]);
    }
}
