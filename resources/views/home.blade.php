<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ayo Membaca</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:weight@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Russo+One&display=swap');
        .scrolled #navbar-inner {
            background-color: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            color: black;
        }
        .custom-poppins {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
        }
        .font-manrope {
            font-family: 'Manrope', sans-serif;
        }
        .dark .scrolled #navbar-inner {
            background-color: #1f2937;
            color: white;
        }
        .scrollbar-thin::-webkit-scrollbar {
            height: 6px;
        }
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        .scrollbar-thin::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        .bg-red-600:hover {
            background-color: #c53030;
        }
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        .animate-marquee {
            animation: marquee 15s linear infinite;
        }
        .animate-spin-slow {
            animation: spin 4s linear infinite;
        }
        .swiper-pagination-bullet {
            background: #ccc;
            opacity: 1;
            width: 10px;
            height: 10px;
            margin: 0 4px;
            border-radius: 9999px;
            transition: all 0.3s ease;
        }
        .swiper-pagination-bullet-active {
            background: #facc15;
            width: 30px;
            border-radius: 9999px;
        }
        .swiper-button-prev,
        .swiper-button-next {
            top: 50% !important;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            color: white;
            z-index: 10;
        }
        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 16px;
            color: white;
        }
        ::-webkit-scrollbar {
            width: 1px;
            background-color: transparent;
            height: 1px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #4B5563;
            border-radius: 4px;
        }
        .custom-scroll::-webkit-scrollbar {
            height: 1px;
            width: 1px;
        }
        .custom-scroll::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scroll::-webkit-scrollbar-thumb {
            background-color: #4B5563;
            border-radius: 4px;
        }
        .agenda-carousel {
            overflow-x: auto;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            padding-bottom: 10px;
        }
        .agenda-track {
            display: flex;
            gap: 16px;
            width: max-content;
        }
        .agenda-card {
            background-color: #1e1e2f;
            color: #fff;
            width: 220px;
            border-radius: 10px;
            overflow: hidden;
            scroll-snap-align: start;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease;
        }
        .agenda-card:hover {
            transform: scale(1.03);
        }
        .agenda-image {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }
        .agenda-content {
            padding: 12px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .agenda-category {
            color: #f0c000;
            font-size: 0.75rem;
            font-weight: bold;
        }
        .agenda-title {
            font-size: 0.9rem;
            font-weight: bold;
            line-height: 1.2rem;
        }
        .agenda-desc {
            font-size: 0.75rem;
            color: #ccc;
        }
        .agenda-info {
            font-size: 0.7rem;
            display: flex;
            justify-content: space-between;
            color: #aaa;
            margin-top: 3px;
        }
        .agenda-footer {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }
        .agenda-price {
            font-weight: bold;
            font-size: 0.85rem;
            color: #fbc02d;
        }
        .agenda-price.free {
            color: #00e676;
        }
        .agenda-button {
            background-color: #8e44ff;
            color: #fff;
            border: none;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.75rem;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100 text-black dark:bg-gray-900 dark:text-white">
    <nav id="navbar"
        class="fixed top-6 left-1/2 transform -translate-x-1/2 z-50 w-[90%] max-w-5xl transition-all duration-300 ease-in-out">
        <div id="navbar-inner"
            class="bg-transparent rounded-full px-6 py-3 flex justify-between items-center transition-all duration-300 ease-in-out">
            <!-- Logo -->
            <div class="text-blue-600 text-lg font-semibold">AYOME</div>
            <!-- Menu Links -->
            <div class="flex gap-6 items-center">
                <a href="#" class="hover:text-blue-600 font-semibold">Home</a>
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
                         focus:outline-none focus:ring-2 focus:ring-blue-500" />
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
                        <!-- Login -->
                        <div
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="log-in" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Login / Register</span>
                        </div>
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
                        <!-- Gabung Kompas+ -->
                        <div
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="badge-plus" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span class="flex items-center gap-1">
                                Gabung KOMPAS.com+ <span
                                    class="w-2 h-2 bg-red-500 rounded-full inline-block ml-1"></span>
                            </span>
                        </div>
                        <!-- Konten disimpan -->
                        <div
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="bookmark" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Konten yang disimpan</span>
                        </div>
                        <!-- Konten disukai -->
                        <div
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="thumbs-up" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Konten yang disukai</span>
                        </div>
                        <!-- Atur minat -->
                        <div
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="sparkles" class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Atur Minat</span>
                        </div>
                        <!-- Masukan -->
                        <div
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <i data-lucide="message-square-dashed"
                                class="w-5 h-5 mr-3 text-gray-600 dark:text-gray-300"></i>
                            <span>Berikan Masukanmu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <div class="h-32"></div>
    <section class="mt-1 px-4 md:px-6 lg:px-8 space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="relative rounded-xl overflow-hidden shadow-md transition w-full bg-cover bg-center h-64"
                        style="background-image: url('{{ asset('1.jpg') }}');">
                        <!-- HOT / TRENDING LABEL -->
                        <!-- Trending Badge - Professional Look -->
                        <div
                            class="absolute top-3 left-3 bg-white/20 backdrop-blur-md text-white text-xs font-medium px-2.5 py-1 rounded-md shadow-sm border border-white/30">
                            Trending
                        </div>
                        <!-- Gradient & Text -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex flex-col justify-end p-4">
                            <h3 class="text-lg font-bold text-white">Manfaat Membaca Setiap Hari</h3>
                            <p class="text-sm text-white/80 mt-1">Membaca bukan hanya hobi, tapi juga sumber
                                pengetahuan yang tak ada habisnya…</p>
                            <a href="#"
                                class="text-purple-400 mt-2 inline-block font-semibold hover:underline">Baca
                                Selengkapnya →</a>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden shadow-md h-64">
                        <div class="absolute inset-0 bg-cover bg-center"
                            style="background-image: url('{{ asset('1.jpg') }}');"></div>
                        <div
                            class="absolute top-3 left-3 bg-white/20 backdrop-blur-md text-white text-xs font-medium px-2.5 py-1 rounded-md shadow-sm border border-white/30">
                            Trending
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="relative z-10 p-4 h-full flex flex-col justify-end text-white">
                            <h3 class="text-lg font-bold">Manfaat Membaca Setiap Hari</h3>
                            <p class="text-sm mt-1">Membaca bukan hanya hobi, tapi juga sumber pengetahuan yang tak ada
                                habisnya...</p>
                            <a href="#"
                                class="text-purple-400 mt-3 inline-block font-medium hover:underline">Baca
                                Selengkapnya
                                →</a>
                        </div>
                    </div>
                    <!-- Artikel Tambahan -->
                    <div class="col-span-full">
                        <div class="flex flex-wrap gap-6 justify-between">
                            <!-- Artikel 1 -->
                            <div class="flex gap-4 w-[48%]">
                                <img src="{{ asset('1.jpg') }}" class="w-32 h-20 object-cover rounded-md" />
                                <div class="flex-1">
                                    <h3 class="font-semibold text-base text-black dark:text-white">Dua Advokat Diduga
                                        Biayai Demo dan Diskusi untuk Jatuhkan Kejagung</h3>
                                    <p class="text-sm text-red-600 font-semibold">NEWS <span
                                            class="text-gray-400 font-normal">• 28 menit lalu</span></p>
                                </div>
                            </div>
                            <!-- Artikel 2 -->
                            <div class="flex gap-4 w-[48%]">
                                <img src="{{ asset('1.jpg') }}" class="w-32 h-20 object-cover rounded-md" />
                                <div class="flex-1">
                                    <h3 class="font-semibold text-base text-black dark:text-white">Dalam 2 Pekan,
                                        Advokat Marcella Santoso 2 Kali Jadi Tersangka</h3>
                                    <p class="text-sm text-red-600 font-semibold">NEWS <span
                                            class="text-gray-400 font-normal">• 1 jam lalu</span></p>
                                </div>
                            </div>
                            <div class="flex gap-4 w-[48%]">
                                <img src="{{ asset('1.jpg') }}" class="w-32 h-20 object-cover rounded-md" />
                                <div class="flex-1">
                                    <h3 class="font-semibold text-base text-black dark:text-white">Dalam 2 Pekan,
                                        Advokat Marcella Santoso 2 Kali Jadi Tersangka</h3>
                                    <p class="text-sm text-red-600 font-semibold">NEWS <span
                                            class="text-gray-400 font-normal">• 1 jam lalu</span></p>
                                </div>
                            </div>
                            <div class="flex gap-4 w-[48%]">
                                <img src="{{ asset('1.jpg') }}" class="w-32 h-20 object-cover rounded-md" />
                                <div class="flex-1">
                                    <h3 class="font-semibold text-base text-black dark:text-white">Dalam 2 Pekan,
                                        Advokat Marcella Santoso 2 Kali Jadi Tersangka</h3>
                                    <p class="text-sm text-red-600 font-semibold">NEWS <span
                                            class="text-gray-400 font-normal">• 1 jam lalu</span></p>
                                </div>
                            </div>
                            <div class="flex gap-4 w-[48%]">
                                <img src="{{ asset('1.jpg') }}" class="w-32 h-20 object-cover rounded-md" />
                                <div class="flex-1">
                                    <h3 class="font-semibold text-base text-black dark:text-white">Dalam 2 Pekan,
                                        Advokat Marcella Santoso 2 Kali Jadi Tersangka</h3>
                                    <p class="text-sm text-red-600 font-semibold">NEWS <span
                                            class="text-gray-400 font-normal">• 1 jam lalu</span></p>
                                </div>
                            </div>
                            <div class="flex gap-4 w-[48%]">
                                <img src="{{ asset('1.jpg') }}" class="w-32 h-20 object-cover rounded-md" />
                                <div class="flex-1">
                                    <h3 class="font-semibold text-base text-black dark:text-white">Dalam 2 Pekan,
                                        Advokat Marcella Santoso 2 Kali Jadi Tersangka</h3>
                                    <p class="text-sm text-red-600 font-semibold">NEWS <span
                                            class="text-gray-400 font-normal">• 1 jam lalu</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4">
                <div class="space-y-3">
                    <h2 class="text-black dark:text-white text-2xl font-semibold flex items-center gap-2">
                        <span class="w-1 h-6 bg-purple-500 rounded-sm"></span>
                        Berita Terbaru
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-2">
                        <div class="relative rounded-lg overflow-hidden shadow hover:shadow-lg transition h-44">
                            <img src="{{ asset('2.jpg') }}" alt="Thumb" class="object-cover w-full h-full">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent text-white p-2">
                                <p class="text-[10px] font-bold text-red-400">REGIONAL</p>
                                <h4 class="text-xs font-semibold leading-tight">Buka Posko Penahanan Ijazah...</h4>
                            </div>
                        </div>
                        <div class="relative rounded-lg overflow-hidden shadow hover:shadow-lg transition h-44">
                            <img src="{{ asset('2.jpg') }}" alt="Thumb" class="object-cover w-full h-full">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent text-white p-2">
                                <p class="text-[10px] font-bold text-orange-400">TREN</p>
                                <h4 class="text-xs font-semibold leading-tight">Polemik Larangan Study Tour</h4>
                            </div>
                        </div>
                        <div class="relative rounded-lg overflow-hidden shadow hover:shadow-lg transition h-44">
                            <img src="{{ asset('2.jpg') }}" alt="Thumb" class="object-cover w-full h-full">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent text-white p-2">
                                <p class="text-[10px] font-bold text-red-400">REGIONAL</p>
                                <h4 class="text-xs font-semibold leading-tight">Akhir April, Gubernur Khofifah...</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="bg-gradient-to-r from-red-600 to-red-500 text-white shadow-md font-sans overflow-hidden relative py-3 px-4">
            <div class="flex items-center gap-3">
                <span class="bg-yellow-300 text-black font-semibold text-xs px-2 py-1 rounded">LIVE</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 animate-spin-slow"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4v2m0 12v2m8-8h2M4 12H2m15.364-6.364l1.414 1.414M6.222 17.778l-1.414 1.414M18.364 17.778l1.414-1.414M6.222 6.222L4.808 7.636" />
                </svg>
                <!-- Marquee Container -->
                <div class="overflow-hidden whitespace-nowrap w-full relative">
                    <div class="animate-marquee inline-block min-w-full">
                        <span class="font-bold">Breaking News:</span> Pemerintah resmi larang study tour di akhir
                        semester ini | Update terbaru jam 10:00 WIB —
                        <a href="#" class="underline ml-2">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6">
            <h2 class="dark:text-white text-black text-xl font-semibold flex items-center gap-2 mb-3">
                <span class="w-1 h-6 bg-blue-500 rounded-sm"></span>
                Video Pilihan
            </h2>
            <!-- Swiper Container -->
            <div class="swiper myVideoSwiper relative pb-10">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black aspect-video">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/pKhBFiUSZzY"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="mt-2 text-black dark:text-white text-sm font-semibold">Setiap Bahasa Pemrograman
                            Gunakan Ini!</div>
                        <div class="text-gray-400 text-xs">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black aspect-video">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/pKhBFiUSZzY"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="mt-2 text-black dark:text-white text-sm font-semibold">Setiap Bahasa
                            Pemrograman Gunakan Ini!</div>
                        <div class="text-gray-400 text-xs">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black aspect-video">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/pKhBFiUSZzY"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="mt-2 text-black dark:text-white text-sm font-semibold">Setiap Bahasa
                            Pemrograman Gunakan Ini!</div>
                        <div class="text-gray-400 text-xs">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black aspect-video">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/pKhBFiUSZzY"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="mt-2 text-black dark:text-white text-sm font-semibold">Setiap Bahasa
                            Pemrograman Gunakan Ini!</div>
                        <div class="text-gray-400 text-xs">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black aspect-video">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/pKhBFiUSZzY"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="mt-2 text-black dark:text-white text-sm font-semibold">Setiap Bahasa
                            Pemrograman Gunakan Ini!</div>
                        <div class="text-gray-400 text-xs">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black aspect-video">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/pKhBFiUSZzY"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="mt-2 text-black dark:text-white text-sm font-semibold">Setiap Bahasa
                            Pemrograman Gunakan Ini!</div>
                        <div class="text-gray-400 text-xs">Deskripsi singkat video di sini</div>
                    </div>
                    <!-- Tambahkan slide sesuai kebutuhan -->
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination absolute bottom-0 left-0 right-0 flex justify-center z-10"></div>
                <!-- Navigation Buttons -->
                <div
                    class="swiper-button-prev !top-1/2 !-translate-y-1/2 !w-8 !h-8 !bg-black/60 !rounded-full !flex !items-center !justify-center">
                </div>
                <div
                    class="swiper-button-next !top-1/2 !-translate-y-1/2 !w-8 !h-8 !bg-black/60 !rounded-full !flex !items-center !justify-center">
                </div>
            </div>
        </div>
        <div class="mt-6">
            <h2 class="text-black text-xl font-semibold flex items-center gap-2 mb-3 dark:text-white">
                <span class="blink-bar w-1 h-6 bg-red-500 rounded-sm"></span>
                Topik Terpopuler Hari Ini
            </h2>
            <div class="flex gap-4 overflow-x-auto scrollbar-thin pb-2">
                <div class="flex gap-4 overflow-x-auto scrollbar-thin pb-2 custom-scroll">
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #AI</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #Pemilu2025</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #GadgetBaru</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #Teknologi</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #Crypto</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #ChatGPT</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #AI</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #Pemilu2025</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #GadgetBaru</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #Teknologi</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #Crypto</div>
                    <div
                        class="bg-gray-300 px-4 py-2 rounded-full text-black whitespace-nowrap hover:bg-blue-300 transition-colors cursor-pointer dark:bg-gray-800 dark:text-white dark:hover:bg-blue-500">
                        #ChatGPT</div>
                </div>
            </div>
        </div>
        </div>
        <div class="mt-6">
            <h2 class="text-black text-xl font-semibold flex items-center gap-2 mb-3 dark:text-white">
                <span class="blink-bar w-1 h-6 bg-blue-500 rounded-sm"></span>
                Artikel Pilihan
            </h2>
            <!-- Swiper Container -->
            <div class="swiper myVideoSwiper relative pb-10">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black">
                            <img src="{{ asset('1.jpg') }}" class="w-full h-full object-cover" alt="">
                        </div>
                        <div class="mt-2 text-black text-sm font-semibold dark:text-white">Setiap Bahasa Pemrograman
                            Gunakan Ini!</div>
                        <div class="text-gray-800 text-xs dark:text-gray-400">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black">
                            <img src="{{ asset('1.jpg') }}" class="w-full h-full object-cover" alt="">
                        </div>
                        <div class="mt-2 text-black text-sm font-semibold dark:text-white">Setiap Bahasa Pemrograman
                            Gunakan Ini!</div>
                        <div class="text-gray-800 text-xs dark:text-gray-400">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black">
                            <img src="{{ asset('1.jpg') }}" class="w-full h-full object-cover" alt="">
                        </div>
                        <div class="mt-2 text-black text-sm font-semibold dark:text-white">Setiap Bahasa Pemrograman
                            Gunakan Ini!</div>
                        <div class="text-gray-800 text-xs dark:text-gray-400">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black">
                            <img src="{{ asset('1.jpg') }}" class="w-full h-full object-cover" alt="">
                        </div>
                        <div class="mt-2 text-black text-sm font-semibold dark:text-white">Setiap Bahasa Pemrograman
                            Gunakan Ini!</div>
                        <div class="text-gray-800 text-xs dark:text-gray-400">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black">
                            <img src="{{ asset('1.jpg') }}" class="w-full h-full object-cover" alt="">
                        </div>
                        <div class="mt-2 text-black text-sm font-semibold dark:text-white">Setiap Bahasa Pemrograman
                            Gunakan Ini!</div>
                        <div class="text-gray-800 text-xs dark:text-gray-400">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black">
                            <img src="{{ asset('1.jpg') }}" class="w-full h-full object-cover" alt="">
                        </div>
                        <div class="mt-2 text-black text-sm font-semibold dark:text-white">Setiap Bahasa Pemrograman
                            Gunakan Ini!</div>
                        <div class="text-gray-800 text-xs dark:text-gray-400">Deskripsi singkat video di sini</div>
                    </div>
                    <div class="swiper-slide w-72">
                        <div class="rounded-xl overflow-hidden shadow-md bg-black">
                            <img src="{{ asset('1.jpg') }}" class="w-full h-full object-cover" alt="">
                        </div>
                        <div class="mt-2 text-black text-sm font-semibold dark:text-white">Setiap Bahasa Pemrograman
                            Gunakan Ini!</div>
                        <div class="text-gray-800 text-xs dark:text-gray-400">Deskripsi singkat video di sini</div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination absolute bottom-0 left-0 right-0 flex justify-center z-10"></div>
                <!-- Navigation Buttons -->
                <div
                    class="swiper-button-prev !top-1/2 !-translate-y-1/2 !w-8 !h-8 !bg-black/60 !rounded-full !flex !items-center !justify-center">
                </div>
                <div
                    class="swiper-button-next !top-1/2 !-translate-y-1/2 !w-8 !h-8 !bg-black/60 !rounded-full !flex !items-center !justify-center">
                </div>
            </div>
        </div>
        <div class="mt-3 grid md:grid-cols-3 gap-6">
            <!-- KIRI: Daftar Artikel -->
            <div class="md:col-span-2 space-y-4">
                <h2 class="text-black dark:text-white text-2xl font-semibold mb-4 flex items-center gap-2">
                    <span class="w-1 h-6 bg-blue-400 rounded-sm"></span>
                    Berita Lainnya
                </h2>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-black dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-900 rounded-lg p-5 sticky top-24 h-fit">
                <h3 class="text-gray-900 dark:text-white text-lg font-bold mb-4">💬 Komentar Terbaru</h3>
                <!-- Komentar 1 -->
                <div class="flex items-start gap-3 mb-5 border-b border-gray-200 dark:border-gray-700 pb-4">
                    <div
                        class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                        R</div>
                    <div>
                        <p class="text-sm text-gray-800 dark:text-gray-200 mb-1 italic">"Artikel tentang AI itu sangat membuka mata!"</p>
                        <span class="text-xs text-gray-500 dark:text-gray-400">– <strong>Rina</strong>, 2 jam lalu</span>
                    </div>
                </div>
                <div class="flex items-start gap-3 mb-5 border-b border-gray-200 dark:border-gray-700 pb-4">
                    <div
                        class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                        R</div>
                    <div>
                        <p class="text-sm text-gray-800 dark:text-gray-200 mb-1 italic">"Artikel tentang AI itu sangat membuka mata!"</p>
                        <span class="text-xs text-gray-500 dark:text-gray-400">– <strong>Rina</strong>, 2 jam lalu</span>
                    </div>
                </div>
                <div class="flex items-start gap-3 mb-5 border-b border-gray-200 dark:border-gray-700 pb-4">
                    <div
                        class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                        R</div>
                    <div>
                        <p class="text-sm text-gray-800 dark:text-gray-200 mb-1 italic">"Artikel tentang AI itu sangat membuka mata!"</p>
                        <span class="text-xs text-gray-500 dark:text-gray-400">– <strong>Rina</strong>, 2 jam lalu</span>
                    </div>
                </div>
                <!-- Komentar 2 -->
                <div class="flex items-start gap-3 mb-5 border-b border-gray-200 dark:border-gray-700 pb-4">
                    <div
                        class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                        F</div>
                    <div>
                        <p class="text-sm text-gray-800 dark:text-gray-200 mb-1 italic">"Gue baru tahu kalau laptop BUMN butuh spek segitu!"</p>
                        <span class="text-xs text-gray-500 dark:text-gray-400">– <strong>Fadli</strong>, 1 jam lalu</span>
                    </div>
                </div>
                <!-- Komentar 3 -->
                <div class="flex items-start gap-3 mb-5 border-b border-gray-200 dark:border-gray-700 pb-4">
                    <div
                        class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                        L</div>
                    <div>
                        <p class="text-sm text-gray-800 dark:text-gray-200 mb-1 italic">"Film Paus Fransiskus recommended banget!"</p>
                        <span class="text-xs text-gray-500 dark:text-gray-400">– <strong>Lala</strong>, 10 menit lalu</span>
                    </div>
                </div>
                <!-- Link -->
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm hover:underline inline-block mt-2">Lihat semua komentar →</a>
            </div>
        </div>
        <div class="agenda-section mt-6">
            <h2 class="text-black dark:text-white text-2xl font-semibold mb-4 flex items-center gap-2">
                <span class="w-1 h-6 bg-blue-400 rounded-sm"></span>
                📅 Agenda Terdekat
            </h2>
            <div class="agenda-carousel">
                <div class="agenda-track">
                    <!-- Card 1 -->
                    <div class="agenda-card bg-white dark:bg-[#1e1e2f] text-gray-900 dark:text-white">
                        <img src="{{ asset('1.jpg') }}" alt="Agenda 1" class="agenda-image" />
                        <div class="agenda-content">
                            <p class="agenda-category text-blue-600 dark:text-yellow-400">Webinar</p>
                            <h3 class="agenda-title text-gray-900 dark:text-white">Webinar AI & Masa Depan Manusia</h3>
                            <p class="agenda-desc text-gray-700 dark:text-gray-300">Bahas potensi AI dalam kehidupan manusia di masa depan bersama pakar AI.</p>
                            <div class="agenda-info text-gray-600 dark:text-gray-300">
                                <span>📅 28 April</span>
                                <span>🌐 Online</span>
                            </div>
                            <div class="agenda-footer">
                                <span class="agenda-price free text-green-600 dark:text-[#00e676]">Gratis</span>
                                <button class="agenda-button">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="agenda-card bg-white dark:bg-[#1e1e2f] text-gray-900 dark:text-white">
                        <img src="{{ asset('1.jpg') }}" alt="Agenda 2" class="agenda-image" />
                        <div class="agenda-content">
                            <p class="agenda-category text-yellow-700 dark:text-yellow-400">Bedah Buku</p>
                            <h3 class="agenda-title text-gray-900 dark:text-white">Bedah Buku "Spiritual dan Teknologi"</h3>
                            <p class="agenda-desc text-gray-700 dark:text-gray-300">Diskusi mendalam seputar hubungan antara spiritualitas dan teknologi modern.</p>
                            <div class="agenda-info text-gray-600 dark:text-gray-300">
                                <span>📅 1 Mei</span>
                                <span>📍 Jakarta</span>
                            </div>
                            <div class="agenda-footer">
                                <span class="agenda-price text-yellow-700 dark:text-[#fbc02d]">Rp50.000</span>
                                <button class="agenda-button">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                    <div class="agenda-card bg-white dark:bg-[#1e1e2f] text-gray-900 dark:text-white">
                        <img src="{{ asset('1.jpg') }}" alt="Agenda 1" class="agenda-image" />
                        <div class="agenda-content">
                            <p class="agenda-category text-blue-600 dark:text-yellow-400">Webinar</p>
                            <h3 class="agenda-title text-gray-900 dark:text-white">Webinar AI & Masa Depan Manusia</h3>
                            <p class="agenda-desc text-gray-700 dark:text-gray-300">Bahas potensi AI dalam kehidupan manusia di masa depan bersama pakar AI.</p>
                            <div class="agenda-info text-gray-600 dark:text-gray-300">
                                <span>📅 28 April</span>
                                <span>🌐 Online</span>
                            </div>
                            <div class="agenda-footer">
                                <span class="agenda-price free text-green-600 dark:text-[#00e676]">Gratis</span>
                                <button class="agenda-button">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="agenda-card bg-white dark:bg-[#1e1e2f] text-gray-900 dark:text-white">
                        <img src="{{ asset('1.jpg') }}" alt="Agenda 2" class="agenda-image" />
                        <div class="agenda-content">
                            <p class="agenda-category text-yellow-700 dark:text-yellow-400">Bedah Buku</p>
                            <h3 class="agenda-title text-gray-900 dark:text-white">Bedah Buku "Spiritual dan Teknologi"</h3>
                            <p class="agenda-desc text-gray-700 dark:text-gray-300">Diskusi mendalam seputar hubungan antara spiritualitas dan teknologi modern.</p>
                            <div class="agenda-info text-gray-600 dark:text-gray-300">
                                <span>📅 1 Mei</span>
                                <span>📍 Jakarta</span>
                            </div>
                            <div class="agenda-footer">
                                <span class="agenda-price text-yellow-700 dark:text-[#fbc02d]">Rp50.000</span>
                                <button class="agenda-button">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                    <div class="agenda-card bg-white dark:bg-[#1e1e2f] text-gray-900 dark:text-white">
                        <img src="{{ asset('1.jpg') }}" alt="Agenda 1" class="agenda-image" />
                        <div class="agenda-content">
                            <p class="agenda-category text-blue-600 dark:text-yellow-400">Webinar</p>
                            <h3 class="agenda-title text-gray-900 dark:text-white">Webinar AI & Masa Depan Manusia</h3>
                            <p class="agenda-desc text-gray-700 dark:text-gray-300">Bahas potensi AI dalam kehidupan manusia di masa depan bersama pakar AI.</p>
                            <div class="agenda-info text-gray-600 dark:text-gray-300">
                                <span>📅 28 April</span>
                                <span>🌐 Online</span>
                            </div>
                            <div class="agenda-footer">
                                <span class="agenda-price free text-green-600 dark:text-[#00e676]">Gratis</span>
                                <button class="agenda-button">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="agenda-card bg-white dark:bg-[#1e1e2f] text-gray-900 dark:text-white">
                        <img src="{{ asset('1.jpg') }}" alt="Agenda 2" class="agenda-image" />
                        <div class="agenda-content">
                            <p class="agenda-category">Bedah Buku</p>
                            <h3 class="agenda-title">Bedah Buku "Spiritual dan Teknologi"</h3>
                            <p class="agenda-desc">Diskusi mendalam seputar hubungan antara spiritualitas dan teknologi
                                modern.</p>
                            <div class="agenda-info">
                                <span>📅 1 Mei</span>
                                <span>📍 Jakarta</span>
                            </div>
                            <div class="agenda-footer">
                                <span class="agenda-price">Rp50.000</span>
                                <button class="agenda-button">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Apa Kata Mereka?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Testimoni 1 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User 1"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-semibold">Ayu Lestari</h4>
                                <p class="text-gray-400 text-sm">Peserta Webinar</p>
                            </div>
                        </div>
                        <p class="dark:text-gray-300 text-black dark:text-white text-sm">"Webinar ini sangat informatif! Pematerinya keren dan membuka
                            wawasan saya tentang masa depan AI."</p>
                    </div>
                    <!-- Testimoni 2 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User 2"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-semibold">Budi Santoso</h4>
                                <p class="text-gray-400 text-sm">Pembaca Setia</p>
                            </div>
                        </div>
                        <p class="dark:text-gray-300 text-black dark:text-white text-sm">"Artikel-artikel di platform ini sangat mendalam dan relevan
                            dengan kebutuhan dunia teknologi saat ini."</p>
                    </div>
                    <!-- Testimoni 3 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User 3"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-semibold">Citra Dewi</h4>
                                <p class="text-gray-400 text-sm">Peserta Bedah Buku</p>
                            </div>
                        </div>
                        <p class="dark:text-gray-300 text-black dark:text-white text-sm">"Diskusi bedah buku sangat menarik! Saya jadi lebih memahami
                            hubungan teknologi dengan spiritualitas."</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User 3"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-semibold">Citra Dewi</h4>
                                <p class="text-gray-400 text-sm">Peserta Bedah Buku</p>
                            </div>
                        </div>
                        <p class="dark:text-gray-300 text-black dark:text-white text-sm">"Diskusi bedah buku sangat menarik! Saya jadi lebih memahami
                            hubungan teknologi dengan spiritualitas."</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User 3"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-semibold">Citra Dewi</h4>
                                <p class="text-gray-400 text-sm">Peserta Bedah Buku</p>
                            </div>
                        </div>
                        <p class="dark:text-gray-300 text-black dark:text-white text-sm">"Diskusi bedah buku sangat menarik! Saya jadi lebih memahami
                            hubungan teknologi dengan spiritualitas."</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User 3"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-semibold">Citra Dewi</h4>
                                <p class="text-gray-400 text-sm">Peserta Bedah Buku</p>
                            </div>
                        </div>
                        <p class="dark:text-gray-300 text-black dark:text-white text-sm">"Diskusi bedah buku sangat menarik! Saya jadi lebih memahami
                            hubungan teknologi dengan spiritualitas."</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 grid md:grid-cols-3 gap-6">
            <!-- KIRI: Daftar Artikel -->
            <div class="md:col-span-2 space-y-4">
                <h2 class="text-black dark:text-white text-2xl font-semibold mb-4 flex items-center gap-2">
                    <span class="w-1 h-6 bg-blue-400 rounded-sm"></span>
                    Berita Lainnya
                </h2>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg p-5 mt-8">
                    <h3 class="text-gray-900 dark:text-white text-lg font-bold mb-2">🚀 AYOME Lite</h3>
                    <p class="text-gray-100 text-sm mb-4">
                        Nikmati pengalaman membaca lebih cepat dan ringan dengan AYOME Lite. Cocok untuk koneksi lambat!
                    </p>
                    <a href="#"
                        class="inline-block bg-white text-blue-600 font-semibold text-sm py-2 px-4 rounded hover:bg-gray-100 transition">
                        Coba Sekarang →
                    </a>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
                <div class="flex gap-4 border-b border-gray-600 pb-4">
                    <img src="{{ asset('1.jpg') }}" alt="thumb" class="w-28 h-20 object-cover rounded-md">
                    <div>
                        <span class="text-yellow-400 font-semibold text-sm uppercase">Tech & Edu</span>
                        <h3 class="text-gray-900 dark:text-white font-medium text-base leading-snug hover:underline cursor-pointer">
                            Pesan Paus Fransiskus Mengenai Ancaman AI Terhadap Kehidupan Manusia
                        </h3>
                    </div>
                </div>
            </div>
            <!-- KANAN: FAQ -->
            <div class="bg-white dark:bg-gray-800 rounded-lg p-5 sticky top-24 h-fit">
                <h3 class="text-gray-900 dark:text-white text-lg font-bold mb-4">❓ FAQ</h3>
                <!-- FAQ 1 -->
                <div class="mb-5 border-b border-gray-700 pb-4">
                    <h4 class="text-blue-400 font-semibold mb-2">Apa itu Artificial Intelligence?</h4>
                    <p class="text-sm text-gray-900 dark:text-white">
                        Artificial Intelligence (AI) adalah teknologi yang memungkinkan mesin untuk meniru kecerdasan
                        manusia.
                    </p>
                </div>
                <!-- FAQ 2 -->
                <div class="mb-5 border-b border-gray-700 pb-4">
                    <h4 class="text-blue-400 font-semibold mb-2">Apa dampak AI terhadap pekerjaan manusia?</h4>
                    <p class="text-sm text-gray-900 dark:text-white">
                        AI dapat menggantikan beberapa jenis pekerjaan, namun juga membuka banyak peluang baru di bidang
                        teknologi.
                    </p>
                </div>
                <!-- FAQ 3 -->
                <div class="mb-5 border-b border-gray-700 pb-4">
                    <h4 class="text-blue-400 font-semibold mb-2">Bagaimana cara mempelajari AI?</h4>
                    <p class="text-sm text-gray-900 dark:text-white">
                        Kamu bisa mulai dengan belajar dasar-dasar matematika, algoritma, dan mengikuti kursus online
                        tentang AI dan Machine Learning.
                    </p>
                </div>
                <!-- FAQ 4 -->
                <div class="mb-5">
                    <h4 class="text-blue-400 font-semibold mb-2">Apakah AI berbahaya?</h4>
                    <p class="text-sm text-gray-900 dark:text-white">
                        Jika tidak diatur dengan baik, AI bisa membawa risiko. Namun dengan regulasi dan pengembangan
                        etis, manfaatnya sangat besar.
                    </p>
                </div>
                <!-- Link -->
                <a href="#" class="text-blue-400 text-sm hover:underline inline-block mt-2">Lihat semua FAQ
                    →</a>
                <!-- AYOME Lite Section -->
                <!-- CTA -->
                <div class="mt-6 p-4 bg-blue-600 rounded-lg text-center">
                    <h4 class="text-white text-lg font-bold mb-2">Masih ada pertanyaan?</h4>
                    <p class="text-white text-sm mb-4">Jangan ragu untuk menghubungi tim kami. Kami siap membantu!</p>
                    <a href="#"
                        class="bg-white text-blue-600 font-semibold py-2 px-4 rounded hover:bg-gray-100 transition">
                        Hubungi Kami →
                    </a>
                </div>
            </div>
        </div>
        <!-- Film & Series Trending -->
        <div class="mt-10">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                📚 Film & Series Trending
            </h2>
            <!-- Tabs -->
            <div class="flex flex-wrap gap-4 mb-6">
                <button
                    class="dark:bg-blue-600 bg-gray-700 text-white py-2 px-4 rounded hover:bg-blue-700 transition">Indonesia</button>
                <button
                    class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Internasional</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Korea</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Jepang</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Thailand</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">China</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">India</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Korea</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Jepang</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Thailand</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">China</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">India</button>
                <button class="dark:bg-gray-700 bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Korea</button>
            </div>
            <!-- Main Content: 2 Columns -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Kiri: Film / Series List -->
                <!-- Card Film 1 -->
                <div class="md:col-span-2 grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- Card Film 1 -->
                    <div class="relative bg-gray-800 rounded-lg overflow-hidden group w-full h-40">
                        <img src="{{ asset('1.jpg') }}" alt="Judul Film"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-x-0 bottom-0 p-2 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            <h3 class="text-white font-semibold text-xs">Judul Film/Series</h3>
                            <p class="text-gray-300 text-[10px]">Netflix • 8.7/10</p>
                        </div>
                    </div>
                    <div class="relative bg-gray-800 rounded-lg overflow-hidden group w-full h-40">
                        <img src="{{ asset('1.jpg') }}" alt="Judul Film"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-x-0 bottom-0 p-2 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            <h3 class="text-white font-semibold text-xs">Judul Film/Series</h3>
                            <p class="text-gray-300 text-[10px]">Netflix • 8.7/10</p>
                        </div>
                    </div>
                    <div class="relative bg-gray-800 rounded-lg overflow-hidden group w-full h-40">
                        <img src="{{ asset('1.jpg') }}" alt="Judul Film"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-x-0 bottom-0 p-2 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            <h3 class="text-white font-semibold text-xs">Judul Film/Series</h3>
                            <p class="text-gray-300 text-[10px]">Netflix • 8.7/10</p>
                        </div>
                    </div>
                    <div class="relative bg-gray-800 rounded-lg overflow-hidden group w-full h-40">
                        <img src="{{ asset('1.jpg') }}" alt="Judul Film"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-x-0 bottom-0 p-2 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            <h3 class="text-white font-semibold text-xs">Judul Film/Series</h3>
                            <p class="text-gray-300 text-[10px]">Netflix • 8.7/10</p>
                        </div>
                    </div>
                    <div class="relative bg-gray-800 rounded-lg overflow-hidden group w-full h-40">
                        <img src="{{ asset('1.jpg') }}" alt="Judul Film"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-x-0 bottom-0 p-2 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            <h3 class="text-white font-semibold text-xs">Judul Film/Series</h3>
                            <p class="text-gray-300 text-[10px]">Netflix • 8.7/10</p>
                        </div>
                    </div>
                    <div class="relative bg-gray-800 rounded-lg overflow-hidden group w-full h-40">
                        <img src="{{ asset('1.jpg') }}" alt="Judul Film"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-x-0 bottom-0 p-2 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            <h3 class="text-white font-semibold text-xs">Judul Film/Series</h3>
                            <p class="text-gray-300 text-[10px]">Netflix • 8.7/10</p>
                        </div>
                    </div>
                    <div class="relative bg-gray-800 rounded-lg overflow-hidden group w-full h-40">
                        <img src="{{ asset('1.jpg') }}" alt="Judul Film"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-x-0 bottom-0 p-2 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            <h3 class="text-white font-semibold text-xs">Judul Film/Series</h3>
                            <p class="text-gray-300 text-[10px]">Netflix • 8.7/10</p>
                        </div>
                    </div>
                    <div class="relative bg-gray-800 rounded-lg overflow-hidden group w-full h-40">
                        <img src="{{ asset('1.jpg') }}" alt="Judul Film"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-x-0 bottom-0 p-2 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            <h3 class="text-white font-semibold text-xs">Judul Film/Series</h3>
                            <p class="text-gray-300 text-[10px]">Netflix • 8.7/10</p>
                        </div>
                    </div>
                    <!-- Tambah Card Film lainnya -->
                </div>
                <!-- Kanan: Fakta Berita -->
                <div class="dark:bg-gray-800 bg-white p-4 rounded-lg">
                    <h3 class="text-lg text-gray-900 dark:text-white font-semibold mb-4">📰 Fakta Menarik</h3>
                    <!-- Berita -->
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-gray-900 dark:text-white font-bold text-sm">Rahasia Syuting Film X</h4>
                            <p class="text-gray-400 dark:text-white text-xs">Proses syuting yang memakan waktu 2 tahun...</p>
                        </div>
                        <div>
                            <h4 class="text-gray-900 dark:text-white font-bold text-sm">Easter Egg yang Terlewat</h4>
                            <p class="text-gray-400 dark:text-white text-xs">Ada adegan tersembunyi yang jarang disadari penonton...
                            </p>
                        </div>
                        <div>
                            <h4 class="text-gray-900 dark:text-white font-bold text-sm">Film Y Terinspirasi dari Kisah Nyata</h4>
                            <p class="text-gray-400 dark:text-white text-xs">Cerita asli yang mengharukan di balik layar...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-gradient-to-b from-gray-100 to-white dark:bg-gradient-to-b dark:from-gray-900 dark:to-black text-gray-900 dark:text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Logo dan Deskripsi -->
                <div>
                    <img src="/logo-ayo-membaca.png" alt="Ayo Membaca" class="h-10 mb-4">
                    <h3 class="text-gray-900 dark:text-white text-xl font-bold mb-4">Ayo Membaca</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">
                        Platform berita terpercaya yang menyediakan informasi terkini dan terpercaya untuk Anda.
                    </p>
                    <p class="text-gray-400 text-xs">&copy; <span id="year"></span> Ayo Membaca. All rights reserved.</p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h4 class="text-gray-900 dark:text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="text-gray-800 dark:text-yellow-400 hover:text-blue-600 transition-colors duration-300">Home</a></li>
                        <li><a href="#" class="text-gray-800 dark:text-yellow-400 hover:text-blue-600 transition-colors duration-300">Kategori</a></li>
                        <li><a href="#" class="text-gray-800 dark:text-yellow-400 hover:text-blue-600 transition-colors duration-300">Trending</a></li>
                        <li><a href="#" class="text-gray-800 dark:text-yellow-400 hover:text-blue-600 transition-colors duration-300">Berlangganan</a></li>
                        <li><a href="#" class="text-gray-800 dark:text-yellow-400 hover:text-blue-600 transition-colors duration-300">Kontak</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div>
                    <h4 class="text-gray-900 dark:text-white font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-sm">
                        <li>Email: <a href="mailto:info@ayomembaca.com" class="text-gray-800 dark:text-yellow-400 hover:text-blue-600 transition-colors duration-300">info@ayomembaca.com</a></li>
                        <li>Phone: <a href="tel:+62123456789" class="text-gray-800 dark:text-yellow-400 hover:text-blue-600 transition-colors duration-300">+62 123 456 789</a></li>
                        <li>Address: Jl. Merdeka No. 123, Jakarta, Indonesia</li>
                    </ul>
                </div>
                <!-- Newsletter -->
                <div>
                    <h4 class="text-gray-900 dark:text-white font-semibold mb-4">Subscribe</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Dapatkan berita terbaru langsung ke email Anda.</p>
                    <form class="flex">
                        <input type="email" placeholder="Email Anda" class="w-full p-2 rounded-l bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-black p-2 rounded-r transition-colors duration-300">Kirim</button>
                    </form>
                    <div class="flex space-x-4 mt-6">
                        <!-- Social icons -->
                        <a href="#" aria-label="Facebook" class="text-gray-600 dark:text-yellow-400 hover:text-blue-600 transition">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M22 12a10 10 0 10-11.5 9.87v-6.99h-2.1v-2.88h2.1v-2.2c0-2.07 1.23-3.22 3.12-3.22.9 0 1.84.16 1.84.16v2.02h-1.04c-1.03 0-1.35.64-1.35 1.3v1.94h2.3l-.37 2.88h-1.93v6.99A10 10 0 0022 12z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Twitter" class="text-gray-600 dark:text-yellow-400 hover:text-blue-600 transition">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14.86 4.48 4.48 0 001.98-2.48 9.14 9.14 0 01-2.88 1.1 4.52 4.52 0 00-7.7 4.12A12.84 12.84 0 013 4.15a4.52 4.52 0 001.4 6.04 4.48 4.48 0 01-2.05-.57v.06a4.52 4.52 0 003.63 4.43 4.52 4.52 0 01-2.04.08 4.52 4.52 0 004.22 3.14A9.05 9.05 0 012 19.54a12.8 12.8 0 006.92 2.03c8.3 0 12.85-6.88 12.85-12.85 0-.2 0-.42-.02-.63A9.22 9.22 0 0023 3z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram" class="text-gray-600 dark:text-yellow-400 hover:text-blue-600 transition">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 2A3.75 3.75 0 004 7.75v8.5A3.75 3.75 0 007.75 20h8.5a3.75 3.75 0 003.75-3.75v-8.5A3.75 3.75 0 0016.25 4h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 2a3 3 0 100 6 3 3 0 000-6zm4.5-3a1 1 0 110 2 1 1 0 010-2z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="text-gray-600 dark:text-yellow-400 hover:text-blue-600 transition">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M4.98 3.5a2.5 2.5 0 11.02 5 2.5 2.5 0 01-.02-5zM3 8.75h4v12h-4v-12zm7.5 0h3.75v1.64h.05a4.12 4.12 0 013.7-2.03c3.96 0 4.7 2.6 4.7 5.98v6.41h-4v-5.68c0-1.36-.03-3.11-1.9-3.11-1.9 0-2.2 1.49-2.2 3.02v5.77h-4v-12z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Dynamic year script -->
            <script>
                document.getElementById("year").textContent = new Date().getFullYear();
            </script>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const html = document.documentElement;
            const themeDropdown = document.getElementById("themeDropdown");
            const toggleDark = document.getElementById("toggleDark");
            function setThemeIcon(iconName) {
                const oldIcon = document.getElementById("themeIcon");
                if (oldIcon) {
                    oldIcon.setAttribute("data-lucide", iconName);
                    lucide.createIcons();
                }
            }
            function setTheme(mode) {
                if (mode === 'dark') {
                    html.classList.add('dark');
                    localStorage.theme = 'dark';
                    setThemeIcon('moon');
                } else if (mode === 'light') {
                    html.classList.remove('dark');
                    localStorage.theme = 'light';
                    setThemeIcon('sun');
                } else {
                    localStorage.removeItem('theme');
                    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                        html.classList.add('dark');
                    } else {
                        html.classList.remove('dark');
                    }
                    setThemeIcon('monitor');
                }
                themeDropdown.classList.add('hidden');
            }
            toggleDark.addEventListener('click', (e) => {
                e.stopPropagation();
                themeDropdown.classList.toggle("hidden");
            });
            window.addEventListener('click', (e) => {
                if (!themeDropdown.contains(e.target) && !toggleDark.contains(e.target)) {
                    themeDropdown.classList.add('hidden');
                }
            });
            window.addEventListener('scroll', () => {
                themeDropdown.classList.add('hidden');
                const navbar = document.getElementById('navbar');
                const navbarInner = document.getElementById('navbar-inner');
                const userDropdown = document.getElementById('userDropdown');
                const isDarkMode = html.classList.contains('dark');
                if (navbar && navbarInner) {
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                        navbarInner.classList.add(isDarkMode ? 'bg-gray-800' : 'bg-white');
                        navbarInner.classList.remove(isDarkMode ? 'bg-white' : 'bg-gray-800');
                    } else {
                        navbar.classList.remove('scrolled');
                        navbarInner.classList.remove('bg-gray-800', 'bg-white');
                    }
                }
                if (userDropdown && !userDropdown.classList.contains("hidden")) {
                    userDropdown.classList.add("hidden");
                }
            });
            const storedTheme = localStorage.theme;
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (storedTheme === 'dark') {
                html.classList.add('dark');
                setThemeIcon('moon');
            } else if (storedTheme === 'light') {
                html.classList.remove('dark');
                setThemeIcon('sun');
            } else {
                if (prefersDark) {
                    html.classList.add('dark');
                } else {
                    html.classList.remove('dark');
                }
                setThemeIcon('monitor');
            }
            lucide.createIcons();
            window.setTheme = setTheme;
            // Tambahkan ini biar toggle profil jalan
            window.toggleMenu = function() {
                const userDropdown = document.getElementById("userDropdown");
                if (userDropdown) {
                    userDropdown.classList.toggle("hidden");
                }
            };
        });
        const swiper = new Swiper(".myVideoSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                },
                1280: {
                    slidesPerView: 5
                },
                1536: {
                    slidesPerView: 6
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    </script>
</body>
</html>
