<x-layout>
    <x-slot name="title">Support</x-slot>
    <x-slot name="meta">
        <meta name="description"
            content="Support - Get help and answers to your questions about the Diabetes Health Application.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <!-- Header Section -->
        <header class="max-w-6xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Support</h1>
            <p class="text-lg text-gray-300 mt-2">Get help with using the Diabetes Health Application</p>
        </header>

        <!-- Success Message -->
        @if (session('success'))
            <div class="max-w-6xl mx-auto mb-8">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <!-- FAQ Section -->
        <div class="max-w-6xl mx-auto mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h2>
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    <div class="py-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">How do I take my first health
                            assessment?</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Go to the "Assessments" section and click the
                            "Start Assessment" button to begin.</p>
                    </div>
                    <div class="py-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">What do the risk levels mean?
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">The risk levels indicate your likelihood of
                            developing diabetes based on your health data. High Risk requires immediate attention.</p>
                    </div>
                    <div class="py-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Can I view my previous
                            assessments?</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Yes, visit the "Recent Assessments" section on
                            your dashboard to see all previous records.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="max-w-6xl mx-auto mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Contact Us</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Have questions or need help? Fill out the form below,
                    and we'll get back to you soon.</p>
                <form action="{{ route('support.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 mb-4">
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-300 @error('name') border-red-500 @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-300 @error('email') border-red-500 @enderror"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                            <textarea id="message" name="message" rows="4" required
                                class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-300 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Send
                        Message</button>
                </form>
            </div>
        </div>

        <!-- Support History -->
        <div class="max-w-6xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Support History</h2>

                @if ($reports->isEmpty())
                    <div class="text-center py-8">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-gray-100">No Support Requests</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                            You haven't submitted any support requests yet. Use the form above if you need assistance.
                        </p>
                    </div>
                @else
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($reports as $report)
                            <div class="py-4">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                                                {{ $report->name }}
                                            </h3>
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $report->resolved_at ? 'bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100' : 'bg-yellow-100 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100' }}">
                                                {{ $report->resolved_at ? 'Responded' : 'Pending' }}
                                            </span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                            {{ $report->email }}
                                        </p>
                                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                                            {{ $report->message }}
                                        </p>
                                        @if ($report->response)
                                            <div class="mt-3 pl-4 border-l-2 border-blue-500">
                                                <p class="text-sm text-gray-600 dark:text-gray-300">
                                                    <span class="font-medium">Response:</span> {{ $report->response }}
                                                </p>
                                            </div>
                                        @endif
                                        <div class="mt-2 text-xs text-gray-400">
                                            Submitted: {{ $report->created_at->toFormattedDateString() }}
                                            @if ($report->resolved_at)
                                                <span class="ml-4">
                                                    Responded: {{ $report->resolved_at->toFormattedDateString() }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-4">
                        {{ $reports->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
