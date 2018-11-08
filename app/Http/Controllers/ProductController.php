<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Exceptions\ProductNotBelongsToUser;
use Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }

    public function index()
    {
        // This part its work! However, I commented out to test the tutorial command
        // $data = Product::paginate(10);

        $data = ProductCollection::collection( Product::paginate(10) );

        return view('admin.product.index', compact('data'));
    }

    public function store(ProductRequest $request)
    {
        $product = new Product;

        $product->name = $request->name;
        $product->subName = $request->subName;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->tag = $request->tag;

        $product->save();
        
        return response([
            'data' => new ProductResource($product)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return new ProductResource($product);

        $product = \App\Models\Product::find($id);

        return view('admin.product.update_product', compact('product','id'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

     /* previous version
    public function edit($id)
    {
        $product = \App\Models\Product::find($id);

        return view('admin.product.update_product', compact('product','id'));    
    }
    */

    public function edit(Product $id)
    {
        $product = \App\Models\Product::find($id);

        return view('admin.product.update_product', compact('product','id'));    
    }

    public function update(Request $request, Product $product)
    {
        // $this->ProductUserCheck($product);

        $product->update($request->all());

        return response([
            'data' => new ProductResource($product)
        ], Response::HTTP_CREATED);
    }

    public function destroy(Product $product)
    {
        //$this->ProductUserCheck($product);

        $product->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function ProductUserCheck($product) 
    {
        if (Auth::id() !== $product->user_id) {
            throw new ProductNotBelongsToUser;
        }
    }

}