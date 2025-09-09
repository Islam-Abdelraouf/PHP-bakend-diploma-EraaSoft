<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\PhoneResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'userId' => $this->id,
            'userName' => $this->name,
            'userEmail' => $this->email,
            'userPhone' => PhoneResource::collection($this->whenLoaded('phones')),
            'createdAt' => $this->created_at->diffForHumans(),
        ];
    }
}
