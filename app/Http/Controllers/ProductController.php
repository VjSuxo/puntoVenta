<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::get();
        $providers = Provider::get();
        return view('admin.product.create', compact('categories','providers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        Product::create($request);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::get();
        $providers = Provider::get();
         return view('admin.product.show', compact('product','categories','providers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateyRequest $request, Product $product)
    {
        //
        Product::update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index');
    }
}
