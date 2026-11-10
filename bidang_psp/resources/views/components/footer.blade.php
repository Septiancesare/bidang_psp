<footer class="bg-green-900 pt-16 pb-8 border-t border-green-800 text-white font-sans relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-y-1/2 translate-x-1/3 blur-3xl"></div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-y-1/2 -translate-x-1/2 blur-2xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 mb-12">
            
            <!-- Logo & About (Takes 4 cols) -->
            <div class="lg:col-span-4 flex flex-col items-start">
                <div class="flex items-center gap-3 mb-6 bg-green-800/50 p-3 rounded-2xl border border-green-700/50">
                    <img src="{{ asset('assets/Lambang_Grobogan.png') }}" alt="Logo Grobogan" class="h-14 w-auto drop-shadow-md">
                    <div>
                        <h2 class="text-white font-bold text-lg leading-tight">Bidang PSP</h2>
                        <p class="text-green-200 text-xs font-medium uppercase tracking-wider">Dinas Pertanian Grobogan</p>
                    </div>
                </div>
                <p class="text-green-100 text-sm leading-relaxed mb-6">
                    Berdedikasi untuk memajukan sektor pertanian Kabupaten Grobogan melalui penyuluhan, penyediaan sarana, dan prasarana yang handal serta modern.
                </p>
                <img src="{{ asset('assets/logo_pertanian.png') }}" alt="Logo Dinas Pertanian" class="h-10 w-auto opacity-90 brightness-0 invert">
            </div>

            <!-- Quick Links (Takes 2 cols) -->
            <div class="lg:col-span-2">
                <h3 class="text-white font-semibold text-lg mb-5 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-green-400 rounded-full"></span>
                    Menu Utama
                </h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('welcome') }}" class="footer-link flex items-center gap-2 text-green-100 text-sm hover:text-white transition-colors">
                        <span class="text-green-500">›</span> Beranda
                    </a></li>
                    <li><a href="{{ route('profile-bidang.index') }}" class="footer-link flex items-center gap-2 text-green-100 text-sm hover:text-white transition-colors">
                        <span class="text-green-500">›</span> Profil Bidang
                    </a></li>
                    <li><a href="{{ route('program.index') }}" class="footer-link flex items-center gap-2 text-green-100 text-sm hover:text-white transition-colors">
                        <span class="text-green-500">›</span> Program
                    </a></li>
                    <li><a href="{{ route('news.index') }}" class="footer-link flex items-center gap-2 text-green-100 text-sm hover:text-white transition-colors">
                        <span class="text-green-500">›</span> Berita
                    </a></li>
                    <li><a href="{{ route('anouncement.index') }}" class="footer-link flex items-center gap-2 text-green-100 text-sm hover:text-white transition-colors">
                        <span class="text-green-500">›</span> Informasi
                    </a></li>
                    <li><a href="{{ route('faq.index') }}" class="footer-link flex items-center gap-2 text-green-100 text-sm hover:text-white transition-colors">
                        <span class="text-green-500">›</span> Bantuan (FAQ)
                    </a></li>
                </ul>
            </div>

            <!-- Related Links (Takes 3 cols) -->
            <div class="lg:col-span-3">
                <h3 class="text-white font-semibold text-lg mb-5 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-green-400 rounded-full"></span>
                    Tautan Terkait
                </h3>
                <ul class="space-y-3">
                    <li><a href="http://dinpertan.grobogan.go.id/" target="_blank" class="footer-link flex items-start gap-2 text-green-100 text-sm hover:text-white transition-colors group">
                        <span class="text-green-500 mt-0.5 group-hover:translate-x-1 transition-transform">↗</span> 
                        Dinas Pertanian Grobogan
                    </a></li>
                    <li><a href="https://distanbun.jatengprov.go.id/" target="_blank" class="footer-link flex items-start gap-2 text-green-100 text-sm hover:text-white transition-colors group">
                        <span class="text-green-500 mt-0.5 group-hover:translate-x-1 transition-transform">↗</span> 
                        Dinas Pertanian Jawa Tengah
                    </a></li>
                    <li><a href="https://jatengprov.go.id/" target="_blank" class="footer-link flex items-start gap-2 text-green-100 text-sm hover:text-white transition-colors group">
                        <span class="text-green-500 mt-0.5 group-hover:translate-x-1 transition-transform">↗</span> 
                        Pemerintah Jawa Tengah
                    </a></li>
                    <li><a href="https://psp.pertanian.go.id/" target="_blank" class="footer-link flex items-start gap-2 text-green-100 text-sm hover:text-white transition-colors group">
                        <span class="text-green-500 mt-0.5 group-hover:translate-x-1 transition-transform">↗</span> 
                        Direktorat Jenderal PSP RI
                    </a></li>
                    <li><a href="https://www.pertanian.go.id/" target="_blank" class="footer-link flex items-start gap-2 text-green-100 text-sm hover:text-white transition-colors group">
                        <span class="text-green-500 mt-0.5 group-hover:translate-x-1 transition-transform">↗</span> 
                        Kementerian Pertanian RI
                    </a></li>
                </ul>
            </div>

            <!-- Contact & Social (Takes 3 cols) -->
            <div class="lg:col-span-3">
                <h3 class="text-white font-semibold text-lg mb-5 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-green-400 rounded-full"></span>
                    Hubungi Kami
                </h3>
                <div class="space-y-4 mb-6">
                    <div class="flex items-start gap-3 text-green-100 text-sm">
                        <div class="mt-1 flex-shrink-0 bg-green-800 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="leading-relaxed">
                            JL. P. Diponegoro, No. 20, 58114, Kalongan<br>
                            Kec. Purwodadi, Kabupaten Grobogan,<br>
                            Jawa Tengah, Indonesia
                        </p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <a href="https://www.facebook.com/dinaspertaniankabupatengrobogan" target="_blank" class="bg-green-800 hover:bg-green-600 text-white w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-5 w-5" fill="currentColor">
                            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/dispertan_grobogan?igsh=a3M4bTRnYm9sNm85" target="_blank" class="bg-green-800 hover:bg-green-600 text-white w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5" fill="currentColor">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                    </a>
                    <a href="https://youtube.com/@dispertangrobogan?si=GBW5UrrGzGxfyQlY" target="_blank" class="bg-green-800 hover:bg-green-600 text-white w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-5 w-5" fill="currentColor">
                            <path d="M549.65 124.08c-6.28-23.65-24.79-42.28-48.28-48.6C458.78 64 288 64 288 64s-170.78 0-213.37 11.48c-23.49 6.32-42 24.95-48.28 48.6-11.41 42.87-11.41 132.3-11.41 132.3s0 89.44 11.41 132.31c6.28 23.65 24.79 41.5 48.28 47.82C117.22 448 288 448 288 448s170.78 0 213.37-11.48c23.49-6.32 42-24.17 48.28-47.82 11.41-42.87 11.41-132.31 11.41-132.31s0-89.43-11.41-132.31zM230.43 322.95V175.18l142.72 73.89-142.72 73.88z"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- Maps Full Width on Mobile, Full width bottom on Desktop -->
        <div class="mb-8 rounded-2xl overflow-hidden border border-green-800/50 shadow-inner h-64 lg:h-72">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7918.443646452179!2d110.90609079148689!3d-7.100269821612002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70b0024a374845%3A0xded1864b89e3ed21!2sDinas%20Pertanian%20Grobogan!5e0!3m2!1sid!2sid!4v1735725385503!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- Copyright -->
        <div class="border-t border-green-800/60 pt-6 mt-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-green-300/80 text-sm font-medium">
                &copy; {{ date('Y') }} Bidang PSP Dinas Pertanian Kabupaten Grobogan.
            </p>
            <p class="text-green-300/60 text-xs">
                All rights reserved.
            </p>
        </div>
    </div>
</footer>

<style>
    .footer-link:hover span {
        color: white;
    }
</style>
