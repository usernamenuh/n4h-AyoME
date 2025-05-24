import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

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