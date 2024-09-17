<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class AdminsController extends Controller
{


    public function home(){
        return view('admins.home', [
            "operation"=> "dashboard",
            'route'=>'dashboard',
        ]);
    }

    public function books(){
        $books = Book::get()->where('type','book');

        return view('admins.pages.books', [
            'route'=>'book',
            'operation'=>'view',
            'books'=>$books,
        ]);
    }

    public function journals(){
        $books = Book::get()->where('type','journal');

        return view('admins.pages.books', [
            'route'=>'journal',
            'operation'=>'view',
            'books'=>$books,
        ]);
    }


    public function addbooks(){
        return view('admins.pages.books', [
            'route'=>'book',
            'operation'=>'add',
        ]);
    }

    public function addjournals(){
        return view('admins.pages.books', [
            'route'=>'journal',
            'operation'=>'add',
        ]);
    }
    
    
    public function editbooks(Book $book){
        return view('admins.pages.books', [
            'route'=>'book',
            'operation'=>'edit',
            'book'=>$book,
        ]);
    }
    public function editjournals(Book $book){
        return view('admins.pages.books', [
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
