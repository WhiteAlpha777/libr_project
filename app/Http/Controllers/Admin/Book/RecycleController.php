<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class RecycleController extends BaseController
{
    public function __invoke()
    {
        $books = Book::onlyTrashed()->get();
        return view('admin.book.recycle', compact('books'));
    }
}
