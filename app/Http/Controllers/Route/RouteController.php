<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home(){

        return view('home', [
            'title'=>'Home',
            'header'=>'Home',
        ]);
    }

    public function books(){

        return view('pages.booklist', [
            'title'=>'Books',
            'header'=>'Books',
        ]);
    }

    public function journals(){

        return view('pages.journal', [
            'title'=>'Journals',
            'header'=>'Journals',
        ]);
    }

    public function aboutus(){

        return view('pages.aboutus', [
            'title'=>'About Us',
            'header'=>'About Us',
        ]);
    }


    public function contactus(){

        return view('pages.contactus', [
            'title'=>'Contact Us',
            'header'=>'Contact Us',
        ]);
    }
    
    public function cart(){

        return view('pages.cart', [
            'title'=>'Home',
            'header'=>'Cart Item',
        ]);
    }

    public function search(){

        return view('pages.search', [
            'title'=>'Home',
            'header'=>'Search',
        ]);

    }

    

}
