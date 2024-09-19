<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        
        return view('pages.login', [
            'title'=>'Login',
            'header'=>'Login',
        ]);
    }


    public function register(){
        
        return view('pages.register', [
            'title'=>'Register',
            'header'=>'Register',
        ]);
    }
}


