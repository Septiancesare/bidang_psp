<header id="main-header"
    class="fixed w-full top-0 z-50 transition-all duration-300 bg-white p-2  tracking-wider lg:flex justify-between lg:px-10 items-center bg-gradient-to-t from-green-50  to-transparent gap-10">
    <!-- Bagian header yang berisi logo dan judul utama -->
    <div class="header flex justify-center gap-3 text-green-700  ">
        <!-- Logo Kabupaten Grobogan -->
        <div class="logo-kabupaten">
            <img src="{{ asset('assets/Lambang_Grobogan.png') }}" alt="grobogan" class="h-12">
        </div>
        <!-- Bagian teks header, berisi judul dan deskripsi -->
        <div class="header-text items-center border-l-2 px-5 text-sm">
            <div class="header-title text-md">
                <h1 class="font-bold">Bidang Penyuluhan Sarana dan Prasarana Pertanian</h1>
            </div>
            <p>Dinas Pertanian Kabupaten Grobogan</p>
        </div>
    </div>

    {{-- navigasi halaman  --}}
    <div class="flex nav items-center lg:justify-center h-10 text-black">
        <button id="menu-toggle" class="block md:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <ul class="hidden md:flex items-center gap-6 tracking-wider z-10 ">
            <li class="nav-item p-2  transition duration-400 rounded-md"><a href="{{ route('welcome') }}">Beranda</a>
            </li>
            <li class="relative group rounded-md">
                <a href="#" class="nav-item flex items-center gap-2 p-2  rounded-md">
                    Profile
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="#000000" viewBox="0 0 320 512">
                        <path
                            d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                    </svg>
                </a>

                <!-- Dropdown Menu -->
                <ul
                    class="hidden group-hover:block absolute bg-white text-black rounded shadow-lg whitespace-nowrap transition duration-400">
                    <li><a href="{{ route('profile-bidang.index') }}" class="block px-4 py-2 hover:bg-gray-200">Profil
                            Bidang</a>
                    </li>
                    <li><a href="{{ route('profile-bidang.index') }}#visi-misi"
                            class="block px-4 py-2 hover:bg-gray-200">Visi
                            Misi</a></li>
                    <li><a href="{{ route('profile-bidang.index') }}#staff"
                            class="block px-4 py-2 hover:bg-gray-200">Staff</a></li>
                    <li><a href="{{ route('gallery.index') }}" class="block px-4 py-2 hover:bg-gray-200">Gallery</a>
                    </li>
                    <li class="block px-4 py-2 hover:bg-gray-200"><a href="{{ route('program.index') }}">Program</a>
                    </li>
                </ul>
            </li>

            <li class="relative group rounded-md">
                <a href="#" class="nav-item flex items-center gap-2 p-2  rounded-md">
                    Info
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="#000000" viewBox="0 0 320 512">
                        <path
                            d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                    </svg>
                </a>

                <!-- Dropdown Menu -->
                <ul
                    class="hidden group-hover:block absolute bg-white text-black rounded shadow-lg whitespace-nowrap transition duration-400">
                    <li><a href="{{ route('anouncement.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200">Informasi</a>
                    </li>
                    <li><a href="{{ route('download.index') }}" class="block px-4 py-2 hover:bg-gray-200">Download</a>
                    </li>
                    <li><a href="{{ route('news.index') }}#visi-misi"
                            class="block px-4 py-2 hover:bg-gray-200">Berita</a></li>

                </ul>
            </li>
            <li class="nav-item p-2  rounded-md"><a href="#">Jurnal</a></li>
            <li class="nav-item p-2  rounded-md"><a href="{{ route('faq.index') }}">FAQ</a></li>

            </li>
        </ul>

        <!-- Mobile Menu -->
        <ul id="mobile-menu"
            class="hidden fixed top-16 left-0 w-full bg-green-700 text-white flex-col gap-4 p-5 md:hidden z-50 max-h-[calc(100vh-4rem)] overflow-y-auto">
            <!-- Close Button -->
            <li class="absolute top-2 right-2">
                <button id="mobile-menu-close" class="text-white hover:text-green-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </li>

            <!-- Rest of the menu items remain the same as in previous artifact -->
            <li class="mt-8 border-b border-green-600 pb-2">
                <a href="{{ route('welcome') }}" class="block py-2 hover:bg-green-600 rounded">Beranda</a>
            </li>

            <li class="border-b border-green-600 pb-2">
                <div class="profile-dropdown">
                    <a href="#" class="flex justify-between items-center py-2 hover:bg-green-600 rounded">
                        <span>Profil</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="#000000" viewBox="0 0 320 512">
                            <path
                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                        </svg>
                    </a>

                    <ul class="ml-4 mt-2 hidden">
                        <li><a href="{{ route('profile-bidang.index') }}"
                                class="block py-2 hover:bg-green-600 rounded">Profil Bidang</a></li>
                        <li><a href="{{ route('profile-bidang.index') }}#visi-misi"
                                class="block py-2 hover:bg-green-600 rounded">Visi Misi</a></li>
                        <li><a href="{{ route('profile-bidang.index') }}#staff"
                                class="block py-2 hover:bg-green-600 rounded">Staff</a></li>
                        <li><a href="{{ route('gallery.index') }}"
                                class="block py-2 hover:bg-green-600 rounded">Gallery</a></li>
                        <li>
                            <a href="{{ route('program.index') }}"
                                class="block py-2 hover:bg-green-600 rounded">Program</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="border-b border-green-600 pb-2">
                <div class="profile-dropdown">
                    <a href="#" class="flex justify-between items-center py-2 hover:bg-green-600 rounded">
                        <span>Info</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="#000000" viewBox="0 0 320 512">
                            <path
                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                        </svg>
                    </a>

                    <ul class="ml-4 mt-2 hidden">
                        <li><a href="{{ route('anouncement.index') }}"
                                class="block py-2 hover:bg-green-600 rounded">Informasi</a></li>
                        <li><a href="{{ route('download.index') }}"
                                class="block py-2 hover:bg-green-600 rounded">Download</a></li>
                        <li><a href="{{ route('news.index') }}#staff"
                                class="block py-2 hover:bg-green-600 rounded">Berita</a></li>

                    </ul>
                </div>
            </li>


            <li class="border-b border-green-600 pb-2">
                <a href="#" class="block py-2 hover:bg-green-600 rounded">Jurnal</a>
            </li>

            <li class="border-b border-green-600 pb-2">
                <a href="{{ route('faq.index') }}" class="block py-2 hover:bg-green-600 rounded">FAQ</a>
            </li>


        </ul>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const menuToggle = document.getElementById('menu-toggle');
                const mobileMenu = document.getElementById('mobile-menu');
                const mobileMenuClose = document.getElementById('mobile-menu-close');
                const profileDropdown = document.querySelector('.profile-dropdown');
                const profileSubmenu = profileDropdown.querySelector('ul');
                const profileToggle = profileDropdown.querySelector('a');

                // Open mobile menu
                menuToggle.addEventListener('click', () => {
                    mobileMenu.classList.remove('hidden');
                });

                // Close mobile menu
                mobileMenuClose.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    // Reset profile submenu
                    profileSubmenu.classList.add('hidden');
                    const svg = profileToggle.querySelector('svg');
                    svg.style.transform = 'rotate(0deg)';
                });

                // Toggle profile submenu
                profileToggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    profileSubmenu.classList.toggle('hidden');

                    // Rotate dropdown icon
                    const svg = profileToggle.querySelector('svg');
                    svg.style.transform = profileSubmenu.classList.contains('hidden') ?
                        'rotate(0deg)' :
                        'rotate(180deg)';
                });
            });
        </script>
    </div>

    {{-- navigasi login register  --}}
    @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end font-thin">
            @auth
                <nav x-data="{ open: false }" class="">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">

                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md bg-green-600 text-white  hover:text-green-200  focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name }}</div>

                                            <div class="ms-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>

                            <!-- Hamburger -->
                            <div class="-me-2 flex items-center sm:hidden">
                                <button @click="open = ! open"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-100 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Responsive Navigation Menu -->
                    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">

                        <!-- Responsive Settings Options -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="px-4">
                                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
                            </div>

                            <div class="mt-3 space-y-1 text-black">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            @else
                <a href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-green-300  focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-green-300 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            // Add scrolled class when page is scrolled down
            if (currentScroll > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        });
    });
