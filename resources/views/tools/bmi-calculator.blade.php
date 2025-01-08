<x-layout>
    <x-slot name="title">BMI Calculator</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Calculate your Body Mass Index (BMI) easily with our tool.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-6">
        <div class="container mx-auto max-w-4xl">
            <!-- Header Section -->
            <header class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">BMI Calculator</h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Calculate your Body Mass Index to understand your health better.
                </p>
            </header>

            <!-- Form Section -->
            <div class="max-w-4xl mx-auto dark:bg-gray-800 p-8 rounded-lg shadow-lg space-y-6">
                <form method="POST" action="/resources/tools/bmi-calculator" class="space-y-6">
                    @csrf
                    <div>
                        <label for="weight" class="block text-gray-300 font-medium mb-2">Weight (kg)</label>
                        <input 
                            type="number" 
                            id="weight" 
                            name="weight" 
                            value="{{ old('weight') }}"
                            class="w-full bg-gray-900 border-gray-700 text-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your weight"
                        >
                    </div>

                    <div>
                        <label for="height" class="block text-gray-300 font-medium mb-2">Height (m)</label>
                        <input 
                            type="number" 
                            step="0.01" 
                            id="height" 
                            name="height" 
                            value="{{ old('height') }}"
                            class="w-full bg-gray-900 border-gray-700 text-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your height"
                        >
                    </div>

                    <button 
                        type="submit"
                        class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg shadow hover:bg-blue-500 transition-colors duration-200 font-medium"
                    >
                        Calculate BMI
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>