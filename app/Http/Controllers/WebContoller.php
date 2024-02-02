<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebContoller extends Controller
{
    //
    // Admin
    //

    //
    // Client
    //
    public function viewLogin(){
        return view('clientViews.auth.login');
    }
    public function viewRegister(){
        return view('clientViews.auth.register');
    }
}
