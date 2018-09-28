<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function Index()
    {
        $products = Product::all();
        
        return view('shop.index', ['products' => $products]);    
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
    }
}
