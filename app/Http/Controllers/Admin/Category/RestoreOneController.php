<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class RestoreOneController extends BaseController
{
    public function __invoke($id)
    {
        Category::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('admin.category.recycle');
    }
}
