<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect(route('view.home'))->with('message', 'Login Successful!');
        }
        return redirect(route('view.login'))->with('message', 'Login Failed!');
    }
    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('view.login'));
    }
    public function viewRegister()
    {
        return view('clientViews.auth.register');
    }
    public function Register(Request $request)
    {
        $created_at = Carbon::now()->toDateTimeString();
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'contactNo' => 'required',
            'email' => 'required|email|unique:users',
            'retypeemail' => 'required|email',
            'password' => 'required|min:6',
            'retypepassword' => 'required|min:6',
        ]);
        $data = $request->all();
        if ($data['email'] != $data['retypeemail']) {
            return redirect(route('view.register'))->with('message', 'Invalid email.');
        } elseif ($data['password'] != $data['retypepassword']) {
            return redirect(route('view.register'))->with('message', 'Invalid Password.');
        } else {
            User::insert([
                'firstname' => $data['firstName'],
                'middleName' => $data['middleName'],
                'lastName' => $data['lastName'],
                'birthday' => $data['birthday'],
                'contactNo' => $data['contactNo'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'created_at' => $created_at
            ]);
            return redirect(route('view.login'))->with('message', 'Account successfully created!');
        }
    }
    public function viewHome()
    {
        return view('clientViews.webpages.home');
    }
    public function viewSubject($id)
    {
        return view('clientViews.webpages.subject');
    }
    public function viewGrades($id)
    {
        return view('clientViews.webpages.grades');
    }
    public function viewTuition($id)
    {
        return view('clientViews.webpages.tuition');
    }
    public function viewAnnouncement($id)
    {
        return view('clientViews.webpages.announcement');
    }
}
