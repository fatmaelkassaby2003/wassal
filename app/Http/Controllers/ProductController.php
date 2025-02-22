<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $groceryProducts = $products->where('category', 'grocery');
        $cleaningProducts = $products->where('category', 'cleaning');
        return view('products.index', compact('groceryProducts', 'cleaningProducts'));
    }
}
