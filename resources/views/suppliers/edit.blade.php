<!-- resources/views/suppliers/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Supplier</h1>

        <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Supplier Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $supplier->name }}" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <textarea name="contact" id="contact" class="form-control" required>{{ $supplier->contact }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Supplier</button>
        </form>
    </div>
@endsection
