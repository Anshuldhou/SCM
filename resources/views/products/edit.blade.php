<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Edit Product</h1>

        <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="form-control">
                <label class="label">Product Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="input input-bordered w-full" placeholder="Enter product name">
            </div>

            <div class="form-control">
                <label class="label">Description</label>
                <textarea name="description" class="textarea textarea-bordered w-full" placeholder="Enter description">{{ $product->description }}</textarea>
            </div>

            <div class="form-control">
                <label class="label">Price</label>
                <input type="number" name="price" value="{{ $product->price }}" class="input input-bordered w-full" placeholder="Enter price">
            </div>

            <button type="submit" class="btn btn-primary w-full">Update Product</button>
        </form>
    </div>
@endsection
