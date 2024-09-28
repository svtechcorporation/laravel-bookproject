<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
 
    public function __construct(){
        $this->middleware(['guest']);
    }
    
    public function login(){
        
        return view('pages.login', [
            'title'=>'Login',
            'header'=>'Login',
        ]);
    }

    public function loginuser(Request $request){

        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with("status", "Invalid login details");
        }
        if(auth()->user()->privilede === 'admin'){
            return redirect()->route('admin');
        }

        return redirect()->route('home');
    }


    public function register(){
        
        return view('pages.register', [
            'title'=>'Register',
            'header'=>'Register',
        ]);
    }


    public function registeruser(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);
        $user = User::get()->where('email', $request->email);
        if($user->count()>0){
            return back()->with("status", "Email already exists");
        }
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('home');
    }
}


