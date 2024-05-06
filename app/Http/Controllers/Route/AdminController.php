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
}
