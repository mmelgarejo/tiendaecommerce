<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category) {
        $products = $category->products()->where('status', 2)->get();

        return view('category.show', compact('products', 'category'));
    }
}
