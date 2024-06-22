<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Route\AdminController;
use App\Http\Controllers\Route\RouteController;
use Illuminate\Support\Facades\Route;



Route::get('/', [RouteController::class, 'home'])->name('home');

Route::get('/books', [RouteController::class, 'books'])->name('books');
Route::get('/journals', [RouteController::class, 'journals'])->name('journals');
Route::get('/about', [RouteController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [RouteController::class, 'contactus'])->name('contactus');
Route::get('/cart', [RouteController::class, 'cart'])->name('cart');
Route::get('/search', [RouteController::class, 'search'])->name('search');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');



Route::get('/profile', [UserController::class, 'profile'])->name('profile');




Route::get('/admin', [AdminController::class, 'home'])->name('admin');

Route::get('/admin/books', [AdminController::class, 'books'])->name('admin.books');
Route::get('/admin/books/view/{book}', [AdminController::class, 'viewbooks'])->name('admin.books.view');
Route::get('/admin/books/add', [AdminController::class, 'addbooks'])->name('admin.books.add');
Route::post('/admin/books/add', [AdminController::class, 'storebooks'])->name('admin.books.add');
Route::get('/admin/books/edit/{book}', [AdminController::class, 'editbooks'])->name('admin.books.edit');
Route::post('/admin/books/edit/{book}', [AdminController::class, 'updatebooks'])->name('admin.books.edit');


Route::get('/admin/journals', [AdminController::class, 'journals'])->name('admin.journals');
Route::get('/admin/journals/add', [AdminController::class, 'addjournals'])->name('admin.journals.add');
Route::post('/admin/journals/add', [AdminController::class, 'storejournals'])->name('admin.journals.add');
Route::get('/admin/journals/edit/{book}', [AdminController::class, 'editjournals'])->name('admin.journals.edit');
Route::post('/admin/journals/edit/{book}', [AdminController::class, 'updatejournals'])->name('admin.journals.edit');


Route::get('/admin/delete/{book}', [AdminController::class, 'deleteBook'])->name('admin.delete');