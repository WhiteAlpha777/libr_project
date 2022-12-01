<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.book.index');
    }
}
