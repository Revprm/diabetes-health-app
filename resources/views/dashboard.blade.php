<x-layout>
    <x-slot name="title">Dashboard</x-slot>

    <div class="bg-blue-50 dark:bg-gray-900 min-h-screen p-6">
        <!-- Header Section -->
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-blue-900 dark:text-white">Welcome to the Diabetes Risk Prediction App</h1>
            <p class="text-lg text-blue-700 dark:text-gray-300 mt-2">
                Use this application to assess your diabetes risk and gain insights into improving your health.
            </p>
        </header>

        <!-- Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Predict Risk Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 dark:text-white mb-2">Predict Your Risk</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    Enter your health data to get an accurate prediction of your diabetes risk.
                </p>
                <a href="#" 
                   class="inline-block px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-500 dark:bg-green-500 dark:hover:bg-green-400">
                    Start Prediction →
                </a>
            </div>

            <!-- View Insights Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 dark:text-white mb-2">Health Insights</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    Learn how to manage your health with personalized insights and advice.
                </p>
                <a href="#" 
                   class="inline-block px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-500 dark:bg-green-500 dark:hover:bg-green-400">
                    Explore Insights →
                </a>
            </div>

            <!-- User History Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 dark:text-white mb-2">Your History</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    View and manage your past predictions and health records.
                </p>
                <a href="#" 
                   class="inline-block px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-500 dark:bg-green-500 dark:hover:bg-green-400">
                    View History →
                </a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-8 text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Your health is important. Take control today.
            </p>
        </footer>
    </div>
</x-layout>
