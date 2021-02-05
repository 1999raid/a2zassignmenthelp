<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQ extends Controller
{
    function Faq()
    {
        return view('user.faq');
    }
}
