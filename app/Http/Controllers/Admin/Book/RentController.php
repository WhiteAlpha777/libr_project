<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;

use Illuminate\Http\Request;

class RentController extends BaseController
{
    public function __invoke(Book $book)
    {
        $this->service->RentController($book);
        return redirect()->route('admin.book.show', $book->id);
    }
}
