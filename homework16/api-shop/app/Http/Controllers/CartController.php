<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CartResource;
use App\Http\Resources\OrderResource;
use Ramsey\Uuid\Type\Decimal;

class CartController extends Controller
{

    protected $status;
    protected $message;
    protected $error;
    protected $data;

    //  Cart items Listing
    public function index(): JsonResponse
    {
        /*
        01-  clear any active cart
        02-  load the saved cart from d-base
        03-  Assign cart content to $cart
        04-  Assign Response Data
        05-  Return JSON Response
        */

        //  clear any active cart
        Cart::destroy();
        //  load the saved cart from d-base
        Cart::instance('shopping')->restore(auth()->user()->name);
        //  Assign cart content to $cart
        $cart = Cart::instance('shopping')->content();

        //  Assign Response Data
        if (!$cart) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'Your cart is empty!';
        } else {
            $this->data = $cart;
            $this->message = null;
            $this->status = 200;
            $this->error = null;
        }

        //  returns JSON response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'data' => new CartResource($this->data),
        ], $this->status);
    }
    //  Add an item to the cart
    public function add(Request $request): JsonResponse
    {
        /*
        01-  validation
        02-  assign product id and quantity from the validated request
        03-  fetch the product by id
        04-  assign product name and price || if the product was found
        05-  clear any active cart
        06-  load the saved cart from d-base
        07-  Add item to the cart instance
        08-  Save current instance to d-base
        09-  Assign Response Data
        10-  Return JSON Response
         */

        //  validation
        $validatedData = $request->validate([
            'productId' => ['required', 'integer', 'exists:products,id'],
            'quantity' => ['required', 'integer', 'min:1'],
            'image' => ['required', 'image'],
        ]);

        //  image processing section
        $productImage = asset('images/product-default.jpg');
        // dd($productImage);

        // assign product id and quantity from the validated request
        $productId = $validatedData['productId'];
        $quantity = $validatedData['quantity'];

        //  fetch the product by id
        $product = Product::find($productId);

        //  if no product was found
        if (!$product) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'Your cart is empty!';
        } else {
            //  assign values of product name, price, and image
            $productName = $product->name;
            $productPrice = $product->price;
            // $productImage = $product->image;

            //  clear any active cart
            Cart::destroy();
            //  load the saved cart from d-base
            Cart::instance('shopping')->restore(auth()->user()->name);
            //  Add item to the cart instance
            Cart::instance('shopping')->add($productId, $productName, $quantity, $productPrice, ['image' => $productImage]);
            //  Save current instance to d-base
            Cart::instance('shopping')->store(auth()->user()->name);

            //  Assign Response Data
            $this->data = Cart::instance('shopping')->content();
            // dd($this->data);
            $this->message = 'Product has been added successfully!';
            $this->status = 200;
            $this->error = null;
        }

        //  Return JSON Response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'data' => new CartResource($this->data),
        ], $this->status);
    }
    //  Delete an item from the cart
    public function destroy($rowId): JsonResponse
    {
        /*
        01-  Clear any active cart
        02-  Load the saved cart from d-base
        03-  Lookup the $rowId in the cart collection
        04-  Assign the cart content to $cart Var
        05-  If found, delete the row data
        06-  Return JSON Response
        */

        //  clear any active cart
        Cart::instance('shopping')->destroy();
        //  Load the saved cart from d-base
        Cart::instance('shopping')->restore(auth()->user()->name);
        $cart = Cart::instance('shopping')->content();

        if (!$cart->has($rowId)) {//  row id was not found
            $this->message = null;
            $this->status = 404;
            $this->error = 'Cart item - ' . $rowId . ' was not found!';
            $this->data = $cart;
        } else {//  row id was found
            //  Remove item
            Cart::instance('shopping')->remove($rowId);
            //  Update database
            Cart::instance('shopping')->store(auth()->user()->name);
            //  Assign JSON parameters
            $this->data = Cart::instance('shopping')->content();
            $this->message = 'Cart item - ' . $rowId . ' has been deleted successfully!';
            $this->status = 200;
            $this->error = null;
        }
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'data' => new CartResource($this->data),
        ], $this->status);
    }
    //  Update an item on the cart
    public function update($rowId, Request $request): JsonResponse
    {
        /*
        01-  Clear any active cart
        02-  Load the saved cart from d-base
        03-  Lookup the $rowId in the cart collection
        04-  Assign the cart content to $cart Var
        05-  If found, delete the row data
        06-  Return JSON Response
        */

        //  clear any active cart
        Cart::instance('shopping')->destroy();
        //  Load the saved cart from d-base
        Cart::instance('shopping')->restore(auth()->user()->name);
        $cart = Cart::instance('shopping')->content();

        if (!$cart->has($rowId)) {//  row id was not found
            $this->message = null;
            $this->status = 404;
            $this->error = 'Cart item - ' . $rowId . ' was not found!';
            $this->data = $cart;
        } else {//  row id was found

            //  validation
            $validatedData = $request->validate([
                'quantity' => ['required', 'integer', 'min:1']
            ]);

            // assign product id and quantity from the validated request
            $quantity = $validatedData['quantity'];

            //  Remove item
            Cart::instance('shopping')->update($rowId, $quantity);
            //  Update database
            Cart::instance('shopping')->store(auth()->user()->name);
            //  Assign JSON parameters
            $this->data = Cart::instance('shopping')->content();
            $this->message = 'Cart item - ' . $rowId . ' has been updated successfully!';
            $this->status = 200;
            $this->error = null;
        }
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'data' => new CartResource($this->data),
        ], $this->status);

    }
    //  Checkout
    public function checkout(Request $request)
    {
        /*
        01-  clear any active cart
        02-  load the saved cart from d-base
        01-  Assign cart content to $cart
        03-  if no contents -> exit
        04-  insert Order record -> Order table
        05-  insert related order items -> Order_items table
        06-  append new status record -> order_statuses table
        */
        // dump($request->user()->id);
        // dump($request->user()->name);
        // dd($request->all());
        //  get the cart contents

        //  clear any active cart
        Cart::destroy();
        //  load the saved cart from d-base
        Cart::instance('shopping')->restore(auth()->user()->name);
        //  Assign cart content to $cart
        $cart = Cart::instance('shopping')->content();


        // dd($cart);
        //  if no contents -> exit
        if ($cart->count() == 0) {
            // dd($cart);
            $this->status = 404;
            $this->message = null;
            $this->error = 'There are no items in the cart!';
            $this->data = null;
        } else {
            //  insert Order record -> Order table
            DB::transaction(function () use ($cart, $request) {
                $order = Order::create([
                    'user_id' => $request->user()->id,
                    'total' => (float) $cart->total(),
                    'address' => $request->address,
                    'phone' => $request->phone,
                ]);
                // dump($order);
                //  insert related order items -> Order_items table
                foreach ($cart as $item) {
                    // dd($item);
                    $order->items()->create([
                        'order_id' => $order->id,
                        'product_id' => $item->id,
                        'name' => $item->name,
                        'price' => (float) $item->price,
                        'quantity' => (int) $item->qty,
                        'image' => $item->options->image,
                        'subtotal' => (float) ($item->price * $item->qty),
                    ]);

                }
                //  append new status record -> order_statuses table
                $order->statuses()->create([
                    'order_id' => $order->id,
                    'status' => 'placed',
                    'message' => 'Order received'
                ]);

                //  clear active cart
                Cart::destroy();
                //  Update database
                Cart::instance('shopping')->store(auth()->user()->name);

                //  assign JSON response parameters
                $this->message = 'Your order has been received and is being prepared';
                $this->status = 200;
                $this->error = null;
                $this->data = $order->load('items', 'statuses');
            });

        }
        //  returns JSON response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'data' => $this->data == null ? null : new OrderResource($this->data),
        ], $this->status);
    }
}
