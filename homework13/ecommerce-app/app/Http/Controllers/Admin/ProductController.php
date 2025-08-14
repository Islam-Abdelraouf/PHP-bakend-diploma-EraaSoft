<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use Ramsey\Uuid\Type\Time;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        // execute validation process
        $data = $request->validated();

        // storing image preparation
        if (isset($data['image'])) {
            $imageExtension = $data['image']->getClientOriginalExtension();
            $imageName = Time() . '-user.' . $imageExtension;
            $data['image']->move(public_path('front/images/products'), $imageName);
            $data['image'] = $imageName ?? 'product1.jpg';
            // dd('here');
        }

        // mass assignable fillable list
        // 1. 'user_id',
        // 2. 'code',
        // 3. 'title',
        // 4. 'description',
        // 5. 'price',
        // 6. 'image',

        // completing the rest of the table fields (fillable list)
        $data['user_id'] = auth()->user()?->id;
        $data['code'] = fake()->unique()->uuid();

        $results = Product::create($data);

        if ($results) {
            return back()->with('success', 'Product created successfully!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', ['product' => $product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();
        return redirect(route('products.index'));
    }
}
