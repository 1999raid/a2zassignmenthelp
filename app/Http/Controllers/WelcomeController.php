<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testmode;
class WelcomeController extends Controller
{
    //
    public function Welcome()
    {
        return view('user.welcome');
    }
    public function getquote()
    {
        return view('givequoteform');
    }
    public function addData(Request $req)
    {
          $testmode=new Testmode;
          $testmode->name=$req->name;
          $testmode->image=$req->image;
          $testmode->save();
    }
}
