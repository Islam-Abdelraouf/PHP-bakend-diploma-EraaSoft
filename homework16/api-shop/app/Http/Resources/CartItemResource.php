<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CartItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lineId' => $this->rowId,
            'productId' => $this->id,
            'productName' => $this->name,
            'productImage' => $this->options->image,
            'productQty' => (int) $this->qty,
            'productPrice' => (float) $this->price,
            'subtotal' => (float) $this->subtotal,
        ];
    }
}
