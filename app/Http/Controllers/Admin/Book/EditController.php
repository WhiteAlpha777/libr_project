<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Book $book)
    {
        $this->authorize('view', auth()->user());
        $categories = Category::all();
        return view('admin.book.edit', compact('book','categories'));
    }
}
