<section class="px-0 sm:px-0">
    <header class="md:text-center">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Photo') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Manage your profile picture.') }}
        </p>
    </header>

    <div class="mt-6 space-y-6 w-full">
        {{-- Simplified Profile Photo Upload Area --}}
        <div class="flex items-center gap-4 md:justify-center">
            {{-- Display Current Avatar - Clickable for Upload --}}
            <div class="relative w-40 h-40 rounded-full overflow-hidden group cursor-pointer" onclick="document.getElementById('avatar').click()">
                <img id="avatar-preview"
                     src="{{ $user->avatar ? Storage::url($user->avatar) : asset('default-avatar.png') }}"
                     alt="{{ $user->name }}'s Avatar"
                     class="w-full h-full object-cover border border-gray-300 dark:border-gray-700">
                {{-- Overlay or indicator on hover/click if desired --}}
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-xs font-semibold">Change Photo</span>
                </div>
                 <div id="upload-loading" class="hidden absolute inset-0 bg-gray-900 bg-opacity-50 rounded-full flex items-center justify-center">
                        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
            </div>

            {{-- Hidden File Input --}}
            {{-- This input will be moved to the main profile form later --}}
            <input id="avatar" name="avatar" type="file" class="sr-only" accept=".jpeg,.png,.jpg,.gif,.svg" onchange="handleFileSelect(event)">

            {{-- Placeholder for file name display (can remove later) --}}
            {{-- <span id="file-name" class="text-sm text-gray-500 dark:text-gray-400">No file chosen</span> --}}

            {{-- Status message for avatar update (Keep this if status messages are handled globally) --}}
            @if (session('status') === 'avatar-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 dark:text-green-400"
                >{{ __('Photo saved.') }}</p>
            @endif

             @error('avatar', 'updateProfileInformation')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror

        </div>
        {{-- Remove the Save Photo button from here --}}
    </div>
</section>

<script>
    // Function to handle file selection and preview
    function handleFileSelect(event) {
        const input = event.target;
        const file = input.files[0];
        const preview = document.getElementById('avatar-preview');
        // const fileNameSpan = document.getElementById('file-name'); // Remove if file name span is removed

        if (file) {
            // Client-side validation (basic)
             if (file.size > 2 * 1024 * 1024) {
                alert('File size must be less than 2MB');
                input.value = ''; // Clear the input
                // fileNameSpan.textContent = 'No file chosen'; // Update if file name span is removed
                preview.src = '{{ $user->avatar ? Storage::url($user->avatar) : asset('default-avatar.png') }}'; // Reset preview
                return;
            }

            const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];
             if (!allowedTypes.includes(file.type)) {
                 alert('Please select a valid image file (JPG, PNG, GIF, or SVG)');
                 input.value = ''; // Clear the input
                 // fileNameSpan.textContent = 'No file chosen'; // Update if file name span is removed
                 preview.src = '{{ $user->avatar ? Storage::url($user->avatar) : asset('default-avatar.png') }}'; // Reset preview
                 return;
             }

            // Preview image
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);

            // Update file name display (if still needed)
            // fileNameSpan.textContent = file.name;

             // Indicate that the avatar has been changed and needs saving (optional visual cue)
             // You might want to show the main Save button or add a visual indicator
        } else {
            // No file chosen, maybe reset preview or filename display
            // fileNameSpan.textContent = 'No file chosen'; // Update if file name span is removed
             preview.src = '{{ $user->avatar ? Storage::url($user->avatar) : asset('default-avatar.png') }}'; // Reset preview if file is cleared
        }
    }

    // Remove the form submit listener as it will be handled by the main form
    // document.querySelector('form').addEventListener('submit', function() { ... });

    // Note: The loading state will need to be triggered by the main profile update form submission
</script>
