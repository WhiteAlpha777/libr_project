<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class RestoreController extends BaseController
{
    public function __invoke()
    {
        Book::onlyTrashed()->restore();
        return redirect()->route('admin.book.index');
    }
}
