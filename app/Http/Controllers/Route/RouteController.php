<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class RouteController extends Controller {   

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
        $books = Book::where('type', 'book')->paginate(4);

        return view('pages.booklist', [
            'title'=>'Books',
            'header'=>'Books',
            'books'=>$books,
        ]);
    }

    public function journals(){
        $books = Book::where('type', 'journal')->paginate(4);

        return view('pages.journal', [
            'title'=>'Journals',
            'header'=>'Journals',
            'books'=>$books,
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
        $user = auth()->user(); 
        if($user == null){
            return redirect()->route('login')
                    ->with('status', 'Please login first to view your cart');
        }

        $CART_ID = "BOOKWEBSITE_ALL_ITEMS_STORED_FOR_CART";
        $data = Book::get();
        $books = $data->where('type','book');
        $similarbooks = $books->random(5)->shuffle();

        $cart_books = $data->where('type', 'none');

        if(isset($_COOKIE[$CART_ID])){
            $stored_cart = $_COOKIE[$CART_ID];
            $array = explode(',', $stored_cart);
            $cart_books = Book::whereIn('id', $array)->get();
        } 

        // $ownedbooks = $user->books;
        $ownedbooks = DB::table('book_user')->where('user_id', $user->id)->get();

        // dd($ownedbooks[0]->status);
        $ownerprofile = Owner::find(1);

        return view('pages.cart', [
            'title'=>'Cart',
            'header'=>'Cart Item',
            'similarbooks'=>$similarbooks,
            'cartbooks'=>$cart_books,
            'ownedbooks'=>$ownedbooks,
            'ownerprofile'=>$ownerprofile,
        ]);
    }

    public function checkout(Request $request){
        $user = auth()->user(); 
        if($user == null){
            return redirect()->route('login')
                    ->with('status', 'Please login first to checkout your cart');
        }

        $this->validate($request, [
            'payment'=>'required',
        ]);

        $filename = $request->file('payment');
        $reFilename = time().'_payment.'.$filename->getClientOriginalExtension();
        $dest = public_path('payment/');
        $filename->move($dest, $reFilename);


        $CART_ID = "BOOKWEBSITE_ALL_ITEMS_STORED_FOR_CART";

        if(isset($_COOKIE[$CART_ID])){
            $stored_cart = $_COOKIE[$CART_ID];
            $array = explode(',', $stored_cart);
            $cart_books = Book::whereIn('id', $array)->get();
            $lastId = DB::table('book_user')->latest('id')->value('transaction_id');
            if($lastId == null){
                $lastId = 111;
            } else {
                $lastId = (int)$lastId + 1;
            }
            
            if($cart_books->count()>0){
                foreach($cart_books as $book){
                    if($user->books->where('book_id', $book->id)->count()<1){
                        $user->books()->attach($book->id, [
                            'status'=>'pending',
                            'transaction_id'=>$lastId,
                            'payment'=>$reFilename,
                            'created_at'=>now(),
                        ]);
                    }
                }
            }
        } 
        $CART_ID = "BOOKWEBSITE_ALL_ITEMS_STORED_FOR_CART";
        setcookie($CART_ID, '');
        return redirect()->back()
                ->with('status', 
                'Cart item are successfully checked out, 
                waiting for authorization, 
                check your profile for more details');
    }

    public function search(Request $request){
        $this->validate($request,[
            'search'=>'required'
        ]);
        $search_query = $request->search;

        $data = Book::get();
        $books = $data->where('type','book');
        $similarbooks = $books->random(5)->shuffle();

        $search_books = Book::where('title', 'LIKE', '%' . $search_query . '%')
             ->orWhere('author', 'LIKE', '%' . $search_query . '%')
             ->get();

        return view('pages.search', [
            'title'=>'Search',
            'header'=>'Search',
            'search_query'=>$search_query,
            'search_books'=>$search_books,
            'similarbooks'=>$similarbooks,
        ]);

    }

    public function viewbook(Book $book){
        $data = Book::get();
        $books = $data->where('type','book');
        $similarbooks = $books->random(5)->shuffle();


        return view('pages.viewbook', [
            'title'=>'Home',
            'header'=>'Home',
            'similarbooks'=>$similarbooks,
            'book'=>$book,
        ]);
    }

    

}
