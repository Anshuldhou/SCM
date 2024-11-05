<!-- resources/views/suppliers/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Supplier</h1>

        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Supplier Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <textarea name="contact" id="contact" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Supplier</button>
        </form>
    </div>
@endsection
