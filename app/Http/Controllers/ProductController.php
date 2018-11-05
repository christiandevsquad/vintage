<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }

    public function index()
    {
        /* This part its work! However, I commented out to test the tutorial
        $data = Product::paginate(10);

        return view('admin.product.index', compact('data'));
        */

        return ProductCollection::collection( Product::paginate(10) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /*
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $product = new \App\Product;
        $product->name = $request->get('name');
        $product->subName = $request->get('subName');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->filename = $name;
        $product->tag = $request->get('tag');
        $product->save();
    */

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\Models\Product::find($id);
        return view('admin.product.update_product', compact('product','id'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response([
            'data' => new ProductResource($product)
        ], Response::HTTP_CREATED);
    /*
        $product = \App\Product::find($product->id);
        $product->name = $request->get('name');
        $product->subName = $request->get('subName');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->filename = $name;
        $product->tag = $request->get('tag');
        $product->save();

        return redirect('product');
    */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
