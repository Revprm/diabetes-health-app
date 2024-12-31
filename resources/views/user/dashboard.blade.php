<x-layout>
    <x-slot name="title">User Dashboard</x-slot>
    <x-slot name="meta">
        <meta name="description" content="User Dashboard - Personalized insights and features">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <header class="max-w-4xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Welcome, {{ Auth::user()->name }}</h1>
            <p class="text-lg text-gray-300 mt-2">Here you can manage your personal health data</p>
        </header>
    </div>
</x-layout>
