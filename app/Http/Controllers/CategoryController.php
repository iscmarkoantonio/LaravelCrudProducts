<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(string $id)
    {
      
     $category = Category::with('products')->findOrFail($id);

    return view('categories.show', compact('category'));
    }
}
