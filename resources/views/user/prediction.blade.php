<x-layout>
    <x-slot name="title">Prediction History</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Submit and view your health data for predictions.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <header class="max-w-6xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Prediction History</h1>
            <p class="text-lg text-gray-300 mt-2">Submit your health data and view past entries.</p>
        </header>

        <div class="max-w-6xl mx-auto">
            <div class="bg-gray-800 rounded-lg shadow-xl p-6">
                <div class="mb-6 flex justify-between items-center">
                    <h2 class="text-xl text-white font-semibold">Your Data</h2>
                    <a href="{{ route('user.predict.create') }}"
                        class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-colors">
                        Add New Entry
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-700">
                                <th class="py-3 px-4 text-gray-300 font-semibold">Date</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Age</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">BMI</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">General Health</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Details</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Confidence</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Prediction</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($predictions->isEmpty())
                                <tr>
                                    <td class="py-3 px-4 text-gray-300" colspan="7">No entries found.</td>
                                </tr>
                            @else
                                @foreach ($predictions as $prediction)
                                    <tr class="border-b border-gray-700 hover:bg-gray-700/50 transition-colors">
                                        <td class="py-3 px-4 text-gray-300">{{ $prediction->created_at->format('Y-m-d') }}</td>
                                        <td class="py-3 px-4 text-gray-300">{{ $prediction->Age }}</td>
                                        <td class="py-3 px-4 text-gray-300">{{ $prediction->BMI }}</td>
                                        <td class="py-3 px-4 text-gray-300">
                                            @if ($prediction->GenHlth == 1)
                                                Poor
                                            @elseif($prediction->GenHlth == 2)
                                                Fair
                                            @elseif($prediction->GenHlth == 3)
                                                Good
                                            @elseif($prediction->GenHlth == 4)
                                                Very Good
                                            @elseif($prediction->GenHlth == 5)
                                                Excellent
                                            @endif
                                        </td>
                                        <td class="py-3 px-4 text-gray-300">
                                            <div><strong>High Blood Pressure:</strong>
                                                {{ $prediction->HighBP ? 'Yes' : 'No' }}</div>
                                            <div><strong>High Cholesterol:</strong>
                                                {{ $prediction->HighChol ? 'Yes' : 'No' }}</div>
                                            <div><strong>Stroke:</strong> {{ $prediction->Stroke ? 'Yes' : 'No' }}</div>
                                            <div><strong>Heart Disease or Attack:</strong>
                                                {{ $prediction->HeartDiseaseorAttack ? 'Yes' : 'No' }}</div>
                                            <div><strong>Physical Activity:</strong>
                                                {{ $prediction->PhysActivity ? 'Yes' : 'No' }}</div>
                                            <div><strong>Difficulty Walking:</strong>
                                                {{ $prediction->DiffWalk ? 'Yes' : 'No' }}</div>
                                        </td>
                                        <td class="py-3 px-4 text-gray-300">{{ $prediction->confidence }}%</td>
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
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
