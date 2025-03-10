<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all(); // Fetch products from the database
        return view('products', ['products' => $products]);
    }
}
