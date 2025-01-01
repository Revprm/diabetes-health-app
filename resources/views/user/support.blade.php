<x-layout>
    <x-slot name="title">Support</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Support - Get help and answers to your questions about the Diabetes Health Application.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <!-- Header Section -->
        <header class="max-w-6xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Support</h1>
            <p class="text-lg text-gray-300 mt-2">Get help with using the Diabetes Health Application</p>
        </header>

        <!-- FAQ Section -->
        <div class="max-w-6xl mx-auto mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h2>
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    <div class="py-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">How do I take my first health assessment?</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Go to the "Assessments" section and click the "Start Assessment" button to begin.</p>
                    </div>
                    <div class="py-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">What do the risk levels mean?</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">The risk levels indicate your likelihood of developing diabetes based on your health data. High Risk requires immediate attention.</p>
                    </div>
                    <div class="py-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Can I view my previous assessments?</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Yes, visit the "Recent Assessments" section on your dashboard to see all previous records.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="max-w-6xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Contact Us</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Have questions or need help? Fill out the form below, and we'll get back to you soon.</p>
                <form action="{{ route('support.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 mb-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input type="text" id="name" name="name" required class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-300">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-300">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                            <textarea id="message" name="message" rows="4" required class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-300"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
