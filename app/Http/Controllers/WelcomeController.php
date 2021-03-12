<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function Welcome()
    {
        return view('user.welcome');
    }

    public function Fair_use_of_policy()
    {
        return view('footer.fair_use_of_policy');
    }

    public function Get_to_know_us()
    {
        return view('footer.get_to_know_us');
    }

    public function Legit_essays()
    {
        return view('footer.legit_essays');
    }

    public function Resume_builder()
    {
        return view('footer.resume_builder');
    }

    public function Premium()
    {
        return view('footer.premium');
    }

    public function Term_of_use()
    {
        return view('footer.term_of_use');
    }

    public function Revision_and_refund()
    {
        return view('footer.revision_and_refund');
    }
}
