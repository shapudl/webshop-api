<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "sku"=> $this->SKU, 
            "name" => $this->name,
            "description" => $this->description,
            "published" => $this->published,
            "createdAt" => $this->created_at
        ];
    }
}
