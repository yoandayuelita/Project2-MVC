<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('landingpage');
});

Route::get('/checkout', function(){
	return view('checkout');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/register', function(){
	return view('register');
});

Route::get('/products', function(){
	return view('products');
});

Route::get('/login', function(){
	return view('signup');
});

Route::get('/single', function(){
	return view('single');
});

Route::get('/admin', function(){
	return view('admin');
});

Route::get('/beranda', function(){
	return view('beranda');
});

Route::get('/kategori', function(){
	return view('kategori');
});

Route::get('/produk', function(){
	return view('produk');
});
