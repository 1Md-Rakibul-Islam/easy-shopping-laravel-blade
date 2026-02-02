<!-- resources/views/dashboard/product.create.blade.php -->
@extends('layouts.dashboard')

@section('title', 'Create Product')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Create Product</h1>

        <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1">Price</label>
                <input type="text" name="price" value="{{ old('price') }}" class="border p-2 w-full">
                @error('price')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1">Stock</label>
                <input type="number" name="stock" value="{{ old('stock', 0) }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label class="block mb-1">Status</label>
                <select name="is_active" class="border p-2 w-full">
                    <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Image</label>
                <input type="file" name="image" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            <a href="{{ route('dashboard.products.index') }}" class="ml-2 px-4 py-2 border rounded">Cancel</a>
        </form>
    </div>
@endsection
