<x-layout>
    <x-slot name="title">Educational Articles</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Browse our curated articles on health, diabetes prevention, and wellbeing.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 md:p-6 lg:p-8">
        <!-- Header Section -->
        <header class="max-w-4xl mx-auto mb-8">
            <a href="/resources" class="inline-flex items-center text-gray-300 hover:text-white mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Resources
            </a>
            <h1 class="text-3xl md:text-4xl font-bold text-white">Educational Articles</h1>
            <p class="text-lg text-gray-300 mt-2">
                Browse through our handpicked articles on managing diabetes, eating healthy, and adopting a better lifestyle.
            </p>
        </header>

        <!-- Articles Section -->
        <div class="max-w-4xl mx-auto grid gap-6 md:grid-cols-1 lg:grid-cols-2">
            <!-- Article 1 -->
            <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Understanding Diabetes Risk Factors</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Learn about the key factors that contribute to diabetes risk and how to mitigate them.</p>
                    <a href="/resources/article/understanding-diabetes" class="text-blue-500 hover:text-blue-600 inline-flex items-center mt-4">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Healthy Eating Guidelines</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Discover practical tips for building a balanced and nutritious diet.</p>
                    <a href="/resources/article/healthy-eating" class="text-blue-500 hover:text-blue-600 inline-flex items-center mt-4">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Effective Exercise Routines</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Find out which exercises are most effective for managing weight and blood sugar levels.</p>
                    <a href="/resources/article/effective-exercise" class="text-blue-500 hover:text-blue-600 inline-flex items-center mt-4">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Meal Planning for Beginners</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Step-by-step guidance on planning your meals to support your health goals.</p>
                    <a href="/resources/article/meal-planning" class="text-blue-500 hover:text-blue-600 inline-flex items-center mt-4">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Stress Management Techniques</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Explore strategies to reduce stress and improve mental well-being.</p>
                    <a href="/resources/article/stress-management" class="text-blue-500 hover:text-blue-600 inline-flex items-center mt-4">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        <!-- Footer -->
        <footer class="max-w-4xl mx-auto mt-12 text-center">
            <p class="text-sm text-gray-400">
                Dive deeper into these topics to take charge of your health.
            </p>
        </footer>
    </div>
</x-layout>
