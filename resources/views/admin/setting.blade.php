<x-layout-admin>
    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <div class="max-w-4xl mx-auto py-8 text-white">
            <h1 class="text-3xl font-bold mb-4">Admin Settings</h1>
            <p class="text-gray-300">Manage administrator configurations here.</p>
            <form class="mt-6 space-y-6 bg-gray-800 rounded-lg p-10 shadow w-full text-lg">
                <div>
                    <label class="block text-sm font-medium">Current Name</label>
                    <input type="text"
                           class="mt-1 block w-full bg-gray-700 text-gray-400 cursor-not-allowed"
                           value="{{ Auth::user()->name }}"
                           readonly>
                </div>
            </form>
            <form method="POST" action="#" class="mt-6 space-y-6 bg-gray-800 rounded-lg p-10 shadow w-full text-lg">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium">Admin Name</label>
                    <input type="text" name="name" id="name"
                           value="{{ old('name', Auth::user()->name) }}"
                           class="mt-1 block w-full dark:bg-gray-700" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium">New Password</label>
                    <input type="password" name="password" id="password" class="mt-1 block w-full dark:bg-gray-700">
                </div>
                <button type="submit" class="px-4 py-2 mt-2 bg-green-600 text-white rounded">Save Changes</button>
            </form>
        </div>
    </div>
</x-layout-admin>
