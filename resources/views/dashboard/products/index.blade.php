<!-- resources/views/dashboard/product.index.blade.php -->
@extends('layouts.dashboard')

@section('title', 'Product List')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Product List</h1>

    <table class="w-full border">
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Product 1</td>
            <td>100</td>
        </tr>
    </table>
@endsection