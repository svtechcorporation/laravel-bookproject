<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class UserController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

    public function download(Book $book){
        $filepath = public_path('files/'.$book->file);
        $extension = pathinfo($filepath, PATHINFO_EXTENSION);
        $filename = $book->title.".".$extension;
        return Response::download($filepath, $filename);
    }

    public function profile(){
        
        $data = Book::get();
        $books = $data->where('type','book');
        $similarbooks = $books->random(5)->shuffle();

        $user = auth()->user();

        $pending_book = DB::table('book_user')->where('user_id', $user->id)
                            ->where('status','pending')->get();
        foreach($pending_book as $bk){
            $bk->book = Book::where('id', $bk->book_id)->first();
        }

        $verified_book = DB::table('book_user')->where('user_id', $user->id)
                            ->where('status','verified')->get();
        foreach($verified_book as $bk){
            $bk->book = Book::where('id', $bk->book_id)->first();
        }

        return view('pages.profile', [
            'title'=>'Home',
            'header'=>'User Profile',
            'similarbooks'=>$similarbooks,
            'pendingbook'=>$pending_book,
            'verifiedbook'=>$verified_book,
        ]);
    }



}
