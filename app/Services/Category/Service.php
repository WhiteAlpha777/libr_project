<?php


namespace App\Services\Category;

use App\Models\Category;

class Service
{
    public function store($data){
        Category::firstOrcreate($data);
    }

    public function update($data, $category){
        $category->update($data);
    }

}