</script>

<style>
    #main-header {
        transition: all 0.3s ease;
    }

    #main-header.scrolled {
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Definisi animasi untuk teks berjalan dari kanan ke kiri */
    @keyframes runningText {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    /* Animasi border bottom dari tengah */
    @keyframes borderFromCenter {
        from {
            width: 0;
            left: 50%;
        }

        to {
            width: 100%;
            left: 0;
        }
    }

    .nav-item {
        position: relative;
    }

    .nav-item::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 3px;
        background-color: #22c55e;
        transition: width 0.3s ease;
    }

    .nav-item:hover::after {
        animation: borderFromCenter 0.3s forwards;
    }

    .nav-item {
        list-style: none;
        position: relative;
        /* Dibutuhkan untuk dropdown */
    }

    /* Submenu */
    .nav-item ul {
        list-style: none;
        margin: 0;
        padding: 0;
        width: auto;
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        border: 1px solid #ccc;
        z-index: 10;
        white-space: nowrap;
    }

    .nav-item ul li {
        padding: 10px;
        cursor: pointer;
        color: black
    }

    .nav-item ul li:hover {
        background-color: #ededed;
        color: #00b944
    }

    /* Tampilkan submenu saat hover */
    .nav-item:hover ul {
        display: block;
    }

    .nav-item:hover {

        color: #00b944;
    }

    * {
        scroll-behavior: smooth;
    }
</style>

<style>
    #mobile-menu {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5));
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    #mobile-menu li {
        transition: background-color 0.3s ease;
    }

    .profile-dropdown svg {
        transition: transform 0.3s ease;
    }
</style>
