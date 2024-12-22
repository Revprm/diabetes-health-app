<x-layout>
    <x-slot name="title">Health Resources</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Access comprehensive health resources, educational articles, and tools to manage diabetes risk and improve your overall wellbeing.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 md:p-6 lg:p-8">
        <!-- Header Section -->
        <header class="max-w-4xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Health Resources</h1>
            <p class="text-lg text-gray-300 mt-2">
                Explore articles, tips, and tools to help you stay healthy and manage your diabetes risk.
            </p>
        </header>

        <!-- Resources Grid -->
        <div class="max-w-4xl mx-auto grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Educational Articles Section -->
            <section class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-blue-400 transition-transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                    Educational Articles
                </h2>
                
                <div class="space-y-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        Discover comprehensive articles on diabetes prevention, healthy eating, and lifestyle changes to help you take charge of your health.
                    </p>

                    <p class="text-sm text-gray-500">
                        20+ articles available
                    </p>

                    <a href="#" 
                       class="group inline-flex items-center px-4 py-2 text-white bg-gradient-to-r from-blue-600 to-blue-500 rounded hover:from-blue-500 hover:to-blue-400 transition-colors"
                       aria-label="Read Educational Articles"
                    >
                        <span>Read Articles</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </section>

            <!-- Tools Section -->
            <section class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-green-400 transition-transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                    Tools & Calculators
                </h2>
                
                <div class="space-y-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        Utilize helpful tools like BMI calculators, meal planners, and other interactive features to better understand and manage your health.
                    </p>

                    <p class="text-sm text-gray-500">
                        5 tools available
                    </p>

                    <a href="#" 
                       class="group inline-flex items-center px-4 py-2 text-white bg-gradient-to-r from-green-600 to-green-500 rounded hover:from-green-500 hover:to-green-400 transition-colors"
                       aria-label="Explore Health Tools"
                    >
                        <span>Explore Tools</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </section>

            <!-- Support Groups Section -->
            <section class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 border-l-4 border-pink-400 transition-transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                    Support Groups
                </h2>
                
                <div class="space-y-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        Connect with others on the same journey. Join online and local support groups to share experiences and find encouragement.
                    </p>

                    <p class="text-sm text-gray-500">
                        10+ groups available
                    </p>

                    <a href="#" 
                       class="group inline-flex items-center px-4 py-2 text-white bg-gradient-to-r from-pink-600 to-pink-500 rounded hover:from-pink-500 hover:to-pink-400 transition-colors"
                       aria-label="Find Support Groups"
                    >
                        <span>Find Support</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </section>
        </div>

        <!-- Featured Articles Section -->
        <section class="max-w-4xl mx-auto mt-12">
            <h2 class="text-2xl font-bold text-white mb-6">Featured Articles</h2>
            <div class="grid gap-6 md:grid-cols-2">
                <!-- Featured Article 1 -->
                <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Understanding Diabetes Risk Factors</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Learn about the key factors that contribute to diabetes risk and what you can do about them.</p>
                        <a href="#" class="text-blue-500 hover:text-blue-600 inline-flex items-center mt-4">
                            Read More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Featured Article 2 -->
                <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Healthy Eating Guidelines</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Discover practical tips and guidelines for maintaining a balanced, healthy diet.</p>
                        <a href="#" class="text-blue-500 hover:text-blue-600 inline-flex items-center mt-4">
                            Read More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </section>

        <!-- Footer -->
        <footer class="max-w-4xl mx-auto mt-12 text-center">
            <p class="text-sm text-gray-400">
                Knowledge is power. Use these resources to make informed health decisions.
            </p>
        </footer>
    </div>
</x-layout>