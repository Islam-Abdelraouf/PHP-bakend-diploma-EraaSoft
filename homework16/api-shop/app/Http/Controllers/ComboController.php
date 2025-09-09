<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComboResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use phpDocumentor\Reflection\Types\Integer;

class ComboController extends Controller
{
    protected $status;
    protected $message;
    protected $error;
    protected $data;

    //  All Combo Listing
    public function index(): JsonResponse
    {
        $combo = Product::all();

        //  if no combo collected from the dbase
        if (!$combo) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'No Combo found to do operation!';
        } else {
            $this->data = ComboResource::collection($combo);
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

    //  Search Combo Products by combo name
    public function searchByName(string $productName): JsonResponse
    {
        $combo = Product::where('name', 'LIKE', '%' . $productName . '%')->first();

        //  if no products collected from the dbase
        if (!$combo) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'No product to do operation!';
        } else {
            $this->data = new ComboResource($combo);
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

    //  Search Combo Products by combo name
    public function searchById($id): JsonResponse
    {
        $combo = Product::where('id', $id)->first();
        // dd($product);
        //  if no products collected from the dbase
        if (!$combo) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'No product to do operation!';
        } else {
            $this->data = new ComboResource($combo);
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

    //  Show Latest Combo Listing
    public function latest(): JsonResponse
    {
        $combo = Product::latest()->limit(5)->get();
        // dd($products);
        //  if no combo collected from the dbase
        if (!$combo) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'No Combo found to do operation!';
        } else {
            $this->data = ComboResource::collection($combo);
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

    //  Show Hottest Combo Listing
    public function hottest(): JsonResponse
    {
        $combo = Product::orderByDesc('price')->limit(5)->get();
        // dd($products);
        //  if no combo collected from the dbase
        if (!$combo) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'No Combo found to do operation!';
        } else {
            $this->data = ComboResource::collection($combo);
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
}
