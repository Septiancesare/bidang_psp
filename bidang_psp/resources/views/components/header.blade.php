<header id="main-header"
    class="sticky top-0 w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 py-3 px-4 lg:px-8 xl:px-12 flex flex-col lg:flex-row lg:justify-between items-center text-gray-800">
    <!-- Bagian header yang berisi logo dan judul utama -->
    <div class="flex justify-between w-full lg:w-auto items-center">
        <a href="{{ route('welcome') }}" class="group block">
            <div class="header flex items-center gap-3 xl:gap-4">
                <!-- Logo Kabupaten Grobogan -->
                <div class="logo-kabupaten shrink-0">
                    <img src="{{ asset('assets/Lambang_Grobogan.png') }}" alt="Grobogan" class="h-10 xl:h-12 w-auto drop-shadow-sm group-hover:scale-105 transition-transform duration-300">
                </div>
                <!-- Bagian teks header, berisi judul dan deskripsi -->
                <div class="header-text border-l-2 border-green-600/30 pl-3 xl:pl-4 py-0.5 flex flex-col justify-center">
                    <h1 class="font-bold text-sm xl:text-base text-green-800 leading-tight group-hover:text-green-600 transition-colors uppercase tracking-wide">Bidang Penyuluhan, Sarana & Prasarana</h1>
                    <p class="text-[10px] xl:text-xs text-gray-500 font-medium tracking-wider mt-0.5">Dinas Pertanian Kab. Grobogan</p>
                </div>
            </div>
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="menu-toggle" class="block lg:hidden focus:outline-none p-2 text-green-700 hover:bg-green-50 rounded-lg transition-colors ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden lg:flex items-center w-auto mt-4 lg:mt-0">
        <ul class="flex items-center gap-1 xl:gap-2 text-sm font-semibold tracking-wide">
            <li>
                <a href="{{ route('welcome') }}" class="nav-item px-4 py-2 rounded-full hover:bg-green-50 hover:text-green-700 transition-all duration-300 {{ request()->routeIs('welcome') ? 'bg-green-50 text-green-700' : '' }}">Beranda</a>
            </li>
            <li class="relative group">
                <a href="#" class="nav-item flex items-center gap-1.5 px-4 py-2 rounded-full hover:bg-green-50 hover:text-green-700 transition-all duration-300 cursor-pointer {{ request()->is('profile*') ? 'bg-green-50 text-green-700' : '' }}">
                    Profil
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu absolute top-[calc(100%+0.5rem)] left-0 bg-white rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] border border-gray-100 py-2 w-52 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 before:absolute before:-top-2 before:left-6 before:w-4 before:h-4 before:bg-white before:rotate-45 before:border-l before:border-t before:border-gray-100 z-50">
                    <li><a href="{{ route('profile-bidang.index') }}" class="block px-5 py-2.5 text-sm text-gray-700 hover:text-green-600 hover:bg-green-50/70 transition-colors font-medium">Profil Bidang</a></li>
                    <li><a href="{{ route('profile-bidang.index') }}#visi-misi" class="block px-5 py-2.5 text-sm text-gray-700 hover:text-green-600 hover:bg-green-50/70 transition-colors font-medium">Visi & Misi</a></li>
                    <li><a href="{{ route('profile-bidang.index') }}#staff" class="block px-5 py-2.5 text-sm text-gray-700 hover:text-green-600 hover:bg-green-50/70 transition-colors font-medium">Struktur Organisasi</a></li>
                    <li><a href="{{ route('gallery.index') }}" class="block px-5 py-2.5 text-sm text-gray-700 hover:text-green-600 hover:bg-green-50/70 transition-colors font-medium">Galeri</a></li>
                    <li><a href="{{ route('program.index') }}" class="block px-5 py-2.5 text-sm text-gray-700 hover:text-green-600 hover:bg-green-50/70 transition-colors font-medium">Program Utama</a></li>
                </ul>
            </li>

            <li class="relative group">
                <a href="#" class="nav-item flex items-center gap-1.5 px-4 py-2 rounded-full hover:bg-green-50 hover:text-green-700 transition-all duration-300 cursor-pointer {{ request()->is('info*') ? 'bg-green-50 text-green-700' : '' }}">
                    Pusat Informasi
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu absolute top-[calc(100%+0.5rem)] left-0 bg-white rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] border border-gray-100 py-2 w-52 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 before:absolute before:-top-2 before:left-6 before:w-4 before:h-4 before:bg-white before:rotate-45 before:border-l before:border-t before:border-gray-100 z-50">
                    <li><a href="{{ route('anouncement.index') }}" class="block px-5 py-2.5 text-sm text-gray-700 hover:text-green-600 hover:bg-green-50/70 transition-colors font-medium">Pengumuman</a></li>
                    <li><a href="{{ route('download.index') }}" class="block px-5 py-2.5 text-sm text-gray-700 hover:text-green-600 hover:bg-green-50/70 transition-colors font-medium">Unduhan Data</a></li>
                    <li><a href="{{ route('news.index') }}" class="block px-5 py-2.5 text-sm text-gray-700 hover:text-green-600 hover:bg-green-50/70 transition-colors font-medium">Berita Terkini</a></li>
                </ul>
            </li>
            
            <li>
                <a href="{{ route('faq.index') }}" class="nav-item px-4 py-2 rounded-full hover:bg-green-50 hover:text-green-700 transition-all duration-300 {{ request()->routeIs('faq.index') ? 'bg-green-50 text-green-700' : '' }}">FAQ</a>
            </li>

            @auth
                <li class="ml-2 xl:ml-4 pl-2 xl:pl-4 border-l-2 border-gray-100">
                    <nav x-data="{ open: false }" class="relative">
                        <button @click="open = !open" @click.away="open = false" class="flex items-center gap-2 px-4 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition-all duration-300 shadow-sm hover:shadow focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            <span class="text-sm font-bold tracking-wide">{{ Auth::user()->name }}</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95 transform -translate-y-2"
                             x-transition:enter-end="opacity-100 scale-100 transform translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100 transform translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 transform -translate-y-2"
                             class="absolute right-0 mt-3 w-56 bg-white rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.15)] py-2 border border-gray-100 z-50 before:absolute before:-top-2 before:right-6 before:w-4 before:h-4 before:bg-white before:rotate-45 before:border-l before:border-t before:border-gray-100" style="display: none;">
                            <div class="px-4 py-3 border-b border-gray-50 mb-1">
                                <p class="text-xs text-gray-500 font-medium">Masuk sebagai</p>
                                <p class="text-sm font-bold text-gray-900 truncate">{{ Auth::user()->email }}</p>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                Profil Saya
                            </a>
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                                Dashboard
                            </a>
                            <div class="border-t border-gray-50 mt-1 pt-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="flex items-center gap-2 w-full text-left px-4 py-2.5 text-sm font-medium text-red-600 hover:bg-red-50 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                                        Keluar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </li>
            @endauth
        </ul>
    </div>
