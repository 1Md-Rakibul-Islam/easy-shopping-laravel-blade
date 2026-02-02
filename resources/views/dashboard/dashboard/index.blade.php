<!-- resources/views/dashboard/index.blade.php -->
@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard Overview</h1>

    <div class="grid grid-cols-4 gap-4">
        <div>Products: {{ $totalProducts ?? "0" }}</div>
        <div>Users: {{ $totalUsers ?? "0" }}</div>
    </div>
@endsection
