<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();

        return CategoryResource::collection($categories);
    }

    public function show(Category $category) {
        return new CategoryResource($category);
    }
}
