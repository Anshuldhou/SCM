<!-- resources/views/orders/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Edit Order</h1>

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="product_id" class="block text-sm font-medium text-gray-700">Product</label>
                <select id="product_id" name="product_id" class="mt-1 block w-full">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ $product->id == $order->product_id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="supplier_id" class="block text-sm font-medium text-gray-700">Supplier</label>
                <select id="supplier_id" name="supplier_id" class="mt-1 block w-full">
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ $supplier->id == $order->supplier_id ? 'selected' : '' }}>
                            {{ $supplier->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                <input type="number" id="quantity" name="quantity" value="{{ $order->quantity }}" class="mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="total_price" class="block text-sm font-medium text-gray-700">Total Price</label>
                <input type="text" id="total_price" name="total_price" value="{{ $order->total_price }}" class="mt-1 block w-full" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Order</button>
        </form>
    </div>
@endsection
