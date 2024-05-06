<?php

use App\Http\Controllers\Auth\LoginController;
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





Route::get('/admin', [AdminController::class, 'home'])->name('admin');