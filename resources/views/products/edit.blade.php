@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Edit Product</h1>

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" step="0.01">
                @error('price')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-gray-700">Quantity</label>
                <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @error('quantity')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
