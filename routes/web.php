<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });
<<<<<<< HEAD

Route::get('/contact', function () {
    return view('contact');
});
=======
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
>>>>>>> dev-member1-Badana
