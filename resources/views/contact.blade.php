<x-layout>
    <x-slot name="title">Contact Us</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Get in touch with us for support, questions, or feedback about our diabetes risk prediction service.">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 md:p-6 lg:p-8">
        <!-- Header Section -->
        <header class="max-w-4xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Contact Us</h1>
            <p class="text-lg text-gray-300 mt-2">
                Have questions? We're here to help and listen.
            </p>
        </header>

        <div class="max-w-4xl mx-auto">
            <div class="grid gap-8 md:grid-cols-2">
                <!-- Contact Form -->
                <section class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Send us a Message</h2>
                    
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Name</label>
                            <input type="text" id="name" name="name" 
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                            <input type="email" id="email" name="email" 
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Subject</label>
                            <select id="subject" name="subject" 
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option>General Inquiry</option>
                                <option>Technical Support</option>
                                <option>Feedback</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" 
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>

                        <button type="submit" 
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-medium py-2 px-4 rounded-md transition-colors">
                            Send Message
                        </button>
                    </form>
                </section>

                <!-- Contact Information -->
                <section class="space-y-6">
                    <!-- Quick Contact Cards -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg border-l-4 border-blue-400">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Email</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">revy.pramana@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Phone</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">+62 (812) 1358-6300</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg border-l-4 border-green-400">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h3>
                        <ul class="space-y-4">
                            <li>
                                <button class="text-left w-full">
                                    <div class="font-medium text-gray-900 dark:text-white">How accurate is the prediction?</div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Our AI model is trained on extensive medical data with high accuracy rates.</p>
                                </button>
                            </li>
                            <li>
                                <button class="text-left w-full">
                                    <div class="font-medium text-gray-900 dark:text-white">Is my data secure?</div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Yes, we follow strict privacy guidelines and use encryption to protect your data.</p>
                                </button>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Footer -->
            <footer class="mt-12 text-center">
                <p class="text-sm text-gray-400">
                    We typically respond to inquiries within 24 hours.
                </p>
            </footer>
        </div>
    </div>
</x-layout>
