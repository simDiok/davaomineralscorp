<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function forgotpassword(){
        return view('auth.forgot-password');
    }

    public function resetpassword(){
        return view('auth.reset-password');
    }
}
