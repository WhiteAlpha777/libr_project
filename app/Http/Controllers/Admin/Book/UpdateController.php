<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\UpdateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Book $book)
    {
        $data = $request->validated();
        $this->service->update($data, $book);
        return redirect()->route('admin.book.show', $book->id);
    }
}
