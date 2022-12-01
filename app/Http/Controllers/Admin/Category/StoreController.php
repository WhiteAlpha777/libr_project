<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.category.index');
    }
}
