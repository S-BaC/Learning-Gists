<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\MybooksController;
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

Route::get('/library/borrow/{id}', [LibraryController::class, 'borrow']);

Route::get('/mybooks', [MybooksController::class, 'index']);

Route::get('/mybooks/return/{id}', [MybooksController::class, 'returnBook']);