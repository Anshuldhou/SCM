<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
            @csrf

            <div class="form-control">
                <label class="label">Product Name</label>
                <input type="text" name="name" class="input input-bordered w-full" placeholder="Enter product name">
            </div>

            <div class="form-control">
                <label class="label">Description</label>
                <textarea name="description" class="textarea textarea-bordered w-full" placeholder="Enter description"></textarea>
            </div>

            <div class="form-control">
                <label class="label">Price</label>
                <input type="number" name="price" class="input input-bordered w-full" placeholder="Enter price">
            </div>

            <button type="submit" class="btn btn-primary w-full">Save Product</button>
        </form>
    </div>
@endsection
