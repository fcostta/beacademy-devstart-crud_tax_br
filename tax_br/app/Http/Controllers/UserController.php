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

    public function showUsers($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('users.list');

        $title = 'Usuário' . $user->name;
        return view('users.show', compact('user', 'title'));
    }
    


}
