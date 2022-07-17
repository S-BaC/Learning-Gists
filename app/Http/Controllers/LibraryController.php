<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index () {

        $books = Books::get();

        return view('user.library', [
            'books' => $books,
            'cur_lib' => true,
            'cur_myb' => false,
            'cur_com' => false,
            'cur_pro' => false
        ]);
    }

    public function show ($id) {

        $book = Books::find($id);
        $reviews = Reviews::where('book_id', $id)->get();

        foreach($reviews as $review){
            $review->user = User::where('id',$review->user_id)->get();
        }

        return view('book_details', [
            'book' => $book,
            'reviews' => $reviews,
            'cur_lib' => true,
            'cur_myb' => false,
            'cur_com' => false,
            'cur_pro' => false
        ]);
    }
}
