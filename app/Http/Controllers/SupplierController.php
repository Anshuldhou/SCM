<?php

namespace App\Http\Controllers;

use App\Models\Supplier; // Ensure you have a Supplier model
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Method to display a list of suppliers
    public function index()
    {
        // Fetch all suppliers
        $suppliers = Supplier::all();

        // Return the index view for suppliers
        return view('suppliers.index', compact('suppliers'));
    }
}
