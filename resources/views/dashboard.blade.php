<x-layout>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Diabetes Risk Prediction Dashboard - Assess your risk and get personalized health insights">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 md:p-6 lg:p-8">
        <!-- Header Section -->
        <header class="max-w-4xl mx-auto mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">
                        Welcome to Your Health Dashboard
                    </h1>
                    <p class="text-lg text-gray-300 mt-2">
                        Assess your diabetes risk and take control of your health journey
                    </p>
                </div>
                <div class="hidden md:block">
                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-blue-500 bg-opacity-20 text-blue-300">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Quick Access
                    </span>
                </div>
            </div>
        </header>

        <!-- Quick Stats -->
        <div class="max-w-4xl mx-auto mb-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 rounded-lg p-4 text-center">
                    <span class="text-sm text-gray-500 dark:text-gray-400">Last Check</span>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-white">2 days ago</p>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-4 text-center">
                    <span class="text-sm text-gray-500 dark:text-gray-400">Risk Level</span>
                    <p class="text-2xl font-semibold text-green-500">Low</p>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-4 text-center">
                    <span class="text-sm text-gray-500 dark:text-gray-400">Completed Tests</span>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-white">3</p>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-4 text-center">
                    <span class="text-sm text-gray-500 dark:text-gray-400">Next Check</span>
                    <p class="text-2xl font-semibold text-blue-500">5 days</p>
                </div>
            </div>
        </div>

        <!-- Main Features Grid -->
        <div class="max-w-4xl mx-auto grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Risk Prediction Section -->
            <section class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-blue-400 transition-transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Predict Your Risk</h2>
                    <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                
                <div class="space-y-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        Get an accurate prediction of your diabetes risk based on your health data.
                    </p>

                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Takes about 5 minutes
                    </div>

                    <a href="#" 
                       class="group inline-flex items-center px-4 py-2 w-full justify-center text-white bg-gradient-to-r from-blue-600 to-blue-500 rounded hover:from-blue-500 hover:to-blue-400 transition-colors"
                       aria-label="Start Risk Prediction"
                    >
                        <span>Start Prediction</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </section>

            <!-- Health Insights Section -->
            <section class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-green-400 transition-transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Health Insights</h2>
                    <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                
                <div class="space-y-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        Get personalized health recommendations and lifestyle advice.
                    </p>

                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Updated weekly
                    </div>

                    <a href="#" 
                       class="group inline-flex items-center px-4 py-2 w-full justify-center text-white bg-gradient-to-r from-green-600 to-green-500 rounded hover:from-green-500 hover:to-green-400 transition-colors"
                       aria-label="View Health Insights"
                    >
                        <span>View Insights</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </section>

            <!-- History Section -->
            <section class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-yellow-400 transition-transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Your History</h2>
                    <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                
                <div class="space-y-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        Track your progress and view past health assessments.
                    </p>

                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        Last 6 months available
                    </div>

                    <a href="#" 
                       class="group inline-flex items-center px-4 py-2 w-full justify-center text-white bg-gradient-to-r from-yellow-600 to-yellow-500 rounded hover:from-yellow-500 hover:to-yellow-400 transition-colors"
                       aria-label="View Health History"
                    >
                        <span>View History</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="max-w-4xl mx-auto mt-12 text-center">
            <p class="text-sm text-gray-400">
                Your health is important. Take control today.
            </p>
            <p class="text-xs text-gray-500 mt-2">
                Last updated: December 22, 2024
            </p>
        </footer>
    </div>
</x-layout>