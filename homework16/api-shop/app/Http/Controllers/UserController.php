<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    protected $status;
    protected $error;
    protected $data;

    public function index()
    {
        $products = Product::all();

        if (!$products) {
            $this->data = null;
            $this->status = 500;
            $this->error = 'Error collecting';
        } else {
            $this->data = $products;
            $this->status = 200;
            $this->error = null;
        }

        return response()->json([
            'status' => $this->status,
            'error' => $this->error,
            'data' => $this->data,
        ]);
    }


    public function show($id, $token)
    {
        if ($token == 'koRrtP61234GHkdjhs6543') {
            $product = Product::find($id);
        } else {
            $this->data = null;
            $this->status = 403;
            $this->error = 'This access is un-authorized, please check your subscription!';

            return response()->json([
                'status' => $this->status,
                'error' => $this->error,
                'data' => $this->data,
            ]);
        }

        if (!$product) {
            $this->data = null;
            $this->status = 500;
            $this->error = 'Cannot find requested product, please make sure the ID is correct!';
        } else {
            $this->data = $product;
            $this->status = 200;
            $this->error = null;
        }
        return response()->json([
            'status' => $this->status,
            'error' => $this->error,
            'data' => $this->data,
        ]);
    }
}