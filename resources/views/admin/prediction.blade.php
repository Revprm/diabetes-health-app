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
                    <a href="{{ route('admin.prediction.create') }}"
                        class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-colors">
                        Add Prediction
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-700">
                                <th class="py-3 px-4 text-gray-300 font-semibold">ID</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">User</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Age</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">BMI</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Prediction</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Confidence</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Details</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($predictions as $prediction)
                                <tr class="border-b border-gray-700 hover:bg-gray-700/50 transition-colors">
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->id }}</td>
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->user->name ?? 'N/A' }}</td>
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->Age }}</td>
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->BMI }}</td>
                                    <td class="py-3 px-4 text-gray-300">
                                        <span
                                            class="px-2 py-1 text-sm rounded-full
                                            @if ($prediction->prediction == '2') bg-red-500/20 text-red-300
                                            @elseif ($prediction->prediction == '1') bg-yellow-500/20 text-yellow-300
                                            @else bg-green-500/20 text-green-300 @endif">
                                            @if ($prediction->prediction == '2')
                                                High Risk
                                            @elseif ($prediction->prediction == '1')
                                                Moderate Risk
                                            @else
                                                Low Risk
                                            @endif
                                        </span>

                                    </td>
                                    <td class="py-3 px-4 text-gray-300">{{ $prediction->confidence }}%</td>
                                    <td class="py-3 px-4 text-gray-300">
                                        <div><strong>High Blood Pressure:</strong> {{ $prediction->HighBP ? 'Yes' : 'No' }}</div>
                                        <div><strong>High Cholesterol:</strong> {{ $prediction->HighChol ? 'Yes' : 'No' }}</div>
                                        <div><strong>Stroke:</strong> {{ $prediction->Stroke ? 'Yes' : 'No' }}</div>
                                        <div><strong>Heart Disease or Attack:</strong> {{ $prediction->HeartDiseaseorAttack ? 'Yes' : 'No' }}</div>
                                        <div><strong>Physical Activity:</strong> {{ $prediction->PhysActivity ? 'Yes' : 'No' }}</div>
                                        <div><strong>Difficulty Walking:</strong> {{ $prediction->DiffWalk ? 'Yes' : 'No' }}</div>
                                        <div><strong>General Health:</strong>
                                            @if($prediction->GenHlth == 1) Poor
                                            @elseif($prediction->GenHlth == 2) Fair
                                            @elseif($prediction->GenHlth == 3) Good
                                            @elseif($prediction->GenHlth == 4) Very Good
                                            @elseif($prediction->GenHlth == 5) Excellent
                                            @else N/A
                                            @endif
                                        </div>
                                        <div><strong>Physical Health (days):</strong> {{ $prediction->PhysHlth }}</div>
                                        <div><strong>Education Level:</strong>
                                            @if($prediction->Education == 1) No formal education
                                            @elseif($prediction->Education == 2) Some High School
                                            @elseif($prediction->Education == 3) High School Graduate
                                            @elseif($prediction->Education == 4) Some College
                                            @elseif($prediction->Education == 5) Bachelor's Degree
                                            @elseif($prediction->Education == 6) Master's Degree or Higher
                                            @else N/A
                                            @endif
                                        </div>
                                        <div><strong>Income Level:</strong>
                                            @if($prediction->Income == 1) Less than $10,000
                                            @elseif($prediction->Income == 2) $10,000 - $19,999
                                            @elseif($prediction->Income == 3) $20,000 - $29,999
                                            @elseif($prediction->Income == 4) $30,000 - $39,999
                                            @elseif($prediction->Income == 5) $40,000 - $49,999
                                            @elseif($prediction->Income == 6) $50,000 - $59,999
                                            @elseif($prediction->Income == 7) $60,000 - $69,999
                                            @elseif($prediction->Income == 8) $70,000 or more
                                            @else N/A
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 space-x-2">
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

    <div id="deletePredictionModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center"
        tabindex="-1" role="dialog">
        <div class="bg-gray-800 rounded-lg max-w-md w-full mx-4 shadow-2xl" role="document">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-white mb-4">Delete Prediction</h3>
                <p class="text-gray-300 mb-4">Are you sure you want to delete this prediction? This action cannot be
                    undone.</p>

                <form id="deletePredictionForm" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeDeletePredictionModal()"
                            class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
                            Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout-admin>

<!-- Toast Messages for Success/Error -->
@if (session('success'))
    <div id="successToast"
        class="fixed bottom-4 right-4 bg-emerald-600 text-white px-6 py-3 rounded-lg shadow-lg transition-opacity duration-500">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div id="errorToast"
        class="fixed bottom-4 right-4 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg transition-opacity duration-500">
        {{ session('error') }}
    </div>
@endif

<script>
    function showCreatePredictionModal() {
        const modal = document.getElementById('createPredictionModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        // Add event listener to close modal when clicking outside
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeCreatePredictionModal();
            }
        });
    }

    function closeCreatePredictionModal() {
        const modal = document.getElementById('createPredictionModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // Optional: Add keyboard support for accessibility
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeCreatePredictionModal();
        }
    });

    // Optional: Initialize any form reset logic when modal opens
    document.getElementById('createPredictionForm')?.addEventListener('reset', () => {
        closeCreatePredictionModal();
    });

    function showDeletePredictionModal(predictionId) {
        const modal = document.getElementById('deletePredictionModal');
        const form = document.getElementById('deletePredictionForm');

        // Update form action URL
        form.action = `/admin/prediction/${predictionId}`;

        // Show modal
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        // Add click outside listener
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeDeletePredictionModal();
            }
        });
    }

    function closeDeletePredictionModal() {
        const modal = document.getElementById('deletePredictionModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // Add keyboard support
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeDeletePredictionModal();
        }
    });
</script>
