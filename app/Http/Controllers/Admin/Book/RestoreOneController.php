<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class RestoreOneController extends BaseController
{
    public function __invoke($id)
    {
        Book::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('admin.book.recycle');
    }
}
