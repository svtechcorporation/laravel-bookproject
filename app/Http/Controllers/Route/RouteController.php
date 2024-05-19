<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;



class RouteController extends Controller
{
    public function home(){

        $data = Book::get();

        $journals = $data->where('type','journal');
        $books = $data->where('type','book');

        $bestbook = $books->random(5)->shuffle();
        $newbook = $books->random(5)->shuffle();
        $trendingbook = $books->random(5)->shuffle();
        $newjournals = $journals->random(3);

        // dd($bestbook);

        return view('home', [
            'title'=>'Home',
            'header'=>'Home',
            'bestbooks'=>$bestbook,
            'trendingbooks'=>$trendingbook,
            'newbooks'=>$newbook,
            'newjournals'=>$newjournals,
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
        $data = Book::get();
        $books = $data->where('type','book');
        $similarbooks = $books->random(5)->shuffle();

        return view('pages.cart', [
            'title'=>'Home',
            'header'=>'Cart Item',
            'similarbooks'=>$similarbooks,
        ]);
    }

    public function search(){

        return view('pages.search', [
            'title'=>'Home',
            'header'=>'Search',
        ]);

    }

    

}
