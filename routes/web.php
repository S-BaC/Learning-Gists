<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\MybooksController;
use App\Http\Controllers\UserController;
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
    return view('user.home', [
        'cur_lib' => false,
        'cur_myb' => false,
        'cur_com' => false,
        'cur_pro' => false
    ]);
});

Route::get('/library', [LibraryController::class, 'index']);

Route::get('/library/{id}', [LibraryController::class, 'show']);

Route::get('/library/borrow/{id}', [LibraryController::class, 'borrow'])->middleware('auth');

Route::get('/mybooks', [MybooksController::class, 'index'])->middleware('auth');

Route::get('/mybooks/return/{id}', [MybooksController::class, 'returnBook'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/user', [UserController::class, 'store']);

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/validate', [UserController::class, 'loginValidate']);