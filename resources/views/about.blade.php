<x-layout>
    <x-slot name="title">About Us</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Learn about our mission to help people understand and manage their diabetes risk through AI-powered predictions and personalized insights.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 md:p-6 lg:p-8">
        <!-- Hero Section -->
        <header class="max-w-4xl mx-auto text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Empowering Better Health Decisions
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                We're dedicated to helping you understand and manage your diabetes risk through advanced prediction technology and personalized insights.
            </p>
        </header>

        <!-- Mission Section -->
        <section class="max-w-4xl mx-auto mb-12">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                <div class="p-6 md:p-8">
                    <div class="flex items-center mb-6">
                        <div class="p-2 bg-blue-500 bg-opacity-10 rounded-lg mr-4">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Our Mission</h2>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                        Our mission is to make diabetes risk assessment accessible, understandable, and actionable for everyone. We combine cutting-edge technology with medical expertise to provide you with accurate predictions and meaningful insights about your health.
                    </p>
                </div>
            </div>
        </section>

        <!-- Key Features Grid -->
        <section class="max-w-4xl mx-auto mb-12">
            <h2 class="text-2xl font-bold text-white mb-6">What We Offer</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <!-- AI Predictions -->
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg border-l-4 border-purple-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">AI-Powered Predictions</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">
                        Our advanced AI algorithm analyzes multiple health factors to provide accurate diabetes risk assessments.
                    </p>
                </div>

                <!-- Personalized Insights -->
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg border-l-4 border-green-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Personalized Insights</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">
                        Receive tailored recommendations and insights based on your individual health profile.
                    </p>
                </div>

                <!-- Progress Tracking -->
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg border-l-4 border-blue-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Progress Tracking</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">
                        Monitor your health journey with comprehensive tracking and historical data analysis.
                    </p>
                </div>

                <!-- Expert Support -->
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg border-l-4 border-yellow-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-yellow-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Expert Support</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">
                        Access educational resources and support to help you make informed health decisions.
                    </p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="max-w-4xl mx-auto mb-12">
            <div class="bg-blue-600 dark:bg-blue-700 rounded-lg shadow-xl p-8 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
                    Ready to Take Control of Your Health?
                </h2>
                <p class="text-blue-100 mb-6">
                    Start your journey to better health with our risk prediction tool.
                </p>
                <a href="/user/dashboard" 
                   class="inline-flex items-center px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-colors"
                   aria-label="Get Started with Risk Prediction">
                    Get Started
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="max-w-4xl mx-auto text-center">
            <p class="text-sm text-gray-400">
                Your journey to better health starts here.
            </p>
            <div class="mt-4 space-x-4">
                <a href="#" class="text-sm text-gray-400 hover:text-white">Privacy Policy</a>
                <span class="text-gray-600">•</span>
                <a href="#" class="text-sm text-gray-400 hover:text-white">Terms of Service</a>
                <span class="text-gray-600">•</span>
                <a href="#" class="text-sm text-gray-400 hover:text-white">Contact Us</a>
            </div>
        </footer>
    </div>
</x-layout>