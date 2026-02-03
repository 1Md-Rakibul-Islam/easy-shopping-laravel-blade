<!-- resources/views/dashboard/product.create.blade.php -->
@extends('layouts.dashboard')

@section('title', 'Create Product')

@section('content')
    <div class="mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Create Product</h1>

        <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 gap-5">
                <div class="mb-4">
                    <label class="block mb-1">Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Slug *</label>
                    <input type="text" name="slug" value="{{ old('slug') }}"
                        class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                    @error('slug')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1">SKU *</label>
                    <input type="text" name="sku" value="{{ old('sku') }}"
                        class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                    @error('sku')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Price *</label>
                    <input type="text" name="price" value="{{ old('price') }}"
                        class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                    @error('price')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Sale Price</label>
                    <input type="text" name="sale_price" value="{{ old('sale_price') }}"
                        class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                    @error('sale_price')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Stock *</label>
                    <input type="number" name="stock" value="{{ old('stock', 0) }}"
                        class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">In Stock *</label>
                    <select name="in_stock" class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                        <option value="1" {{ old('in_stock') == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('in_stock') == 0 ? 'selected' : '' }}>No</option>
                    </select>
                    @error('in_stock')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Status *</label>
                    <select name="is_active" class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                        <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('is_active')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Short Description</label>
                    <textarea name="short_description" class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">{{ old('short_description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Description</label>
                    <textarea name="description" class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Image</label>
                    <input type="file" name="image"
                        class="@error('price') border-red-500 @enderror border p-3 rounded-sm w-full">
                    @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        </form>
    </div>
@endsection
