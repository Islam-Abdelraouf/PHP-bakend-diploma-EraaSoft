<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderStatusResource;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderStatus;


class OrderController extends Controller
{
    protected $status;
    protected $message;
    protected $error;
    protected $data;

    //  returns a timeline of an order status
    public function timeline($id)
    {
        $order = Order::with('statuses')->find($id);

        //  assign JSON response parameters
        if (!$order) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'This order was not found!';
        } else {
            $this->data = $order;
            $this->message = null;
            $this->status = 200;
            $this->error = null;
        }


        //  returns JSON response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'orderId' => $this->data->id,
            'orderTracking' => OrderStatusResource::collection($this->data->statuses)
        ], $this->status);
    }
    //  returns the latest status of an order
    public function status($id)
    {
        $order = Order::with('latestStatus')->find($id);

        //  assign JSON response parameters
        if (!$order) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'This order was not found!';
        } else {
            $this->data = $order;
            $this->message = null;
            $this->status = 200;
            $this->error = null;
        }

        //  returns JSON response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'orderId' => $this->data->id,
            'orderTracking' => new OrderStatusResource($this->data->latestStatus)
        ], $this->status);
    }
    //  appends new status line for an order
    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'status' => ['required', 'string'],
            'message' => ['required', 'string', 'min:5', 'max:255'],
        ]);
        // dd($validatedData);
        $order = Order::find($id);
        //  assign JSON response parameters
        if (!$order) {
            $this->data = null;
            $this->message = null;
            $this->status = 404;
            $this->error = 'This order was not found!';
        } else {

            $status = OrderStatus::create([
                'order_id' => $id,
                'status' => $validatedData['status'],
                'message' => $validatedData['message'],
            ]);
            // dd($status->message);
            if (!$status) {
                $this->data = null;
                $this->message = null;
                $this->status = 500;
                $this->error = 'Error updating status!';
            } else {

            }
            $this->data = $order->latestStatus()->get();
            // dd($this->data);
            $this->message = 'Status has been updated successfully!';
            $this->status = 200;
            $this->error = null;
        }
        //  returns JSON response
        return response()->json([
            'message' => $this->message,
            'status' => $this->status,
            'error' => $this->error,
            'orderId' => $id,
            'orderTracking' =>  OrderStatusResource::collection($this->data)
        ], $this->status);
    }
}
