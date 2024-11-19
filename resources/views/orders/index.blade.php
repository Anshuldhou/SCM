<!-- resources/views/orders/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Order List</h1>

        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-4">Add New Order</a>

        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Supplier</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->supplier->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>${{ $order->total_price }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary btn-sm">Edit</a>

                            <!-- Delete Button (with a form for security) -->
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
