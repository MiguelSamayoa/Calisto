<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch all categories
        $categories = Category::all();


        return response()->json([
            'categories' => $categories,
        ], 200);
    }

    public function show($id)
    {
        return view('categories.show', ['id' => $id]);
    }
}
