<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    //
    public function __invoke($id)//Book $book
    {
        $book = Book::withTrashed()->findOrFail($id);
        return view('admin.book.show',compact('book'));
    }
}
