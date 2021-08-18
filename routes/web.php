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

Route::get('/', function () {
    return view('home', [
        "title" => "PB PMII - Pengurus Besar Pergerakan Mahasiswa Islam Indonesia"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Ircham Ali",
        "email" => "id.irchamali@gmail.com",
        "image" => "ham.jpg"
    ]);
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::get('/team', function() {
    return view('team', [
        "title" => "Team"
    ]);
});

Route::get('/contact', function() {
    return view('contact', [
        "title" => "Contact"
    ]);
});