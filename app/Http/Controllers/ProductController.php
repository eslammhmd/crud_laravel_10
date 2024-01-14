<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // use pagination and get latest 5 items in product controller in laravel 10?
        $products = Product::latest()->paginate(5);
        // return view('products.index', compact('products'))
        // ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('products.index')->with('products', $products);

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
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            // 'stock' => 'nullable|integer',
            // 'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //store all data in a variable
        $data = $request->all();
        //save it in model
        Product::create($data);
        //redirect user after store data with success message
        return redirect()->route('products.index')
        ->with('success' ,'Product added successfully' );
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required|numeric',
        ]);
        $data = $request->all();
        $product->update($data);
        return redirect()->route('products.index')
        ->with('success' ,'Product updated successfully' );
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        // return back();
        return redirect()->route('products.index')
        ->with('success' ,'Product deleted successfully' );
    }
}
