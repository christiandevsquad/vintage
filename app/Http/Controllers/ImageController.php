<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Http\Resources\ImageResource;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    public function index(Product $product)
    {
        return ImageResource::collection($product->images);
    }

    public function create()
    {
        //
    }

    public function store(ImageRequest $request, Product $product)
    {
        $image = new Image( $request->all() );

        $product->images()->save($image);

        return response([
            'data' => new ImageResource($image)
        ], Response::HTTP_CREATED);
    }

    public function show(Image $image)
    {
        //
    }

    public function edit(Image $image)
    {
        //
    }

    public function update(Request $request, Product $product, Image $image)
    {
        // needs to adapt to the image upload
        $image->update($request->all());

        return response([
            'data' => new ImageResource($image)
        ], Response::HTTP_CREATED);
    }

    public function destroy(Image $image)
    {
        // needs to adapt to the image upload
        $image->delete();

        return response([
            'data' => new ImageResource($image)
        ], Response::HTTP_NO_CONTENT);
    }
}
