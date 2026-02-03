<!-- resources/views/dashboard/product.index.blade.php -->
@extends('layouts.dashboard')

@section('title', 'Product List')

@section('content')
    <div class="mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Products</h1>
            <a href="{{ route('dashboard.products.create') }}" class="btn btn-lg btn-primary">Add
                Product</a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
            <table class="table">
                <thead class="text-sm text-body">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            SKU
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Available
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Sale Price
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3  font-medium">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-50 duration-300">
                            <td>
                                {{ $product->id ?? '' }}
                            </td>
                            <td>
                                <div>
                                    <img class="h-12 w-12 rounded-full" src="{{ $product->image }}" alt="product image">
                                    {{ $product->name ?? '' }}
                                </div>
                            </td>
                            <td>
                                {{ $product->category ?? '-' }}
                            </td>
                            <td>
                                {{ $product->sku ?? '' }}
                            </td>
                            <td>
                                {{ $product->stock ?? '' }}
                            </td>
                            <td>
                                {{ $product->in_stock ? 'Yes' : 'No' ?? '' }}
                            </td>
                            <td>
                                ${{ $product->price ?? '' }}
                            </td>
                            <td>
                                ${{ $product->sale_price ?? '' }}
                            </td>
                            <td>
                                {{ $product->is_active ? 'Active' : 'Inactive' ?? '' }}
                            </td>
                            </td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('dashboard.products.edit', $product->id) }}"
                                        class="btn btn-md btn-success rounded-full">
                                        Edit
                                    </a>
                                    <form action="{{ route('dashboard.products.destroy', $product) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-md btn-error rounded-full">Remove</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection
