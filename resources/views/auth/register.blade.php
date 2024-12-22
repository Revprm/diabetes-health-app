<x-layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 py-6 flex flex-col justify-center antialiased">
        <div class="relative py-3 sm:max-w-3xl sm:mx-auto w-full px-4">
            <div class="relative px-4 py-10 bg-white dark:bg-gray-800 shadow-lg sm:rounded-3xl sm:p-16">
                <div class="max-w-2xl mx-auto">
                    <div class="divide-y divide-gray-200">
                        <div
                            class="py-8 text-base leading-6 space-y-4 text-gray-700 dark:text-gray-300 sm:text-lg sm:leading-7">
                            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Register</h2>
                            <form class="space-y-6">
                                <div>
                                    <label for="name"
                                        class="block text-l font-medium text-gray-700 dark:text-gray-300">
                                        Full Name
                                    </label>
                                    <input type="text" id="name" name="name"
                                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600
                                    shadow-sm py-3 px-4 bg-white dark:bg-gray-700 text-gray-900 dark:text-white
                                    focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="email"
                                        class="block text-l font-medium text-gray-700 dark:text-gray-300">
                                        Email address
                                    </label>
                                    <input type="email" id="email" name="email"
                                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600
                                    shadow-sm py-3 px-4 bg-white dark:bg-gray-700 text-gray-900 dark:text-white
                                    focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="password"
                                        class="block text-l font-medium text-gray-700 dark:text-gray-300">
                                        Password
                                    </label>
                                    <input type="password" id="password" name="password"
                                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600
                                    shadow-sm py-3 px-4 bg-white dark:bg-gray-700 text-gray-900 dark:text-white
                                    focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block text-l font-medium text-gray-700 dark:text-gray-300">
                                        Confirm Password
                                    </label>
                                    <input type="password" id="confirm-password" name="confirm-password"
                                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600
                                    shadow-sm py-3 px-4 bg-white dark:bg-gray-700 text-gray-900 dark:text-white
                                    focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="terms" name="terms"
                                        class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                    <label for="terms" class="ml-2 block text-m text-gray-700 dark:text-gray-300">
                                        I agree to the
                                        <a href="#"
                                            class="text-green-600 dark:text-green-500 hover:underline">Terms and
                                            Conditions</a>
                                    </label>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md
                                    shadow-sm text-m font-medium text-white bg-gray-900 hover:bg-gray-800
                                    dark:bg-green-500 dark:hover:bg-green-600 focus:outline-none focus:ring-2
                                    focus:ring-offset-2 focus:ring-green-500">
                                        Create Account
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="pt-6 text-center text-s text-gray-600 dark:text-gray-400">
                            Already have an account?
                            <a href="/login" class="text-green-600 dark:text-green-500 hover:underline">Login here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
