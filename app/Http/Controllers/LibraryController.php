<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index () {

        $books = Books::get();

        return view('user.library', [
            'books' => $books
        ]);
    }
}
