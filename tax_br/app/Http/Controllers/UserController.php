<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }


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


    public function createUsers()
    {
        return view('users.create');
    }

    public function storeUsers(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $this->model->create($data);


        return redirect()->route('users.list');
    }


    public function editUsers($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        return view('users.edit', compact('user'));
    }


    public function updateUsers(Request $request, $id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        $data = $request->all();

        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $data['password'] = $user->password;
        $user->update($data);
        return redirect()->route('users.list');
    }


    public function destroyUsers($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        $user->delete();
        return redirect()->route('users.list')->with('destroy', 'excluido!');


    }
}
