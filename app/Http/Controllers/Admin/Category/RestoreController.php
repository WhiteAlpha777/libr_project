<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class RestoreController extends BaseController
{
    public function __invoke()
    {
        Category::onlyTrashed()->restore();
        return redirect()->route('admin.category.index');
    }
}
