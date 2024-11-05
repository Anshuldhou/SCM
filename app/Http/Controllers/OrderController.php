<?php

namespace App\Http\Controllers;

use App\Models\Order; // Ensure you have an Order model
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Method to display a list of orders
    public function index()
    {
        // Fetch all orders
        $orders = Order::all();

        // Return the index view for orders
        return view('orders.index', compact('orders'));
    }
}
