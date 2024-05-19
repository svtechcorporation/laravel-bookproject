<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class UserController extends Controller
{


    
    public function profile(){
        $data = Book::get();
        $books = $data->where('type','book');
        $similarbooks = $books->random(5)->shuffle();

        return view('pages.profile', [
            'title'=>'Home',
            'header'=>'User Profile',
            'similarbooks'=>$similarbooks,
        ]);
    }
}
