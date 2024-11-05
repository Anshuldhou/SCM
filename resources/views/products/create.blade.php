@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name</label>
                <input type="text" id="name" name="name" class="input input-bordered w-full" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea id="description" name="description" class="textarea textarea-bordered w-full"></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" id="price" name="price" class="input input-bordered w-full" required>
            </div>

            <button type="submit" class="btn btn-primary">Save Product</button>
        </form>
    </div>
@endsection
