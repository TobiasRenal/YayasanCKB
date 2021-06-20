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
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/inggris', function () {
    return view('inggris');
});

Route::get('/komputer', function () {
    return view('komputer');
});

Route::get('/musik', function () {
    return view('musik');
});
Route::get('/kober', function () {
    return view('kober');
});
Route::get('/taekwondo', function () {
    return view('taekwondo');
});
Route::get('/karate', function () {
    return view('karate');
});
Route::get('/personalia', function () {
    return view('personalia');
});
Route::get('/login', function () {
    return view('login');
});

