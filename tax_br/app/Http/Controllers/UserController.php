<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function listUsers()
    {
        $users = User::all();
        return view('users.list', compact('users'));
    }

}
