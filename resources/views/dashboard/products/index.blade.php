<!-- resources/views/dashboard/product.index.blade.php -->
@extends('layouts.dashboard')

@section('title', 'Product List')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Products</h1>
        <a href="{{ route('dashboard.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">{{ session('success') }}</div>
    @endif

    <table class="w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Name</th>
                <th class="p-2 border">Price</th>
                <th class="p-2 border">Stock</th>
                <th class="p-2 border">Status</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="p-2 border">{{ $product->id }}</td>
                <td class="p-2 border">{{ $product->name }}</td>
                <td class="p-2 border">{{ $product->price }}</td>
                <td class="p-2 border">{{ $product->stock }}</td>
                <td class="p-2 border">{{ $product->is_active ? 'Active' : 'Inactive' }}</td>
                <td class="p-2 border flex gap-2">
                    <a href="{{ route('dashboard.products.edit', $product) }}" class="bg-yellow-500 px-2 py-1 rounded text-white">Edit</a>

                    <form action="{{ route('dashboard.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 px-2 py-1 rounded text-white">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection