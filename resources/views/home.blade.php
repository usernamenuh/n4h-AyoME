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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-black dark:bg-gray-900 dark:text-white">
    @include('layouts.navigation')
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
                            <div class=path: "agenda-info text-gray-600 dark:text-gray-300">
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
    @include('layouts.footer')
</body>
</html>
