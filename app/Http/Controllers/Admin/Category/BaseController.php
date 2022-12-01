<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Services\Category\Service;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    //при добавления параметра Service $service автоматически предложат добавить этот класса в импорт
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
