<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $users=[
            'names'=>['fabio',
                    'costa']
        ];
    
        dd($users);
    
    }

}
