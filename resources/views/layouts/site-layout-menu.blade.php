<nav class="bg-stone-500">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
            <div class="shrink-0">
    <a href="{{ route('dashboard') }}">
        <img class="h-8" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Cc.logo.white.svg/131px-Cc.logo.white.svg.png" alt="Your Company">
    </a>
</div>
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ route('dashboard') }}"
                           class="rounded-md px-3 py-2 text-sm font-medium 
                           {{ request()->routeIs('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                           Loan Offers
                        </a>
                        <a href="{{ route('loanApplications.index') }}"
                           class="rounded-md px-3 py-2 text-sm font-medium 
                           {{ request()->routeIs('loanApplications.index') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                           Loan Applications
                        </a>
                    </div>
                </div>
            </div>
            <!-- Right Section -->
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    @auth
                        <span class="text-white mr-4">Hello, {{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-gray-600 text-white px-3 py-2 rounded-md hover:bg-gray-300">Log Out</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="bg-stone-500 text-white px-3 py-2 rounded-md hover:bg-gray-600">Log In</a>
                    @endauth
                </div>
            </div>
            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" id="mobile-menu-button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="{{ route('dashboard') }}"
               class="block rounded-md px-3 py-2 text-base font-medium 
               {{ request()->routeIs('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
               Loan Offers
            </a>
            <a href="{{ route('loanApplications.index') }}"
               class="block rounded-md px-3 py-2 text-base font-medium 
               {{ request()->routeIs('loanApplications.index') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
               Loan Applications
            </a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            @auth
                <span class="block px-4 py-2 text-sm font-medium text-white">Hello, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Log Out</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Log In</a>
            @endauth
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
