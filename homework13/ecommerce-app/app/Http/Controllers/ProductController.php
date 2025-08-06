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
        //dd($products);
        return view("front.products", ['products' => $products]);
    }

    public function show(int $id)
    {
        //$product = Product::findOrFail($id);
        $product = Product::find($id);
        $products = Product::inRandomOrder()->take(3)->get();

        if (!$product) {
            abort(404);
        }
        return view("front.product", ['product' => $product], ['products' => $products]);
    }
}
