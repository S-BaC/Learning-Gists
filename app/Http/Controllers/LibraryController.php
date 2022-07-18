<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Reviews;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use \DateTime;

class LibraryController extends Controller
{
    public function index () {

        $books = Books::orderBy('is_available', 'desc')->paginate(6);

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

    public function borrow ($id) {
        
        $transaction = new Transactions();

        $year = date("Y");
        $month = date("m");
        $day = date("d") + 10;
    
        $returnDate = new DateTime("$year-$month-$day");

        $transaction->user_id = auth()->user()->id;
        $transaction->book_id = $id;
        $transaction->borrowed_at = date('Y-m-d');
        $transaction->to_be_returned_at = $returnDate->format('Y-m-d');

        $transaction->save();

        Books::where('id', $id)->update(['is_available' => false]);

        return redirect('/library')->with('message', 'Successfully Borrowed');
    }
}
