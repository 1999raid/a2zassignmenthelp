<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function ServiceView()
    {
        return view('user.services');
    }
    function ServiceReq(Request $req)
    {
        print_r($req->all());
    }
}
