<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::paginate(10);

        return view('frontend.book.index',[
            'title' => 'Beranda Perpusku',
            'books' => $book,
        ]);
    }

    public function show(Book $book)
    {
        return view('frontend.book.show',[
            'title' => $book->title,
            'book' => $book,
        ]);
    }

    public function borrow(Book $book)
    {
        $user = auth()->user();

        if($user->borrow()->IsStillBorrow($book->id)) 
        {
            return redirect()->back()->with('toast', 'Kamu sudah meminjam Buku dengan judul : ' . $book->title);
        }

        $user->borrow()->attach($book);

        $book->decrement('qty');

        return redirect()->back()->with('toast', 'Berhasil meminjam Buku');
    }
}
