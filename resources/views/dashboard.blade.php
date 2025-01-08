<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="meta">
        <meta name="description"
            content="Diabetes Risk Assessment Tool - Get personalized health insights and take control of your well-being">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 md:p-6 lg:p-8">
        <!-- Hero Section -->
        <header class="max-w-4xl mx-auto mb-12 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Take Control of Your Health Journey
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Understand your diabetes risk factors and get personalized health insights with our advanced prediction
                tools
            </p>
            <div class="mt-8 space-x-4">

                @if (Auth::check())
                    <a href="/user/dashboard"
                        class="inline-flex items-center px-6 py-3 text-blue-600 bg-white rounded-lg hover:bg-gray-100 transition-colors">
                        Go to Dashboard
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <a href="/register"
                        class="inline-flex items-center px-6 py-3 text-white bg-gradient-to-r from-blue-600 to-blue-500 rounded-lg hover:from-blue-500 hover:to-blue-400 transition-colors">
                        Get Started
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @endif
                @if (Auth::check())
                    {{-- Do nothing --}}
                @else
                    <a href="/login"
                        class="inline-flex items-center px-6 py-3 text-white dark:bg-gray-800 rounded-lg hover:bg-gray-700 transition-colors">
                        Sign In
                    </a>
                @endif
            </div>
        </header>

        <!-- Features Grid -->
        <div class="max-w-4xl mx-auto grid gap-6 md:grid-cols-3">
            <!-- Risk Assessment Feature -->
            <section
                class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-blue-400 transition-transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Risk Assessment</h2>
                    <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4">
                    Get accurate predictions of your diabetes risk using our advanced assessment tools.
                </p>
                <div class="text-sm text-gray-500">
                    • Quick 5-minute assessment<br>
                    • Evidence-based analysis<br>
                    • Instant results
                </div>
            </section>

            <!-- Health Insights Feature -->
            <section
                class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-green-400 transition-transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Smart Insights</h2>
                    <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4">
                    Receive personalized health recommendations based on your assessment results.
                </p>
                <div class="text-sm text-gray-500">
                    • Customized advice<br>
                    • Lifestyle recommendations<br>
                    • Regular updates
                </div>
            </section>

            <!-- Progress Tracking Feature -->
            <section
                class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-yellow-400 transition-transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Track Progress</h2>
                    <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4">
                    Monitor your health journey with comprehensive tracking tools.
                </p>
                <div class="text-sm text-gray-500">
                    • Historical data view<br>
                    • Progress visualization<br>
                    • Monthly reports
                </div>
            </section>
        </div>

        @if (Auth::check())
            {{-- Do nothing --}}
        @else
            <!-- Call to Action -->
            <div class="max-w-4xl mx-auto mt-12 text-center bg-blue-600 bg-opacity-20 rounded-lg p-8">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
                    Ready to Take the First Step?
                </h2>
                <p class="text-gray-300 mb-6">
                    Join thousands of users who have already taken control of their health journey.
                </p>
                <a href="/register"
                    class="inline-flex items-center px-6 py-3 text-white bg-gradient-to-r from-blue-600 to-blue-500 rounded-lg hover:from-blue-500 hover:to-blue-400 transition-colors">
                    Create Free Account
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        @endif

        <!-- Footer -->
        <footer class="max-w-4xl mx-auto mt-12 text-center">
            <p class="text-sm text-gray-400">
                Your journey to better health starts here.
            </p>
            <p class="text-xs text-gray-500 mt-2">
                Last updated: December 22, 2024
            </p>
        </footer>
    </div>
</x-layout>
