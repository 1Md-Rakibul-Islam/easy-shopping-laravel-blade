<aside class="fixed top-16 left-0 w-64 h-[calc(100vh-4rem)] bg-gray-900 text-white p-5 overflow-y-auto">
    <h2 class="text-xl font-bold mb-6">Admin Panel</h2>

    <ul class="space-y-3">
        <li>
            <a href="{{ route('dashboard.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700 transition">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.products.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700 transition">
                Products
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.products.create') }}" class="block px-3 py-2 rounded hover:bg-gray-700 transition">
                Create Product
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('dashboard.products.update') }}" class="block px-3 py-2 rounded hover:bg-gray-700 transition">
                Edit Product
            </a>
        </li> --}}
    </ul>
</aside>
