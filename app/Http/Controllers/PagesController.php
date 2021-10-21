<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function admin(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }
}
