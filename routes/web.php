<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/post/{post_title}', function ($post_title) {
    return view('post')->with("title", $post_title);
})->name('post');


Route::get('/landing', function () {
    return view('landing');
})->name("landing");
