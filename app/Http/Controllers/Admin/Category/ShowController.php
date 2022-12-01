<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    //
    public function __invoke($id)//Book $book
    {
        $category = Category::withTrashed()->findOrFail($id);
        $books = $category->books;
        return view('admin.category.show',compact('category','books'));
    }
}
