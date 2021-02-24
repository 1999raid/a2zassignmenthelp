<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function humanities_assignment_help()
    {
        return view('humanities_assignment_help');
    }

    public function engineering_assignment_help()
    {
        return view('engineering_assignment_help');
    }

    public function law_assignment_help()
    {
        return view('law_assignment_help');
    }

    public function economics_assignment_help()
    {
        return view('economics_assignment_help');
    }

    public function finance_assignment_help()
    {
        return view('finance_assignment_help');
    }

    public function management_writing_services()
    {
        return view('management_writing_services');
    }

    public function academic_assignment_help()
    {
        return view('academic_assignment_help');
    }

    public function statistics_assignment_help()
    {
        return view('statistics_assignment_help');
    }
    public function nursing_assignment_help()
    {
        return view('nursing_assignment_help');
    }
    public function business_report_help()
    {
        return view('business_report');
    }

}
