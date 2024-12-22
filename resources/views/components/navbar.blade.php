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
                        <a href="/" title=""
                            class="flex text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            Home
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="/resources" title=""
                            class="flex text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            Resources
                        </a>                        
                    </li>
                    <li class="shrink-0">
                        <a href="/about" title=""
                            class="flex text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            About
                        </a>                        
                    </li>
                    <li class="shrink-0">
                        <a href="/contact" title=""
                            class="flex text-xl font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            Contact Us
                        </a>                        
                    </li>
                </ul>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="/login"
                    class="px-4 py-2 text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500 font-medium">
                    Login
                </a>
                <a href="/register"
                    class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 dark:bg-green-500 dark:hover:bg-green-600 font-medium">
                    Register
                </a>
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

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4">
            <ul class="text-gray-900 dark:text-white text-sm font-medium space-y-3">
                <li>
                    <a href="/" class="block hover:text-green-700 dark:hover:text-green-500">Home</a>
                </li>
                <li>
                    <a href="/resources" class="block hover:text-green-700 dark:hover:text-green-500">Resources</a>
                </li>
                <li>
                    <a href="/about" class="block hover:text-green-700 dark:hover:text-green-500">About</a>
                </li>
                <li>
                    <a href="/contact" class="block hover:text-green-700 dark:hover:text-green-500">Contact Us</a>
                </li>
                <!-- Auth buttons for mobile -->
                <li class="pt-4 border-t border-gray-200 dark:border-gray-700">
                    <a href="/login" class="block hover:text-green-700 dark:hover:text-green-500">Login</a>
                </li>
                <li>
                    <a href="/register" class="block hover:text-green-700 dark:hover:text-green-500">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Toggle dropdown menu
    document.getElementById('user-menu-button').addEventListener('click', function() {
        document.getElementById('dropdown-menu').classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        var isClickInside = document.getElementById('user-menu-button').contains(event.target) ||
            document.getElementById('dropdown-menu').contains(event.target);

        if (!isClickInside) {
            document.getElementById('dropdown-menu').classList.add('hidden');
        }
    });
</script>