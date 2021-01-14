<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function UserView()
    {
        return view('user.assignment_user');
    }
}
