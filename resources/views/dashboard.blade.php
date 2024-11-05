@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6">SCM Dashboard</h1>
            <ul class="space-y-4">
                <li>
                    <a href="{{ route('products.index') }}" class="btn btn-primary w-full text-left">Manage Products</a>
                </li>
                <li>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-primary w-full text-left">Manage Suppliers</a>
                </li>
                <li>
                    <a href="{{ route('orders.index') }}" class="btn btn-primary w-full text-left">Manage Orders</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
