<x-layout-admin>
    <x-slot name="title">Prediction History</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Prediction History - View and manage your health predictions">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <header class="max-w-6xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Prediction History</h1>
            <p class="text-lg text-gray-300 mt-2">View and manage your health predictions</p>
        </header>

        <div class="max-w-6xl mx-auto">
            <div class="bg-gray-800 rounded-lg shadow-xl p-6">
                <div class="mb-6 flex justify-between items-center">
                    <h2 class="text-xl text-white font-semibold">Prediction List</h2>
                    <button onclick="showCreatePredictionModal()"
                        class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-colors">
                        Add Prediction
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-700">
                                <th class="py-3 px-4 text-gray-300 font-semibold">ID</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Age</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">BMI</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Prediction</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Confidence</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($predictions as $prediction)
                                <tr class="border-b border-gray-700 hover:bg-gray-700/50 transition-colors">
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->id }}</td>
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->Age }}</td>
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->BMI }}</td>
                                    <td class="py-3 px-4 text-gray-300">
                                        <span
                                            class="px-2 py-1 text-sm rounded-full
                                                @if ($prediction->prediction) bg-red-500/20 text-red-300
                                                @else bg-green-500/20 text-green-300 @endif">
                                            {{ $prediction->prediction ? 'Positive' : 'Negative' }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->confidence }}%</td>
                                    <td class="py-3 px-4 space-x-2">
                                        <button onclick="showEditPredictionModal({{ $prediction->id }}, {{ json_encode($prediction) }})"
                                            class="inline-block px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded transition-colors">
                                            Edit
                                        </button>
                                        <button onclick="showDeletePredictionModal({{ $prediction->id }})"
                                            class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded transition-colors">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Prediction Modals -->
    <div id="createPredictionModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center"
        tabindex="-1" role="dialog">
        <div class="bg-gray-800 rounded-lg max-w-md w-full mx-4 shadow-2xl" role="document">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-white mb-4">Add New Prediction</h3>

                <form id="createPredictionForm" action="{{ route('admin.prediction.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="space-y-4">
                        <!-- Inputs for Prediction Features -->
                        <div>
                            <label for="create_bmi" class="block text-sm font-medium text-gray-300 mb-1">BMI</label>
                            <input type="number" id="create_bmi" name="BMI"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div>
                            <label for="create_age" class="block text-sm font-medium text-gray-300 mb-1">Age</label>
                            <input type="number" id="create_age" name="Age"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div>
                            <label for="create_prediction" class="block text-sm font-medium text-gray-300 mb-1">Prediction</label>
                            <select id="create_prediction" name="prediction"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500">
                                <option value="0">Negative</option>
                                <option value="1">Positive</option>
                            </select>
                        </div>

                        <div>
                            <label for="create_confidence" class="block text-sm font-medium text-gray-300 mb-1">Confidence (%)</label>
                            <input type="number" id="create_confidence" name="confidence" step="0.01"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" onclick="closeCreatePredictionModal()"
                            class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-colors">
                            Add Prediction
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout-admin>
