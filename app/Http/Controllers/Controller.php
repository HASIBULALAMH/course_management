<?php

namespace App\Http\Controllers;

abstract class Controller
{    
    //the dashboard view 
    // is the main view of the application
    public function dashboard()
    {
        return view('dashboard');
    }
}
