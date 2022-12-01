<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class RecycleController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::onlyTrashed()->get();
        return view('admin.category.recycle', compact('categories'));
    }
}
