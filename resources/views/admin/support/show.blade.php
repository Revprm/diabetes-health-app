<x-layout>
    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
                    Support Report #{{ $report->id }}
                </h1>
                <a href="{{ route('admin.support') }}" 
                   class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 px-4 py-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600">
                    Back to List
                </a>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="py-4">
                @if(session('success'))
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Name</h3>
                            <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $report->name }}</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Email</h3>
                            <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $report->email }}</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Status</h3>
                            <p class="mt-1">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $report->resolved_at ? 'bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100' : 'bg-yellow-100 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100' }}">
                                    {{ $report->resolved_at ? 'Responded' : 'Pending' }}
                                </span>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Created</h3>
                            <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                                {{ $report->created_at->format('M d, Y H:i') }}
                            </p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Message</h3>
                        <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $report->message }}</p>
                    </div>

                    @if($report->response)
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Response</h3>
                            <div class="mt-1 p-4 bg-gray-50 dark:bg-gray-700 rounded-md">
                                <p class="text-sm text-gray-900 dark:text-gray-100">{{ $report->response }}</p>
                                <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                                    Responded {{ $report->resolved_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    @endif

                    @unless($report->resolved_at)
                        <form action="{{ route('admin.support.respond', $report) }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="response" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Your Response
                                </label>
                                <textarea
                                    name="response"
                                    id="response"
                                    rows="4"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    required
                                >{{ old('response') }}</textarea>
                                @error('response')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" 
                                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                                Send Response
                            </button>
                        </form>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</x-layout>