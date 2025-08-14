<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;


use function Laravel\Prompts\select;

class ProductController extends Controller
{

    /**
     * Show the main products page
     */    
    public function index()
    {
        $products = Product::with('user')->get();
        return view("front.products.index", ['products' => $products]);
    }

    /**
     * Show the 'create product' form
     */
    public function create()
    {
        return view("front.products.create");
    }

    /**
     * show the product show case page, and related products
     */
    public function show(int $id)
    {
        //$product = Product::find($id);
        $product = Product::with('user')->findOrFail($id);
        $products = Product::with('user')->inRandomOrder()->take(3)->get();
        return view("front.products.product", ['product' => $product], ['products' => $products]);
    }
}
