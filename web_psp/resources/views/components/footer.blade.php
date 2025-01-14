<footer>

    <!-- Container footer utama dengan background hijau -->
    <div class="footer bg-green-800 w-full bg-gradient-to-t from-black/40 to-transparent">

        <div class="container xl:flex justify-around p-10">

            <!-- Bagian peta dan alamat -->
            <div class="maps md:flex gap-10 mb-4">
                <!-- Iframe Google Maps lokasi kantor -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7918.443646452179!2d110.90609079148689!3d-7.100269821612002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70b0024a374845%3A0xded1864b89e3ed21!2sDinas%20Pertanian%20Grobogan!5e0!3m2!1sid!2sid!4v1735725385503!5m2!1sid!2sid"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shrink"></iframe>

                <!-- Konten alamat dengan logo dan detail -->
                <div class="alamat-footer text-white">
                    <div class="address-text flex gap-5 ">
                        <!-- Ikon lokasi -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24"
                            fill="#FFFFFF">
                            <path
                                d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152l0 270.8c0 9.8-6 18.6-15.1 22.3L416 503l0-302.6zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6l0 251.4L32.9 502.7C17.1 509 0 497.4 0 480.4L0 209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77l0 249.3L192 449.4 192 255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                        </svg>
                        <strong>
                            <h2 class="text-bold text-white text-xl">Alamat</h2>
                        </strong>
                    </div>
                    <hr class="mb-3 mt-3">
                    <!-- Logo dinas pertanian -->
                    <img src="{{ asset('assets/logo_pertanian.png') }}" alt="Logo Dinas Pertanian" class="w-64 mb-3">
                    <!-- Detail alamat kantor -->
                    <address class="text-sm">
                        JL. P. Diponegoro, No. 20, 58114, Kalongan <br>
                        Kec. Purwodadi, Kabupaten Grobogan, <br>
                        Jawa Tengah, Indonesia
                    </address>
                </div>
            </div>

            <!-- Bagian menu layanan -->
            <div class="layanan">
                <strong>
                    <h3 class="text-bold text-white text-xl py-2 px-3 border-l-4 mb-4 bg-green-900 rounded-lg">
                        Layanan
                    </h3>
                </strong>
                {{-- <hr class="mb-3 mt-3"> --}}

                <!-- Daftar menu layanan -->
                <ul class="flex flex-col gap-4 text-white mb-4">
                    <li><a href="" class="nav-link">Informasi</a></li>
                    <li><a href="" class="nav-link">Program</a></li>
                    <li><a href="{{ route('news.index') }}" class="nav-link">Berita</a></li>
                    <li><a href="" class="nav-link">FAQ</a></li>
                    <li><a href="" class="nav-link">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Bagian link terkait -->
            <div class="link">
                <strong>
                    <h3 class="text-bold text-white text-xl py-2 px-3 border-l-4 mb-4 bg-green-900 rounded-lg">Link
                        Terkait</h3>
                </strong>
                {{-- <hr class="mb-3 mt-3"> --}}
                <!-- Daftar link website terkait -->
                <ul class="flex flex-col gap-4 text-white mb-4">
                    <li><a href="http://dinpertan.grobogan.go.id/" class="nav-link" target="_blank">Dinas Pertanian
                            Grobogan</a></li>
                    <li><a href="https://distanbun.jatengprov.go.id/" class="nav-link" target="_blank">Dinas Pertanian
                            Jawa Tengah</a></li>
                    <li><a href="https://jatengprov.go.id/" class="nav-link" target="_blank">Pemerintah Jawa Tengah</a>
                    </li>
                    <li><a href="https://psp.pertanian.go.id/" class="nav-link" target="_blank">Direktorat Jenderal PSP
                            RI</a></li>
                    <li><a href="https://www.pertanian.go.id/" class="nav-link" target="_blank">Kementrian Pertanian
                            RI</a></li>
                </ul>

            </div>

            <!-- Bagian sosial media -->
            <div class="sosial-media">
                <strong>
                    <h3 class="text-white text-xl py-2 px-3 border-l-4 mb-4 bg-green-900 rounded-lg">Sosial Media</h3>
                </strong>
                {{-- <hr class="mb-3 mt-3"> --}}
                <!-- Daftar link sosial media dengan ikon -->
                <ul class="flex flex-col gap-4 text-white">
                    <!-- Link Facebook -->
                    <a href="https://www.facebook.com/dinaspertaniankabupatengrobogan"
                        class="sosmed flex items-center gap-2 ease-in 0.2s" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20"
                            fill="#ffffff">
                            <path
                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z">
                            </path>
                        </svg>
                        <li>Facebook</li>
                    </a>
                    <!-- Link Instagram -->
                    <a href="https://www.instagram.com/dispertan_grobogan?igsh=a3M4bTRnYm9sNm85" target="_blank"
                        class="sosmed flex items-center gap-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20"
                            fill="#ffffff">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                        <li>Instagram</li>
                    </a>
                    <!-- Link Youtube -->
                    <a href="https://youtube.com/@dispertangrobogan?si=GBW5UrrGzGxfyQlY" target="_blank"
                        class="sosmed flex items-center gap-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="20"
                            fill="#ffffff">
                            <path
                                d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg>
                        <li>Youtube</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bagian copyright -->
    <div class="copyright bg-green-100 p-2 text-center shadow-lg">
        <p class="text-sm"><strong>Copyright &copy;2024 Dinas Pertanian Kabupaten Grobogan.</strong> All rights
            reserved.</p>
    </div>
</footer>


<style>
    .nav-link {
        position: relative;
        text-decoration: none;
        color: inherit;
    }

    .nav-link:hover {
        color: #6dff56;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: currentColor;
        transition: width 0.3s ease-in;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .sosmed {
        transition: all 0.5s ease-in-out;
    }

    .sosmed:hover svg,
    .sosmed:hover li {
        fill: #6dff56;
        color: #6dff56;
        transform: scale(1.05);
    }
</style>
