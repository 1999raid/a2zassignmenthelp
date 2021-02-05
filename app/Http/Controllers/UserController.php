<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function UserView()
    {
        return view('user.active_assignment');
    }
    function Completed()
    {
        return view('user.completed_assignment');
    }
    function Expired()
    {
        return view('user.expired_assignment');
    }
    function Rework()
    {
        return view('user.rework_assignment');
    }
}
