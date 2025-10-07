<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('products.index', [
            'products' => Product::orderBy('updated_at', 'DESC')->paginate(10)
        ]);        
        // $products = Product::paginate(15);
        // return view('products.index', compact('products'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // Validación automática gracias a StoreProductRequest
        $validated = $request->validated();

        //  Guardar el producto
        Product::create($validated);

        // Redireccionar con mensaje
        return redirect()
            ->route('products.index')
            ->with('success', 'Product created successfully!');

        

        
           
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {

         // Validación automática gracias a UpdateProductRequest
        $validated = $request->validated();

        //  Guardar el producto
        $product->update($validated);

        // Redireccionar con mensaje
        return redirect()
            ->route('products.index')
            ->with('success', 'Product created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
