<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

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
        Cart::instance('shopping')->restore('username');
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
            'total_cart_items' => Cart::content()->count(),
            'total_items' => Cart::count(),
            'total_pay' => Cart::total(),
            'data' => $this->data,
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
            'quantity' => ['required', 'integer', 'min:1']
        ]);

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
            //  assign product name and price
            $productName = $product->name;
            $productPrice = $product->price;

            //  clear any active cart
            Cart::destroy();
            //  load the saved cart from d-base
            Cart::instance('shopping')->restore('username');
            //  Add item to the cart instance
            Cart::instance('shopping')->add($productId, $productName, $quantity, $productPrice);
            //  Save current instance to d-base
            Cart::instance('shopping')->store('username');

            //  Assign Response Data
            $this->data = Cart::instance('shopping')->content();
            $this->message = 'Product has been added successfully!';
            $this->status = 200;
            $this->error = null;
        }

        //  Return JSON Response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'total_cart_items' => Cart::content()->count(),
            'total_items' => Cart::count(),
            'total_pay' => Cart::total(),
            'cart_content' => $this->data,
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
        Cart::instance('shopping')->restore('username');
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
            Cart::instance('shopping')->store('username');
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
            'total_cart_items' => Cart::content()->count(),
            'total_items' => Cart::count(),
            'total' => Cart::total(),
            'data' => $this->data
        ], $this->status);
    }
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
        Cart::instance('shopping')->restore('username');
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
            Cart::instance('shopping')->store('username');
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
            'total_items' => Cart::count(),
            'total_cart_items' => Cart::content()->count(),
            'total' => Cart::total(),
            'data' => $this->data
        ], $this->status);

    }
}