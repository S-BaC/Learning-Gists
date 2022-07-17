<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Psy\Readline\Transient;

class MybooksController extends Controller
{
    public function index () {
        $id = 1;

        // $borrowedBooks = Transactions::where([['user_id', $id]
        // ,['returned_at', NULL]])->paginate(5); You can also do this.
        
        $borrowedBooks = Transactions::where('user_id', $id)->whereNull('returned_at')->paginate(5);

        foreach($borrowedBooks as $book){
            $book->bookDetails = Books::where('id', $book->book_id)->get();
        }

        $records = Transactions::where('user_id', $id)->whereNotNull('returned_at')->paginate(5);

        foreach($records as $book){
            $book->bookDetails = Books::where('id', $book->book_id)->get();
        }

        return view('user.mybooks',[
            'borrowedBooks' => $borrowedBooks,
            'records' => $records,
            'cur_lib' => false,
            'cur_myb' => true,
            'cur_com' => false,
            'cur_pro' => false
        ]);    
    }

    public function returnBook ($id) {
        // The $id is in this format:
        // book_id,transaction_id.
        $idArr = explode(',', $id);
        $book_id = $idArr[0];
        $transaction_id = $idArr[1];

        Transactions::where('id', $transaction_id)->update(['returned_at' => date('Y-m-d')]);
        Books::where('id', $book_id)->update(['is_available' => true]);

        return redirect('/mybooks');
    }
}
