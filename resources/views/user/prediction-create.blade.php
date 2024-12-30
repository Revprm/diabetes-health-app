<x-layout-user>
    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-6">
        <!-- Centered container for the form -->
        <div class="max-w-4xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg space-y-6">
            <header class="mb-8 text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-white">Create a New Prediction</h1>
            </header>

            <form id="createPredictionForm" action="{{ route('user.predict.create') }}" method="POST">
                @csrf
                @method('POST')

                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <!-- Prediction Details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="create_bmi" class="block text-xs font-medium text-gray-300 mb-1">BMI</label>
                        <input type="number" id="create_bmi" name="BMI"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                            required min="0" max="100">
                        @error('BMI')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="create_age" class="block text-xs font-medium text-gray-300 mb-1">Age</label>
                        <input type="number" id="create_age" name="Age"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                            required min="18" max="120">
                        @error('Age')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Checkbox Fields (Grouped) -->
                <div class="grid grid-cols-2 gap-6 py-5">
                    @foreach ([
                        'HighBP' => 'High Blood Pressure',
                        'HighChol' => 'High Cholesterol',
                        'Stroke' => 'Stroke',
                        'HeartDiseaseorAttack' => 'Heart Disease or Attack',
                        'PhysActivity' => 'Physical Activity',
                        'DiffWalk' => 'Difficulty Walking',
                    ] as $field => $label)
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="create_{{ $field }}" name="{{ $field }}" value="1"
                                class="w-4 h-4 text-emerald-600 focus:ring-emerald-500 border-gray-600 rounded"
                                {{ old($field) ? 'checked' : '' }}>
                            <label for="create_{{ $field }}" class="text-xs font-medium text-gray-300">{{ $label }}</label>
                        </div>
                    @endforeach
                </div>

                <!-- Health Details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="create_genhlth" class="block text-xs font-medium text-gray-300 mb-1">General
                            Health</label>
                        <select id="create_genhlth" name="GenHlth"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                            required>
                            <option value="1">Poor</option>
                            <option value="2">Fair</option>
                            <option value="3">Good</option>
                            <option value="4">Very Good</option>
                            <option value="5">Excellent</option>
                        </select>
                    </div>

                    <div>
                        <label for="create_physhlth" class="block text-xs font-medium text-gray-300 mb-1">Physical
                            Health</label>
                        <input type="number" id="create_physhlth" name="PhysHlth"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                            required min="0" max="100">
                    </div>
                </div>

                <!-- Education & Income Levels -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="create_education" class="block text-xs font-medium text-gray-300 mb-1">Education
                            Level</label>
                        <select id="create_education" name="Education"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                            required>
                            <option value="1">No formal education</option>
                            <option value="2">Some High School</option>
                            <option value="3">High School Graduate</option>
                            <option value="4">Some College</option>
                            <option value="5">Bachelor's Degree</option>
                            <option value="6">Master's Degree or Higher</option>
                        </select>
                    </div>

                    <div>
                        <label for="create_income" class="block text-xs font-medium text-gray-300 mb-1">Income Level</label>
                        <select id="create_income" name="Income"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                            required>
                            <option value="1">Less than $10,000</option>
                            <option value="2">$10,000 - $19,999</option>
                            <option value="3">$20,000 - $29,999</option>
                            <option value="4">$30,000 - $39,999</option>
                            <option value="5">$40,000 - $49,999</option>
                            <option value="6">$50,000 - $59,999</option>
                            <option value="7">$60,000 - $69,999</option>
                            <option value="8">$70,000 or more</option>
                        </select>
                    </div>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="flex justify-between space-x-4 mt-6">
                    <a href="{{ route('user.predict') }}"
                        class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-colors">
                        Add Prediction
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout-user>
