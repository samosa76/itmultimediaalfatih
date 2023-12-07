<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;

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

//Return page without any resouce
Route::get('/home', function () {
    return view('home');
});



Route::get('/unit-pendidikan', function () {
    return view('unit-pendidikan');
});

Route::get('/kerjasama', function () {
    return view('kerjasama');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});


//Resource Route
Route::resource('/books', BookController::class);
Route::get('/', [BookController::class, 'test']);
Route::get('/news', [BookController::class, 'test']);
