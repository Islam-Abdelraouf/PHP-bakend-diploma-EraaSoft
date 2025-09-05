<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    protected $status;
    protected $message;
    protected $error;
    protected $data;

    //  All Products Listing
    public function index(): JsonResponse
    {
        $products = Product::all();

        //  if no products collected from the dbase
        if (!$products) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'No product to do operation!';
        } else {
            $this->data = $products;
            $this->message = null;
            $this->status = 200;
            $this->error = null;
        }

        //  returns JSON response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'data' => $this->data,
        ], $this->status);
    }
    //  Show a product by id
    public function show($id): JsonResponse
    {

        //  if product is available in the dbase
        $product = Product::find($id);
        if (!$product) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'No product to do operation!';
        } else {
            $this->data = $product;
            $this->message = null;
            $this->status = 200;
            $this->error = null;
        }
        //  returns JSON response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'data' => $this->data,
        ], $this->status);
    }
    //  Store a new product
    public function store(Request $request): JsonResponse
    {
        // dd('before validation');
        $data = $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'price' => ['required', 'numeric'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp'],
            'desc' => ['required', 'string', 'max:500'],
        ]);

        //  update location of submitted image
        $image = $request->file('image');
        $imageName = uploadImage($image, 'images'); // Returns image file name
        $data['image'] = asset('images/' . $imageName); // Stores image full path

        //  if product created successfully
        if ($product = Product::create($data)) {
            $this->error = null;
            $this->status = 200;
            $this->message = 'Product has been created successfully';
            $this->data = $product;
        } else {
            $this->error = 'Error inserting the product, please try again later!';
            $this->status = 404;
            $this->message = null;
            $this->data = null;
        }
        //  returns JSON response
        return response()->json([
            'error' => $this->error,
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->data,
        ], $this->status);
    }
    //  Remove product
    public function destroy($id): JsonResponse
    {

        $product = Product::find($id);

        //  if product was not found in the dbase
        if (!$product) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'Cannot delete this product, it was not found in our list!';
        } else {
            $product->delete();
            $this->data = null;
            $this->message = 'Product deleted successfully!';
            $this->status = 200;
            $this->error = null;
        }
        //  returns JSON response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'data' => $this->data,
        ], $this->status);
    }
    //  Remove product
    public function update(Request $request, $id): JsonResponse
    {
        $product = Product::find($id);

        //  if product was not found in the dbase
        if (!$product) {
            $this->error = 'Error updating the product, it was not found in our list!';
            $this->status = 404;
            $this->message = null;
            $this->data = null;
        } else {
            $data = $request->validate([
                'name' => ['required', 'string', 'min:5', 'max:255'],
                'price' => ['required', 'numeric'],
                'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp'],
                'desc' => ['required', 'string', 'max:500'],
            ]);

            //  update full path of submitted image
            if (isset($request['image'])) {
                $image = $request->file('image');
                $imageName = uploadImage($image, 'images'); // Returns image file name
                $imagePath = asset('/images/' . $imageName); // Returns image full path of uploaded image
            } else {
                $imagePath = Product::where('id', $id)->image; // Returns image full path of original image
            }
            $data['image'] = $imagePath;    //Updates full path of submitted image

            //  if data updated successfully
            if ($product = Product::where('id', $id)->update($data)) {
                $this->error = null;
                $this->status = 202;
                $this->message = 'Product has been updated successfully';
                $this->data = $data;
            } else {
                $this->error = 'Error updating the product, please try again later!';
                $this->status = 500;
                $this->message = null;
                $this->data = null;
            }

        }
        //  returns JSON response
        return response()->json([
            'error' => $this->error,
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->data,
        ]);
    }
}
