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

    // books
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
    public function editbooks(){

        return view('admin.bookpage', [
            'route'=>'book',
            'operation'=>'edit',
        ]);
    }

    //  journals
    public function journals(){

        return view('admin.journalpage', [
            'route'=>'journal',
            'operation'=>'view',
        ]);
    }
    public function addjournals(){

        return view('admin.journalpage', [
            'route'=>'journal',
            'operation'=>'add',
        ]);
    }


    public function editjournals(){

        return view('admin.journalpage', [
            'route'=>'journal',
            'operation'=>'edit',
        ]);
    }
}
