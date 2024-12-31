<x-layout>
    <x-slot name="title">User Dashboard</x-slot>
    <x-slot name="meta">
        <meta name="description" content="User Dashboard - View your diabetes risk predictions and health insights">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <!-- Header Section -->
        <header class="max-w-6xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Welcome, {{ $user->name }}</h1>
            <p class="text-lg text-gray-300 mt-2">Track your health predictions and risk factors</p>
        </header>

        <!-- Latest Prediction Stats -->
        @if ($latestPrediction)
            <div class="max-w-6xl mx-auto mb-8">
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Latest Assessment Results</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <span class="text-sm text-gray-500 dark:text-gray-400">Risk Status</span>
                            <p
                                class="text-2xl font-semibold 
                                {{ $latestPrediction->prediction === 2 ? 'text-red-500' : ($latestPrediction->prediction === 1 ? 'text-yellow-500' : 'text-green-500') }}">
                                {{ $latestPrediction->prediction === 2 ? 'High Risk' : ($latestPrediction->prediction === 1 ? 'Medium Risk' : 'Low Risk') }}
                            </p>

                        </div>
                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <span class="text-sm text-gray-500 dark:text-gray-400">Confidence</span>
                            <p class="text-2xl font-semibold text-blue-500">{{ $latestPrediction->confidence }}%</p>
                        </div>
                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <span class="text-sm text-gray-500 dark:text-gray-400">Assessment Date</span>
                            <p class="text-2xl font-semibold text-gray-900 dark:text-white">
                                {{ $latestPrediction->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <span class="text-sm text-gray-500 dark:text-gray-400">BMI</span>
                            <p class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $latestPrediction->BMI }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($trends)
            <div class="max-w-6xl mx-auto mb-8">
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Health Trends</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <span class="text-sm text-gray-500 dark:text-gray-400">BMI Trend</span>
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">{{ $trends['bmi_trend'] }}
                            </p>
                        </div>
                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <span class="text-sm text-gray-500 dark:text-gray-400">Health Trend</span>
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">{{ $trends['health_trend'] }}
                            </p>
                        </div>
                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <span class="text-sm text-gray-500 dark:text-gray-400">Risk Percentage</span>
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">
                                {{ number_format($trends['risk_percentage'], 2) }}%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Prediction History -->
        @if ($predictions->isNotEmpty())
            <div class="max-w-6xl mx-auto">
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Recent Assessments</h2>
                        <a href="{{ route('user.predict') }}" class="text-blue-500 hover:text-blue-600">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left text-gray-500 dark:text-gray-400">
                                    <th class="pb-3">Date</th>
                                    <th class="pb-3">Risk Status</th>
                                    <th class="pb-3">Confidence</th>
                                    <th class="pb-3">BMI</th>
                                    <th class="pb-3">General Health</th>
                                    <th class="pb-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($predictions as $prediction)
                                    <tr>
                                        <td class="py-3 text-gray-300">{{ $prediction->created_at->format('M d, Y') }}
                                        </td>
                                        <td class="py-3 text-gray-300">
                                            <span
                                                class="px-2 py-1 rounded text-sm 
                                                {{ $prediction->prediction === 2 ? 'bg-red-100 text-red-800' : ($prediction->prediction === 1 ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800') }}">
                                                {{ $prediction->prediction === 2 ? 'High Risk' : ($prediction->prediction === 1 ? 'Medium Risk' : 'Low Risk') }}
                                            </span>

                                        </td>
                                        <td class="py-3 text-gray-300">{{ $prediction->confidence }}%</td>
                                        <td class="py-3 text-gray-300">{{ $prediction->BMI }}</td>
                                        <td class="py-3 text-gray-300">{{ $prediction->GenHlth }}/5</td>
                                        <td class="py-3 text-gray-300">
                                            <a href="{{ route('user.predict', $prediction) }}"
                                                class="text-blue-500 hover:text-blue-600">View Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <div class="max-w-6xl mx-auto">
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 text-center">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">No Assessments Yet</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Take your first health assessment to get started
                    </p>
                    <a href="{{ route('prediction.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        Start Assessment
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        @endif
    </div>
</x-layout>
