<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use function Laravel\Prompts\select;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("front.products.index", ['products' => $products]);
    }

    public function show(int $id)
    {
        //$product = Product::find($id);
        $product = Product::findOrFail($id);
        $products = Product::inRandomOrder()->take(3)->get();

        return view("front.products.product", ['product' => $product], ['products' => $products]);
    }
}
