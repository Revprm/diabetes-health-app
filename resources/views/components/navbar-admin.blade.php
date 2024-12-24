<nav class="bg-green-400 dark:bg-gray-800 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="/" title="">
                        <img class="block w-auto h-8 dark:hidden"
                            src="https://img.icons8.com/?size=100&id=baTWeZAqG8lF&format=png&color=000000" alt="">
                        <img class="hidden w-auto h-8 dark:block"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full-dark.svg" alt="">
                    </a>
                </div>
                <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center">
                    <li>
                        <a href="/admin/dashboard" title=""
                            class="flex text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" title=""
                            class="flex text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            User Management
                        </a>
                    </li>
                    <li>
                        <a href="#" title=""
                            class="flex text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            Predictions
                        </a>
                    </li>
                    <li>
                        <a href="#" title=""
                            class="flex text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            Insight & Reports
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Auth Dropdown -->
            <div class="hidden lg:flex items-center space-x-4">
                <!-- Check for user authentication -->
                @auth
                    <div class="relative">
                        <button id="user-menu-button" type="button"
                            class="flex items-center text-gray-900 dark:text-white focus:outline-none">
                            <span class="mr-2 text-xl font-medium">{{ Auth::user()->name }}</span>
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.707a1 1 0 011.414 0L10 11.414l3.293-3.707a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="dropdown-menu"
                            class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg dark:bg-gray-800">
                            <a href="/settings"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                Settings
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="/login"
                        class="px-4 py-2 text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500 font-medium">
                        Login
                    </a>
                    <a href="/register"
                        class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 dark:bg-green-500 dark:hover:bg-green-600 font-medium">
                        Register
                    </a>
                @endauth
            </div>

            <!-- Hamburger menu button -->
            <button id="menu-toggle"
                class="lg:hidden text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                aria-label="toggle menu">
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                    <path fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2z">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden px-4 py-4 bg-gray-100 dark:bg-gray-800">
        <ul class="flex flex-col space-y-4">
            <li>
                <a href="/admin/dashboard" class="text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                    User Management
                </a>
            </li>
            <li>
                <a href="#" class="text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                    Predictions
                </a>
            </li>
            <li>
                <a href="#" class="text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                    Insights & Reports
                </a>
            </li>
        </ul>
        @auth
            <div class="mt-4">
                <button id="mobile-user-menu-button" type="button"
                    class="flex items-center text-gray-900 dark:text-white focus:outline-none">
                    <span class="mr-2 text-xl font-medium">{{ Auth::user()->name }}</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.293 7.707a1 1 0 011.414 0L10 11.414l3.293-3.707a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="mobile-dropdown-menu" class="hidden mt-2 w-48 bg-white rounded-md shadow-lg dark:bg-gray-800">
                    <a href="/settings"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                        Settings
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @else
            <div class="mt-4 flex space-x-4">
                <a href="/login"
                    class="px-4 py-2 text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500 font-medium">
                    Login
                </a>
                <a href="/register"
                    class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 dark:bg-green-500 dark:hover:bg-green-600 font-medium">
                    Register
                </a>
            </div>
        @endauth
    </div>
</nav>

<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Toggle dropdown menu for the username
    const userMenuButton = document.getElementById('user-menu-button');
    const dropdownMenu = document.getElementById('dropdown-menu');

    if (userMenuButton && dropdownMenu) {
        userMenuButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInside = userMenuButton.contains(event.target) || dropdownMenu.contains(event.target);

            if (!isClickInside) {
                dropdownMenu.classList.add('hidden');
            }
        });
    }

    // Optional separate toggle for mobile dropdown
    const mobileUserMenuButton = document.getElementById('mobile-user-menu-button');
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
    if (mobileUserMenuButton && mobileDropdownMenu) {
        mobileUserMenuButton.addEventListener('click', function() {
            mobileDropdownMenu.classList.toggle('hidden');
        });
    }
</script>
