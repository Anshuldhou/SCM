<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the products.
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product.
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product in the database.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'nullable|integer' // Validate quantity if provided
        ]);

        // Set default quantity to 0 if not provided
        $productData = $request->only('name', 'description', 'price');
        $productData['quantity'] = $request->input('quantity', 0); // Default to 0

        Product::create($productData);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }


    // Show the form for editing an existing product.
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Delete a product from the database.
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
