<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products
        $products = Product::all();
        $categories = Category::all();

        return view('products.index', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        return view('products.show', ['id' => $id]);
    }
}
