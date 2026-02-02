<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Dashboard')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @yield('styles')
</head>

<body>
    <div class="dashboard-wrapper">
        {{-- User Navbar --}}
        @include('partials.dashboard.navbar')

        {{-- User Content --}}
        <div class="flex min-h-screen mt-20 px-5">

            {{-- Sidebar --}}
            <aside class="w-64 bg-gray-800 text-white p-4">
                <h2 class="text-xl font-bold mb-4">Admin Panel</h2>

                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('products.create') }}">Product Add</a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}">Product List</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('users.index') }}">Users List</a>
                    </li> --}}
                </ul>
            </aside>

            {{-- Main Area --}}
            <div class="flex-1">
                {{-- Navbar --}}
                <header class="bg-white shadow p-4">
                    Dashboard Navbar
                </header>

                {{-- Content --}}
                <main class="p-6">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

@yield('scripts')

</html>
