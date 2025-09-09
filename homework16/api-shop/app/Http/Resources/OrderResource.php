<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
                'userId' =>$request->user()->id,
                'orderStatus' =>$this->status,
                'orderTotal' => $this->total,
                'deliveryAddress' => $request->address,
                'deliveryPhone' => $request->phone,
                'orderItems'=>OrderItemsResource::collection($this->whenLoaded('items')),
        ];
    }
}
