<x-layout-user>
    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <div class="max-w-4xl mx-auto py-4 text-white">
            <h1 class="text-3xl font-bold mb-4">User Settings</h1>
            <p class="text-gray-300 text-xl">Manage your personal preferences here.</p>

            @if (session('status'))
                <div class="mt-4 mb-4 p-4 bg-green-600 text-white rounded-lg">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mt-4 mb-4 p-4 bg-red-600 text-white rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('user.setting.update') }}"
                class="mt-6 space-y-6 bg-gray-800 rounded-lg p-10 shadow w-full text-lg">
                @csrf
                <div>
                    <label class="block text-sm font-medium">Current Name</label>
                    <input type="text" class="mt-1 block w-full bg-gray-700 text-gray-400 cursor-not-allowed"
                        value="{{ Auth::user()->name }}" readonly>
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}"
                        class="mt-1 block w-full dark:bg-gray-700" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium">New Password</label>
                    <input type="password" name="password" id="password" class="mt-1 block w-full dark:bg-gray-700">
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="mt-1 block w-full dark:bg-gray-700">
                </div>
                <button type="submit" class="px-4 py-2 mt-2 bg-green-600 text-white rounded">Save Changes</button>
            </form>
        </div>
    </div>
</x-layout-user>
