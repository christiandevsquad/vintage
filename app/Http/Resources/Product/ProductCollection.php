<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'subName' => $this->subName,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image,
            'tag' => $this->tag,
            'href' => [
                'link' => route('products.show', $this->id)
            ]
        ];
    }
}
