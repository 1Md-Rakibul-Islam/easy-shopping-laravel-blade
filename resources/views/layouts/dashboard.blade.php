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

<body class="bg-gray-100 font-sans">

    {{-- Top Navbar --}}
    @include('partials.topbar')

    <div class="flex">

        {{-- Sidebar --}}
        <aside class="fixed top-16 left-0 w-64 h-[calc(100vh-4rem)] bg-gray-900 text-white p-5 overflow-y-auto">
            <h2 class="text-xl font-bold mb-6">Admin Panel</h2>

            <ul class="space-y-3">
                <li>
                    <a href="{{ route('dashboard.index') }}"
                        class="block px-3 py-2 rounded hover:bg-gray-700 transition">
                        Dashboard
                    </a>
                </li>
            </ul>
        </aside>

        {{-- Main Content --}}
        <main class="ml-64 mt-16 p-6 w-full min-h-[calc(100vh-4rem)] overflow-x-hidden">
            @yield('content')
        </main>

    </div>

    @yield('scripts')
</body>

@yield('scripts')

</html>
