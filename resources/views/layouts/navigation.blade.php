@vite(['resources/css/app.css', 'resources/js/app.js'])
<nav id="navbar"
        class="fixed top-6 left-1/2 transform -translate-x-1/2 z-50 w-[90%] max-w-5xl transition-all duration-300 ease-in-out">
        <div id="navbar-inner"
            class="bg-transparent rounded-full px-6 py-3 flex justify-between items-center transition-all duration-300 ease-in-out">
            <!-- Logo -->
            <div class="text-blue-600 text-lg font-semibold">AYOME</div>
            <!-- Menu Links -->
            <div class="flex gap-6 items-center">
                <a href="/" class="hover:text-blue-600 font-semibold">Home</a>
                <!-- Kategori Dropdown -->
                <div class="relative group">
                    <a href="#" class="hover:text-blue-600 font-semibold">Kategori</a>
                    <div
                        class="absolute left-0 top-full mt-2 w-[300px] bg-white dark:bg-gray-900 shadow-xl rounded-xl p-4 grid grid-cols-2 gap-3 text-sm text-gray-900 dark:text-white opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="#" class="hover:text-blue-600">Nasional</a>
                        <a href="#" class="hover:text-blue-600">Internasional</a>
                        <a href="#" class="hover:text-blue-600">Politik</a>
                        <a href="#" class="hover:text-blue-600">Hukum</a>
                        <a href="#" class="hover:text-blue-600">Ekonomi</a>
                        <a href="#" class="hover:text-blue-600">Bisnis</a>
                        <a href="#" class="hover:text-blue-600">Teknologi</a>
                        <a href="#" class="hover:text-blue-600">Otomotif</a>
                        <a href="#" class="hover:text-blue-600">Pendidikan</a>
                        <a href="#" class="hover:text-blue-600">Kesehatan</a>
                        <a href="#" class="hover:text-blue-600">Lifestyle</a>
                        <a href="#" class="hover:text-blue-600">Entertainment</a>
                        <a href="#" class="hover:text-blue-600">Olahraga</a>
                        <a href="#" class="hover:text-blue-600">Travel</a>
                    </div>
                </div>

                <a href="#" class="hover:text-blue-600 font-semibold">Trending</a>
                <a href="#" class="hover:text-blue-600 font-semibold">Berlangganan</a>

                <div class="relative w-full max-w-xs">
                    <input type="text" placeholder="Cari berita..."
                        class="pl-10 pr-4 py-2 rounded-full w-full
                         bg-gray-200 text-black placeholder-gray-500
                         dark:bg-white/10 dark:text-white dark:placeholder-gray-400
                         focus:outline-none focus:ring-0 focus:ring-blue-500" />
                    <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-500 dark:text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                </div>
            </div>
            <!-- Theme + Auth -->
            <!-- Kontainer Tombol & Dropdown -->
            <div class="flex gap-3 items-center">
                <!-- Tombol Toggle Dropdown -->
                <!-- Tombol Navbar -->
                <div class="relative inline-block">
                    <button id="toggleDark" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-white/20">
                        <i id="themeIcon" class="lucide w-5 h-5 text-black dark:text-white" data-lucide="monitor"></i>
                    </button>
                    <!-- Dropdown Theme -->
                    <div id="themeDropdown"
                        class="hidden absolute mt-2 w-48 right-0 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg z-50">
                        <button onclick="setTheme('system')"
                            class="flex items-center w-full px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <i data-lucide="monitor" class="w-4 h-4 mr-2"></i> Otomatis
                        </button>
                        <button onclick="setTheme('dark')"
                            class="flex items-center w-full px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <i data-lucide="moon" class="w-4 h-4 mr-2"></i> Mode Gelap
                        </button>
                        <button onclick="setTheme('light')"
                            class="flex items-center w-full px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <i data-lucide="sun" class="w-4 h-4 mr-2"></i> Mode Terang
                        </button>
                    </div>
                </div>
                <!-- User Dropdown -->
                <div class="relative inline-block text-left">
                    <!-- Trigger -->
                    <div class="flex items-center space-x-3">
                        <button onclick="toggleMenu()"
                            class="rounded-full dark:border-white border-black dark:text-white text-black transition duration-300">
                            <i data-lucide="user-circle"></i>
                        </button>
                    </div>
                    <!-- Ganti isi lama dengan ini -->
                    <div id="userDropdown"
                        class="hidden absolute right-0 mt-2 w-60 bg-white dark:bg-gray-800 rounded-xl shadow-lg z-50 py-2 space-y-1 text-sm">
                        @guest
                        <!-- Login -->
                        <a href="{{ route('login') }}"
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="log-in" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Login / Register</span>
                        </a>
                        @endguest

                        @auth
                        <!-- User Name (optional, can add styling) -->
                        <div class="px-4 py-2 text-gray-900 dark:text-white font-semibold border-b border-gray-200 dark:border-gray-700">
                            Hello, {{ Auth::user()->name }}
                        </div>
                        <!-- Profile Link -->
                        <a href="{{ route('profile.edit') }}"
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="user" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Profile</span>
                        </a>
                        @endauth

                        {{-- Konten dropdown lainnya yang tampil terlepas dari status login --}}
                        <!-- Voucher -->
                        <div class="px-4 py-2">
                            <div class="flex items-center text-sm text-gray-800 dark:text-gray-200 mb-1">
                                <i data-lucide="ticket" class="w-5 h-5 mr-3 text-violet-500"></i>
                                <span class="font-medium">Voucher</span>
                            </div>
                            <div class="bg-blue-50 text-blue-800 px-3 py-2 rounded-md text-xs">
                                🎉 Ada voucher buat kamu
                            </div>
                        </div>
                        <!-- Gabung Ayome+ -->
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="badge-plus" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span class="flex items-center gap-1">
                                Gabung Ayome+ <span class="w-2 h-2 bg-red-500 rounded-full inline-block ml-1"></span>
                            </span>
                        </a>
                        <!-- Konten disimpan -->
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="bookmark" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Konten yang disimpan</span>
                        </a>
                        <!-- Konten disukai -->
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="thumbs-up" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Konten yang disukai</span>
                        </a>
                        <!-- Atur minat -->
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="sparkles" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Atur Minat</span>
                        </a>
                        <!-- Masukan -->
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="message-square-dashed" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Berikan Masukanmu</span>
                        </a>
                        @auth
                        {{-- Replaced the <a> tag with a form and button for POST logout --}}
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit" class="flex items-center w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                <i data-lucide="log-out" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>

{{--     <script src="{{ asset('js/app.js') }}"></script> --}}