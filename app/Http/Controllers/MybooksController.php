<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;

class MybooksController extends Controller
{
    public function index () {
        $id = 1;

        $borrowedBooks = Transactions::where('user_id', $id)->get();

        foreach($borrowedBooks as $book){
            $book->bookDetails = Books::where('id', $book->book_id)->get();
        }

        return view('user.mybooks',[
            'borrowedBooks' => $borrowedBooks,
            'cur_lib' => false,
            'cur_myb' => true,
            'cur_com' => false,
            'cur_pro' => false
        ]);    
    }

    public function show ($id) {

        
    }
}
