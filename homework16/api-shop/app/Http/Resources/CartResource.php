<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Cart;


class CartResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'cartItems' => CartItemResource::collection($this->collection),
            'meta' => [
                'itemsCount' => (int) $this->count(),
                'total' => Cart::total(),
            ],
        ];
    }
}
