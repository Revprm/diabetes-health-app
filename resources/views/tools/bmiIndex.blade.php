<x-layout>
    <x-slot name="title">BMI Results</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Your Body Mass Index (BMI) calculation results">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 md:p-6 lg:p-8">
        <div class="container mx-auto max-w-4xl">
            <!-- Header Section -->
            <header class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Your BMI Results</h1>
                <p class="text-xl text-gray-300">
                    Based on your height of {{ number_format($height, 2) }}m and weight of {{ $weight }}kg
                </p>
            </header>

            <!-- Results Card -->
            <div class="dark:bg-gray-800 backdrop-blur-sm rounded shadow-lg p-6 md:p-8 border-gray-700">
                <!-- BMI Score -->
                <div class="text-center mb-8">
                    <div class="text-6xl font-bold text-white mb-2">{{ number_format($bmi, 1) }}</div>
                    <div class="text-xl text-gray-300">Your Body Mass Index</div>
                </div>

                <!-- BMI Category -->
                <div class="text-center mb-8 text-gray-300 font-bold">
                    <div class="inline-block px-4 py-2 rounded-full 
                        @if($bmi < 18.5) bg-blue-500/20 text-blue-300
                        @elseif($bmi < 25) bg-green-500/20 text-green-300
                        @elseif($bmi < 30) bg-yellow-500/20 text-yellow-300
                        @else bg-red-500/20 text-red-300
                        @endif">
                        @if($bmi < 18.5)
                            Underweight
                        @elseif($bmi < 25)
                            Normal Weight
                        @elseif($bmi < 30)
                            Overweight
                        @else
                            Obese
                        @endif
                    </div>
                </div>

                <!-- BMI Scale Visualization -->
                <div class="mb-8">
                    <div class="h-3 bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-blue-500 via-green-500 via-yellow-500 to-red-500"
                             style="width: {{ min(100, ($bmi / 40) * 100) }}%"></div>
                    </div>
                    <div class="flex justify-between text-sm text-gray-400 mt-2">
                        <span>16</span>
                        <span>18.5</span>
                        <span>25</span>
                        <span>30</span>
                        <span>40</span>
                    </div>
                </div>

                <!-- Health Information -->
                <div class="space-y-4 text-gray-300">
                    <p><strong class="text-white">What this means:</strong> 
                        @if($bmi < 18.5)
                            Your BMI indicates you are underweight. This could suggest insufficient calorie intake or other underlying health issues.
                        @elseif($bmi < 25)
                            Your BMI falls within the normal weight range. This suggests a healthy balance between your height and weight.
                        @elseif($bmi < 30)
                            Your BMI indicates you are overweight. This may increase your risk of certain health conditions.
                        @else
                            Your BMI indicates obesity. This can significantly increase your risk of various health conditions.
                        @endif
                    </p>
                    <p class="text-sm text-gray-400">Note: BMI is a general indicator and doesn't account for factors like muscle mass, age, gender, ethnicity, and body composition.</p>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="/resources/tools/bmi-calculator" 
                       class="flex-1 bg-blue-600 text-white py-3 px-4 rounded-lg shadow hover:bg-blue-500 transition-colors duration-200 font-medium text-center">
                        Calculate Again
                    </a>
                    <button 
                        onclick="window.print()" 
                        class="flex-1 dark:bg-gray-700 text-white py-3 px-4 rounded-lg shadow hover:bg-gray-600 transition-colors duration-200 font-medium">
                        Print Results
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>