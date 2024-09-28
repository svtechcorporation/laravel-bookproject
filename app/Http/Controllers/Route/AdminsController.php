<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AdminsController extends Controller
{





    public function __construct(){
        $this->middleware(['auth']);
    }

    public function downloadreceipt($file){
        $filepath = public_path('payment/'.$file);
        // $extension = pathinfo($filepath, PATHINFO_EXTENSION);
        $filename = $file;
        return Response::download($filepath, $filename);
    }

    public function verifypayment(Request $request){
        $id = $request->id; 
        $books = DB::table('book_user')->where('transaction_id', $id)->get();

        foreach($books as $book){
            DB::table('book_user')
                ->where('id', $book->id)     
                ->update(['status' => 'verified']);
        }
        return redirect()->route('admin');
    }


    public function home(){
        $user = User::where('privilede', 'user')->get();
        $allbooks = Book::all();
        $books = $allbooks->where('type', 'book');
        $journals = $allbooks->where('type', 'journal');
        $verified_books = DB::table('book_user')->where('status', 'verified')->get();
        $pending_books = DB::table('book_user')->where('status', 'pending')->get()
                        ->unique('transaction_id');

        $soldbooksprice = 0;
        foreach($verified_books as $verified_book){
            $sold_book = $allbooks->where('id', $verified_book->book_id)->first();
            $soldbooksprice = $soldbooksprice + (int)$sold_book->price;
        }

        foreach($pending_books as $pending_book){
            $pending_id = DB::table('book_user')->where('status', 'pending')
                            ->where('transaction_id', $pending_book->transaction_id)->get();
            $totalprice = 0;
            foreach($pending_id as $id){
                $p_books = $allbooks->where('id', $id->book_id);
                foreach($p_books as $pb){
                    $totalprice = $totalprice + (int)$pb->price;
                }
            }
            $pending_book->user = User::where('id', $pending_book->user_id)->first();
            $pending_book->amount = $totalprice;
        }

        $ownerprofile = Owner::find(1);
        return view('admin.home', [
            "operation"=> "dashboard",
            "owner"=> "view",
            "ownerprofile"=> $ownerprofile,
            'route'=>'dashboard',
            'total_user'=>$user->count(),
            'total_book'=>$books->count(),
            'total_journal'=>$journals->count(),
            'sold_books'=>$verified_books->count(),
            'pendingbook'=>$pending_books,
            'soldbooksprice'=>$soldbooksprice,
        ]);
    }


    public function saveowner(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'account_number'=>'required|numeric',
            'account_name'=>'required',
            'bank'=>'required',
        ]);

        Owner::updateOrCreate(
            ['id'=>1],
            $request->only('name', 'email', 'phone', 'account_number', 'account_name', 'bank')
        );

        return redirect()->back()->with('status','Successfully saved information');
    }


    public function editowner(){
        $user = User::where('privilede', 'user')->get();
        $allbooks = Book::all();
        $books = $allbooks->where('type', 'book');
        $journals = $allbooks->where('type', 'journal');
        $verified_books = DB::table('book_user')->where('status', 'verified')->get();
        $pending_books = DB::table('book_user')->where('status', 'pending')->get()
                        ->unique('transaction_id');


        foreach($pending_books as $pending_book){
            $pending_id = DB::table('book_user')->where('status', 'pending')
                            ->where('transaction_id', $pending_book->transaction_id)->get();
            $totalprice = 0;
            foreach($pending_id as $id){
                $p_books = $allbooks->where('id', $id->book_id);
                foreach($p_books as $pb){
                    $totalprice = $totalprice + (int)$pb->price;
                }
            }
            $pending_book->user = User::where('id', $pending_book->user_id)->first();
            $pending_book->amount = $totalprice;
        }
        $ownerprofile = Owner::find(1);

        $soldbooksprice = 0;
        foreach($verified_books as $verified_book){
            $sold_book = $allbooks->where('id', $verified_book->book_id)->first();
            $soldbooksprice = $soldbooksprice + (int)$sold_book->price;
        }

        return view('admin.home', [
            "operation"=> "dashboard",
            "owner"=> "edit",
            "ownerprofile"=> $ownerprofile,
            'route'=>'dashboard',
            'total_user'=>$user->count(),
            'total_book'=>$books->count(),
            'total_journal'=>$journals->count(),
            'sold_books'=>$verified_books->count(),
            'pendingbook'=>$pending_books,
            'soldbooksprice'=>$soldbooksprice,
        ]);
    }



    public function viewtransaction($id){

        $user = User::all();
        $allbooks = Book::all();
        $books = $allbooks->where('type', 'book');
        $journals = $allbooks->where('type', 'journal');
        $verified_books = DB::table('book_user')->where('status', 'verified')->get();
        $pending_books = DB::table('book_user')->where('status', 'pending')
                    ->where('transaction_id', $id)->get();

        $totalprice = 0;

        foreach($pending_books as $pbk){
            $bk = $allbooks->where('id', $pbk->book_id)->first();
            $totalprice = $totalprice + (int)$bk->price;
            $pbk->book = $bk;
            $usr = $user->where('id', $pbk->user_id)->first();
            $pbk->user = $usr;
        }
        // dd($pending_books);
        $ownerprofile = Owner::find(1);
         $soldbooksprice = 0;
        foreach($verified_books as $verified_book){
            $sold_book = $allbooks->where('id', $verified_book->book_id)->first();
            $soldbooksprice = $soldbooksprice + (int)$sold_book->price;
        }
        return view('admin.home', [
            "operation"=> "view",
            "owner"=> "view",
            "ownerprofile"=> $ownerprofile,
            'route'=>'dashboard',
            'total_user'=>$user->count(),
            'total_book'=>$books->count(),
            'total_journal'=>$journals->count(),
            'sold_books'=>$verified_books->count(),
            'pending_books'=>$pending_books,
            'totalprice'=>$totalprice,
            'soldbooksprice'=>$soldbooksprice,
        ]);
    }


    public function books(){
        $books = Book::get()->where('type','book');

        return view('admin.pages.books', [
            'route'=>'book',
            'operation'=>'view',
            'books'=>$books,
        ]);
    }

    public function journals(){
        $books = Book::get()->where('type','journal');

        return view('admin.pages.books', [
            'route'=>'journal',
            'operation'=>'view',
            'books'=>$books,
        ]);
    }


    public function addbooks(){
        return view('admin.pages.books', [
            'route'=>'book',
            'operation'=>'add',
        ]);
    }

    public function addjournals(){
        return view('admin.pages.books', [
            'route'=>'journal',
            'operation'=>'add',
        ]);
    }
    
    
    public function editbooks(Book $book){
        return view('admin.pages.books', [
            'route'=>'book',
            'operation'=>'edit',
            'book'=>$book,
        ]);
    }
    public function editjournals(Book $book){
        return view('admin.pages.books', [
            'route'=>'journal',
            'operation'=>'edit',
            'book'=>$book,
        ]);
    }


    
    public function updatebooks(Request $request, Book $book){
        $this->validate($request, [
            'title'=>'required',
            'author'=>'required',
            'price'=>'required',
            'language'=>'required',
            'quantity'=>'required',
            'description'=>'required',
        ]);

        $book->title = $request->title;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->language = $request->language;
        $book->quantity = $request->quantity;
        $book->description = $request->description;

        if($request->has('cover')){
            $cover = $request->file('cover');
            $reCover = time().'_cover.'.$cover->getClientOriginalExtension();
            $dest = public_path('covers/');
            File::delete(public_path('covers/'.$book->cover));
            $cover->move($dest, $reCover);
            $book->cover = $reCover;
        }

        if($request->has('file')){
            $filename = $request->file('file');
            $reFilename = time().'_file.'.$filename->getClientOriginalExtension();
            $dest = public_path('files/');
            File::delete(public_path('files/'.$book->file));
            $filename->move($dest, $reFilename);
            $book->file = $reFilename;
        }

        $book->save();
        
        return redirect()->back()->with('status','Successfully updated');

    }


    
    public function storebooks(Request $request){
        $this->validate($request, [
            'title'=>'required',
            'author'=>'required',
            'price'=>'required',
            'language'=>'required',
            'quantity'=>'required',
            'description'=>'required',
            'cover'=>'required',
            'file'=>'required',
        ]);

        $cover = $request->file('cover');
        $reCover = time().'_cover.'.$cover->getClientOriginalExtension();
        $dest = public_path('covers/');
        $cover->move($dest, $reCover);
        
        $filename = $request->file('file');
        $reFilename = time().'_file.'.$filename->getClientOriginalExtension();
        $dest = public_path('files/');
        $filename->move($dest, $reFilename);

        Book::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'price'=>$request->price,
            'language'=>$request->language,
            'quantity'=>$request->quantity,
            'description'=>$request->description,
            'cover'=>$reCover,
            'file'=>$reFilename,
            'type'=>$request->type,
        ]);
        
        return redirect()->back()->with('status','Successfully Saved');
    }




}
