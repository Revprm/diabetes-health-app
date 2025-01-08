<x-layout>
    <x-slot name="title">BMI Calculator</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Calculate your Body Mass Index (BMI) easily with our tool.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-6">
        <div class="container mx-auto max-w-4xl">
            <!-- Header Section -->
            <header class="max-w-4xl mx-auto mb-8">
                <a href="/resources" class="inline-flex items-center text-gray-300 hover:text-white mb-4">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Resources
                </a>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">BMI Calculator</h1>
                <p class="text-lg text-gray-300 mt-2">
                    Calculate your Body Mass Index to understand your health better.
                </p>
            </header>

            <!-- Form Section -->
            <div class="max-w-4xl mx-auto dark:bg-gray-800 p-8 rounded-lg shadow-lg space-y-6">
                <form method="POST" action="/resources/tools/bmi-calculator" class="space-y-6">
                    @csrf
                    <div>
                        <label for="weight" class="block text-gray-300 font-medium mb-2">Weight (kg)</label>
                        <input type="number" id="weight" name="weight" value="{{ old('weight') }}"
                            class="w-full bg-gray-900 border-gray-700 text-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your weight">
                    </div>

                    <div>
                        <label for="height" class="block text-gray-300 font-medium mb-2">Height (m)</label>
                        <input type="number" step="0.01" id="height" name="height" value="{{ old('height') }}"
                            class="w-full bg-gray-900 border-gray-700 text-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your height">
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg shadow hover:bg-blue-500 transition-colors duration-200 font-medium">
                        Calculate BMI
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
