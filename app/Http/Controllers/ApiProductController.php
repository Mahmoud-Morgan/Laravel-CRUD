<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Http\Resources\ProductResource;

use App\Http\Resources\ProductResourceCollection;


class ApiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():ProductResourceCollection
    {
        //
        return new ProductResourceCollection(Product::paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'title'        => 'required',
            'product_code' => 'required',
            'description'  => 'required',
        ]);

        $product = Product::create($request->all());

        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product): ProductResource
    {
        //
        return new ProductResource ($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product):ProductResource
    {
        //
        // $request->validate([

        //     'title'        => 'required',
        //     'product_code' => 'required',
        //     'description'  => 'required',
        // ]);

        $product ->update($request->all());

        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return response()->json();

    }
}
