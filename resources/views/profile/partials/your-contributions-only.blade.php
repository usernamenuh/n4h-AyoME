<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Your Contributions') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('View your articles, comments, and likes activity.') }}
        </p>
    </header>

    {{-- Contributions Section --}}
    {{-- Modified to display contributions in styled blocks with icons --}}
    <div class="mt-6 space-y-4"> {{-- Adjusted margin-top --}}

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            {{-- Articles Published Block --}}
            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm flex items-center gap-3">
                <i data-lucide="file-text" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i> {{-- Icon for Articles --}}
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Articles Published') }}</p>
                    {{-- Display actual article count --}}
                    <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $articleCount ?? '-' }}</p>
                </div>
            </div>

            {{-- Comments Posted Block --}}
            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm flex items-center gap-3">
                <i data-lucide="message-circle" class="w-6 h-6 text-green-600 dark:text-green-400"></i> {{-- Icon for Comments --}}
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Comments Posted') }}</p>
                    {{-- Display actual comment count --}}
                    <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $commentCount ?? '-' }}</p>
                </div>
            </div>

            {{-- Likes Received Block --}}
            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm flex items-center gap-3">
                 <i data-lucide="heart" class="w-6 h-6 text-red-600 dark:text-red-400"></i> {{-- Icon for Likes --}}
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Likes Received') }}</p>
                    {{-- Display actual like count --}}
                    <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $likeCount ?? '-' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
