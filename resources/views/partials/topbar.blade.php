<header class="fixed top-0 left-0 right-0 h-16 bg-white border-b shadow z-50 flex items-center px-6">
    <nav class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <a href="{{ route('index') }}" class="btn btn-ghost text-xl">Easy Shopping</a>
        </div>

        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <ul tabindex="-1"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li>
                        <a class="justify-between">
                            Dashboard
                        </a>
                    </li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
