<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\bookController;
use App\Http\Controllers\bookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/profile', function () {
    return view('profile');
});

    Route::get('/book_detail', function () {
        return view('book_detail');
    });



    Route::get('/about_us', function () {
        return view('about_us');
    });
    Route::get('/register', function () {
        return view('register');
    });
    Route::get('/login', function () {
        return view('login');
    });
    Route::get('/post', function () {
        return view('post');
    });
    Route::get('/homepage2', function () {
        return view('homepage2');
    });
    Route::get('/privacy', function () {
        return view('privacy');
    });
    Route::get('/termcondition', function () {
        return view('termcondition');
    });
    Route::get('/contactus', function () {
        return view('contactus');
    });
