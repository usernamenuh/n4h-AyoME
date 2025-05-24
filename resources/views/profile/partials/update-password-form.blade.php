<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        {{-- Current Password Field --}}
        <div>
            <label for="update_password_current_password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Current Password') }}</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                 <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                     <i data-lucide="lock" class="w-5 h-5 text-gray-400"></i> {{-- Lock icon --}}
                 </div>
                 <input id="update_password_current_password" name="current_password" type="password"
                    class="appearance-none block w-full pl-10 pr-10 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md @error('current_password', 'updatePassword') border-red-500 @enderror"
                    autocomplete="current-password">
                 {{-- Optional: Add toggle password visibility icon if needed --}}
                 {{-- <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" id="toggleCurrentPassword">
                     <i data-lucide="eye" class="w-5 h-5 text-gray-400"></i>
                 </div> --}}
             </div>
            @error('current_password', 'updatePassword')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        {{-- New Password Field --}}
        <div>
            <label for="update_password_password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('New Password') }}</label>
             <div class="mt-1 relative rounded-md shadow-sm">
                 <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                     <i data-lucide="lock" class="w-5 h-5 text-gray-400"></i> {{-- Lock icon --}}
                 </div>
                 <input id="update_password_password" name="password" type="password"
                    class="appearance-none block w-full pl-10 pr-10 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md @error('password', 'updatePassword') border-red-500 @enderror"
                    autocomplete="new-password">
                 {{-- Optional: Add toggle password visibility icon if needed --}}
                  {{-- <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" id="toggleNewPassword">
                      <i data-lucide="eye" class="w-5 h-5 text-gray-400"></i>
                  </div> --}}
            </div>
            @error('password', 'updatePassword')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm Password Field --}}
        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Confirm Password') }}</label>
             <div class="mt-1 relative rounded-md shadow-sm">
                 <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                     <i data-lucide="lock" class="w-5 h-5 text-gray-400"></i> {{-- Lock icon --}}
                 </div>
                 <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    class="appearance-none block w-full pl-10 pr-10 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md @error('password_confirmation', 'updatePassword') border-red-500 @enderror"
                    autocomplete="new-password">
                 {{-- Optional: Add toggle password visibility icon if needed --}}
                  {{-- <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" id="togglePasswordConfirmation">
                      <i data-lucide="eye" class="w-5 h-5 text-gray-400"></i>
                  </div> --}}
            </div>
            @error('password_confirmation', 'updatePassword')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4">
             {{-- Replaced x-primary-button with standard button and matching styles --}}
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
