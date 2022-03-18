<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product) {
        return view('products.show', compact('product'));
    }

    public function list() {
        return view('admin.products.index');
    }

    public function showAdmin(Product $product) {
        return view('admin.products.show', compact('product'));
    }
}
