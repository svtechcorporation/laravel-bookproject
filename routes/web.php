<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Route\AdminController;
use App\Http\Controllers\Route\AdminsController;
use App\Http\Controllers\Route\RouteController;
use Illuminate\Support\Facades\Route;



Route::get('/', [RouteController::class, 'home'])->name('home');

Route::get('/books', [RouteController::class, 'books'])->name('books');
Route::get('/books/view/{book}', [RouteController::class, 'viewbook'])->name('books.view');
Route::get('/journals', [RouteController::class, 'journals'])->name('journals');
Route::get('/about', [RouteController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [RouteController::class, 'contactus'])->name('contactus');
Route::get('/cart', [RouteController::class, 'cart'])->name('cart');
Route::get('/search', [RouteController::class, 'search'])->name('search');
Route::post('/checkout', [RouteController::class, 'checkout'])->name('checkout');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginuser'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registeruser'])->name('register');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/download/{book}', [UserController::class, 'download'])->name('download');




Route::get('/admin', [AdminsController::class, 'home'])->name('admin');
Route::get('/admin/owner', [AdminsController::class, 'editowner'])->name('owner.edit');
Route::post('/admin/owner', [AdminsController::class, 'saveowner'])->name('owner.save');
Route::get('/admin/viewtransaction/{id}', [AdminsController::class, 'viewtransaction'])->name('admin.viewtransaction');
Route::get('/admin/downloadreceipt/{file}', [AdminsController::class, 'downloadreceipt'])->name('admin.downloadreceipt');
Route::post('/admin/verify', [AdminsController::class, 'verifypayment'])->name('admin.verify');
Route::get('/admin/books', [AdminsController::class, 'books'])->name('admin.books');
Route::get('/admin/books/add', [AdminsController::class, 'addbooks'])->name('admin.books.add');
Route::post('/admin/books/add', [AdminsController::class, 'storebooks'])->name('admin.books.add');
Route::get('/admin/books/edit/{book}', [AdminsController::class, 'editbooks'])->name('admin.books.edit');
Route::post('/admin/books/edit/{book}', [AdminsController::class, 'updatebooks'])->name('admin.books.edit');

Route::get('/admin/journals', [AdminsController::class, 'journals'])->name('admin.journals');
Route::get('/admin/journals/add', [AdminsController::class, 'addjournals'])->name('admin.journals.add');

Route::get('/admin/journals/edit/{book}', [AdminsController::class, 'editjournals'])->name('admin.journals.edit');
Route::post('/admin/journals/edit/{book}', [AdminsController::class, 'updatebooks'])->name('admin.journals.edit');
Route::post('/admin/journals/add', [AdminsController::class, 'storebooks'])->name('admin.journals.add');
