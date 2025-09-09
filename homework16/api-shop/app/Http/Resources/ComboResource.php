<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComboResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'comboId' => $this->id,
            'comboName' => $this->name,
            'comboPrice' => $this->price,
            'comboImage' => $this->image,
            'created_at' => $this->created_at,
        ];
    }
}
