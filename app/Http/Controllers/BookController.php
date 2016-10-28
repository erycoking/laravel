<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;
use View;
//use resources\views\book_list;

class BookController extends Controller
{
    public function getIndex(){
    	$books = Book::all();

    	return View::make('book_list')->with('books', $books);
    }
}
