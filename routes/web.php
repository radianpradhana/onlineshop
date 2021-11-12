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
    return view('main');
});

Route::get('/men', function () {
    return view('page.men');
});

Route::get('/mens', function () {
    return view('page.mens');
});

Route::get('/women', function () {
    return view('page.women');
});

Route::get('/womens', function () {
    return view('page.womens');
});

Route::get('/boy', function () {
    return view('page.boy');
});

Route::get('/boys', function () {
    return view('page.boys');
});

Route::get('/girl', function () {
    return view('page.girl');
});

Route::get('/girls', function () {
    return view('page.girls');
});

