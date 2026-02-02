<!-- resources/views/dashboard/product.edit.blade.php -->
@extends('layouts.dashboard')

@section('title', 'Edit Product')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

    <form>
        <input type="text" placeholder="Product Name" class="border p-2 w-full mb-3">
        <input type="number" placeholder="Price" class="border p-2 w-full mb-3">
        <button class="bg-blue-600 text-white px-4 py-2">Save</button>
    </form>
@endsection