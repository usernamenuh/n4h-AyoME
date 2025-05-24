<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Ayo Membaca</title>
    <!-- Link ke app.css Anda yang berisi Tailwind dan gaya kustom -->
    <!-- Pastikan Anda menjalankan npm run dev/build agar file ini tergenerate -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Opsional: Jika ada font atau CSS global lain yang Anda gunakan di home.blade.php -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:weight@800&display=swap" rel="stylesheet">
    <!-- Jika Anda menggunakan Lucide Icons, sertakan scriptnya -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-100 text-black dark:bg-gray-900 dark:text-white font-manrope">

    <div class="flex items-center justify-center min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white dark:bg-gray-800 p-10 rounded-xl shadow-lg animate-slideUp">
            <!-- Back to Home Link -->
            <div class="text-left mb-6">
                <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300 text-sm font-medium flex items-center">
                    <i data-lucide="arrow-left" class="w-4 h-4 mr-1"></i>
                    Kembali ke Home
                </a>
            </div>

            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 dark:text-white custom-poppins">
                    Daftar Akun Baru
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                    Isi data diri Anda untuk membuat akun
                </p>
            </div>

             <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-4">
                    <div class="font-medium text-red-600 dark:text-red-400">{{ __('Whoops! Something went wrong.') }}</div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                     <div class="mt-1 relative rounded-md shadow-sm">
                         <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                             <i data-lucide="user" class="w-5 h-5 text-gray-400"></i>
                         </div>
                        <input id="name" name="name" type="text" autocomplete="name" required autofocus
                            class="appearance-none block w-full pl-10 px-3 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md @error('name') border-red-500 @enderror"
                            value="{{ old('name') }}">
                    </div>
                     @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-lucide="mail" class="w-5 h-5 text-gray-400"></i>
                        </div>
                        <input id="email" name="email" type="email" autocomplete="username" required
                            class="appearance-none block w-full pl-10 px-3 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md @error('email') border-red-500 @enderror"
                            value="{{ old('email') }}">
                    </div>
                     @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                         <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                             <i data-lucide="lock" class="w-5 h-5 text-gray-400"></i>
                         </div>
                         <input id="password" name="password" type="password" autocomplete="new-password" required
                            class="appearance-none block w-full pl-10 pr-10 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md @error('password') border-red-500 @enderror">
                         <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" id="togglePassword">
                             <i data-lucide="eye" class="w-5 h-5 text-gray-400"></i>
                         </div>
                     </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                         <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                             <i data-lucide="lock" class="w-5 h-5 text-gray-400"></i>
                         </div>
                         <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required
                            class="appearance-none block w-full pl-10 pr-10 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md @error('password_confirmation') border-red-500 @enderror">
                         <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" id="togglePasswordConfirmation">
                             <i data-lucide="eye" class="w-5 h-5 text-gray-400"></i>
                         </div>
                     </div>
                     @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Daftar
                    </button>
                </div>

                 <!-- Social Login Buttons -->
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div>
                            <a href="{{ url('/auth/google') }}"
                                class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <span class="sr-only">Sign in with Google</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1024px-Google_%22G%22_logo.svg.png" alt="Google" class="w-5 h-5 mr-2">
                                Google
                            </a>
                        </div>

                        <div>
                            <a href="{{ url('/auth/facebook') }}"
                                class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <span class="sr-only">Sign in with Facebook</span>
                                <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Facebook" class="w-5 h-5 mr-2">
                                Facebook
                            </a>
                        </div>
                    </div>
                </div>

                 <!-- Link to Login -->
                <div class="text-center text-sm text-gray-600 dark:text-gray-400 mt-4">
                    Sudah punya akun? <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">Login di sini</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Script untuk Lucide Icons jika digunakan
        lucide.createIcons();

        // Script untuk toggle password visibility
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const togglePasswordConfirmation = document.querySelector('#togglePasswordConfirmation');
        const passwordConfirmation = document.querySelector('#password_confirmation');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // toggle the eye icon
            const icon = this.querySelector('i');
            if (type === 'password') {
                icon.setAttribute('data-lucide', 'eye');
            } else {
                icon.setAttribute('data-lucide', 'eye-off');
            }
             lucide.createIcons(); // Re-render icons after changing data-lucide
        });

         togglePasswordConfirmation.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = passwordConfirmation.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmation.setAttribute('type', type);

            // toggle the eye icon
            const icon = this.querySelector('i');
            if (type === 'password') {
                icon.setAttribute('data-lucide', 'eye');
            } else {
                icon.setAttribute('data-lucide', 'eye-off');
            }
             lucide.createIcons(); // Re-render icons after changing data-lucide
        });
    </script>
</body>
</html>