</header>

<script>
    // Set the header height before the page content is parsed to avoid layout shift.
    (() => {
        const header = document.getElementById('main-header');
        if (header) {
            document.documentElement.style.setProperty('--header-height', `${header.offsetHeight}px`);
        }
    })();
</script>

<!-- Mobile Menu Overlay (Hidden by default) -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[90] opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"></div>
    
    <!-- Mobile Menu Slide-out Panel -->
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-4/5 max-w-sm bg-white shadow-2xl z-[100] transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden overflow-y-auto flex flex-col">
        <div class="p-5 flex justify-between items-center border-b border-gray-100 bg-green-50/50">
            <div class="flex items-center gap-3">
                <img src="{{ asset('assets/Lambang_Grobogan.png') }}" alt="Logo" class="h-9">
                <span class="text-green-800 font-bold text-sm uppercase tracking-wide">Menu Navigasi</span>
            </div>
            <button id="mobile-menu-close" class="text-gray-400 hover:text-gray-800 bg-white p-2 rounded-full shadow-sm transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="flex-1 px-4 py-6 overflow-y-auto">
            <ul class="flex flex-col gap-2 font-semibold text-gray-700">
                <li>
                    <a href="{{ route('welcome') }}" class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-green-50 hover:text-green-700 transition-colors {{ request()->routeIs('welcome') ? 'bg-green-50 text-green-700' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                        Beranda
                    </a>
                </li>
                
                <li class="mobile-dropdown bg-gray-50/50 rounded-xl overflow-hidden border border-transparent hover:border-gray-100 transition-colors">
                    <button class="w-full flex justify-between items-center py-3 px-4 transition-colors">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                            <span>Profil</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <ul class="hidden border-t border-gray-100 bg-white py-2 text-sm text-gray-600 font-medium">
                        <li><a href="{{ route('profile-bidang.index') }}" class="block py-2.5 px-12 hover:text-green-600 hover:bg-green-50 transition-colors">Profil Bidang</a></li>
                        <li><a href="{{ route('profile-bidang.index') }}#visi-misi" class="block py-2.5 px-12 hover:text-green-600 hover:bg-green-50 transition-colors">Visi & Misi</a></li>
                        <li><a href="{{ route('profile-bidang.index') }}#staff" class="block py-2.5 px-12 hover:text-green-600 hover:bg-green-50 transition-colors">Struktur Organisasi</a></li>
                        <li><a href="{{ route('gallery.index') }}" class="block py-2.5 px-12 hover:text-green-600 hover:bg-green-50 transition-colors">Galeri</a></li>
                        <li><a href="{{ route('program.index') }}" class="block py-2.5 px-12 hover:text-green-600 hover:bg-green-50 transition-colors">Program</a></li>
                    </ul>
                </li>

                <li class="mobile-dropdown bg-gray-50/50 rounded-xl overflow-hidden border border-transparent hover:border-gray-100 transition-colors">
                    <button class="w-full flex justify-between items-center py-3 px-4 transition-colors">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>Informasi</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <ul class="hidden border-t border-gray-100 bg-white py-2 text-sm text-gray-600 font-medium">
                        <li><a href="{{ route('anouncement.index') }}" class="block py-2.5 px-12 hover:text-green-600 hover:bg-green-50 transition-colors">Pengumuman</a></li>
                        <li><a href="{{ route('download.index') }}" class="block py-2.5 px-12 hover:text-green-600 hover:bg-green-50 transition-colors">Unduhan</a></li>
                        <li><a href="{{ route('news.index') }}" class="block py-2.5 px-12 hover:text-green-600 hover:bg-green-50 transition-colors">Berita</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('faq.index') }}" class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-green-50 hover:text-green-700 transition-colors {{ request()->routeIs('faq.index') ? 'bg-green-50 text-green-700' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        FAQ
                    </a>
                </li>
            </ul>
        </div>

        @auth
            <div class="p-4 border-t border-gray-100 bg-gray-50 mt-auto">
                <div class="flex items-center gap-3 mb-4 px-2">
                    <div class="h-10 w-10 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-lg shadow-inner">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-sm font-bold text-gray-900 truncate">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <a href="{{ route('dashboard') }}" class="block w-full text-center py-2.5 rounded-xl bg-white border border-gray-200 text-gray-700 font-medium text-sm hover:bg-gray-50 transition-colors shadow-sm">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-center py-2.5 rounded-xl bg-red-50 text-red-600 font-medium text-sm hover:bg-red-100 transition-colors shadow-sm">
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
        @endauth
    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('main-header');

        // Keep layout calculations in sync with the real header height
        const syncHeaderHeight = () => {
            document.documentElement.style.setProperty('--header-height', `${header.offsetHeight}px`);
        };
        syncHeaderHeight();
        window.addEventListener('resize', syncHeaderHeight);
        if ('ResizeObserver' in window) {
            new ResizeObserver(syncHeaderHeight).observe(header);
        }

        // Desktop Header Scroll Effect (shadow only, so the height stays stable)
        window.addEventListener('scroll', () => {
            header.classList.toggle('shadow-md', window.pageYOffset > 10);
        });

        // Mobile Menu Logic
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const overlay = document.getElementById('mobile-menu-overlay');

        const openMenu = () => {
            mobileMenu.classList.remove('translate-x-full');
            overlay.classList.remove('opacity-0', 'pointer-events-none');
            overlay.classList.add('opacity-100');
            document.body.style.overflow = 'hidden';
        };

        const closeMenu = () => {
            mobileMenu.classList.add('translate-x-full');
            overlay.classList.add('opacity-0', 'pointer-events-none');
            overlay.classList.remove('opacity-100');
            document.body.style.overflow = '';
        };

        menuToggle.addEventListener('click', openMenu);
        mobileMenuClose.addEventListener('click', closeMenu);
        overlay.addEventListener('click', closeMenu);

        // Mobile Dropdowns Logic
        const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
        mobileDropdowns.forEach(dropdown => {
            const btn = dropdown.querySelector('button');
            const menu = dropdown.querySelector('ul');
            const icon = dropdown.querySelector('button > svg:last-child'); // The chevron icon

            btn.addEventListener('click', () => {
                const isOpen = !menu.classList.contains('hidden');
                
                // Close all other dropdowns
                mobileDropdowns.forEach(d => {
                    if (d !== dropdown) {
                        d.querySelector('ul').classList.add('hidden');
                        d.querySelector('button > svg:last-child').classList.remove('rotate-180');
                        d.classList.remove('bg-white', 'shadow-sm', 'border-gray-100');
                        d.classList.add('bg-gray-50/50', 'border-transparent');
                    }
                });

                if (!isOpen) {
                    menu.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                    dropdown.classList.remove('bg-gray-50/50', 'border-transparent');
                    dropdown.classList.add('bg-white', 'shadow-sm', 'border-gray-100');
                } else {
                    menu.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                    dropdown.classList.add('bg-gray-50/50', 'border-transparent');
                    dropdown.classList.remove('bg-white', 'shadow-sm', 'border-gray-100');
                }
            });
        });
    });
</script>
