<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'subName' => $this->subName,
            'price' => $this->price,
            'description' => $this->description,
            // 'image' => $this->image,
            'tag' => $this->tag,

            'href' => [
                'images' => route('images.index', $this->id)
            ]
        ];
    }
}
