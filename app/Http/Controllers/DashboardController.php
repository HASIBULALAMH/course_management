<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //the dashboard view 
    // is the main view of the application
    public function dashboard()
    {
        return view('dashboard');
    }
}
