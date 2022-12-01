<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Http\Filters\BookFilter;

use App\Http\Requests\Book\FilterRequest;
use App\Models\Book;
use App\Models\Category;
use http\QueryString;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter=app()->make(BookFilter::class,['queryParams' => array_filter($data)]);//array_filter() - удаляет пустые поля
        $books=Book::filter($filter)->paginate(10);
        $categories = Category::all();
        //dd($books->withQueryString()->getPageName());
        //dd($request->query()['category_id']);
        return view('admin.book.index', compact('books','categories'));
    }
}
