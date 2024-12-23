<x-layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 py-6 flex flex-col justify-center antialiased">
        <div class="relative py-3 sm:max-w-3xl sm:mx-auto w-full px-4">
            <div class="relative px-4 py-10 bg-white dark:bg-gray-800 shadow-lg sm:rounded-3xl sm:p-16">
                <div class="max-w-2xl mx-auto">
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 dark:text-gray-300 sm:text-lg sm:leading-7">
                            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Login</h2>

                            @if($errors->any())
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                                @csrf
                                <div>
                                    <label for="email" class="block text-m font-medium text-gray-700 dark:text-gray-300">
                                        Email address
                                    </label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 
                                        shadow-sm py-3 px-4 bg-white dark:bg-gray-700 text-gray-900 dark:text-white
                                        focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                                        @error('email') @enderror">
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="password" class="block text-m font-medium text-gray-700 dark:text-gray-300">
                                        Password
                                    </label>
                                    <input type="password" id="password" name="password"
                                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600
                                        shadow-sm py-3 px-4 bg-white dark:bg-gray-700 text-gray-900 dark:text-white
                                        focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                                        @error('password') @enderror">
                                    @error('password')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="remember" name="remember"
                                            class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                        <label for="remember" class="ml-2 block text-m text-gray-700 dark:text-gray-300">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#" class="text-sm text-green-600 dark:text-green-500 hover:underline">
                                        Forgot password?
                                    </a>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md
                                        shadow-sm text-m font-medium text-white bg-gray-900 hover:bg-gray-800
                                        dark:bg-green-500 dark:hover:bg-green-600 focus:outline-none focus:ring-2
                                        focus:ring-offset-2 focus:ring-green-500">
                                        Sign in
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="pt-6 text-center text-sm text-gray-600 dark:text-gray-400">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="text-green-600 dark:text-green-500 hover:underline">Register here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>