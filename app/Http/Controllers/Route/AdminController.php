<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){

        return view('admin.dashboard', [
            'route'=>'dashboard',
        ]);
    }


    public function books(){

        return view('admin.bookpage', [
            'route'=>'book',
            'operation'=>'view',
        ]);
    }
    public function addbooks(){

        return view('admin.bookpage', [
            'route'=>'book',
            'operation'=>'add',
        ]);
    }
}
