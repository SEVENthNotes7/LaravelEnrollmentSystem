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
    public function viewLogin()
    {
        return view('clientViews.auth.login');
    }
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        return $this->viewLogin();
    }
    public function viewRegister()
    {
        return view('clientViews.auth.register');
    }
    public function Register(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'retypeemail' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'retypepassword' => 'required|min:6',
        ]);
        dd($request);
    }
}
