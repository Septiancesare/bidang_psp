<header
    class="bg-green-800 p-2 text-white tracking-wider lg:flex justify-between lg:px-20 items-center bg-gradient-to-t from-black/50 to-transparent">
    <!-- Bagian header yang berisi logo dan judul utama -->
    <div class="header flex justify-center gap-3 ">
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
    <div class="flex nav items-center justify-center h-10">
        <ul class="flex justify-center border-b-2  border-transparent  gap-6 tracking-wider">

            <li class="nav-item p-2  hover:bg-green-800 "><a href="{{ route('welcome') }}">Beranda</a></li>

            <li class="nav-item p-2">
                <a href="" class="flex gap-2">
                    Profile
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="10" fill="#ffffff">
                        <path
                            d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                    </svg>
                </a>
                <ul>
                    <li><a href="{{ route('profile') }}">Profil Bidang</a></li>
                    <li><a href="#visi-misi">Visi Misi</a></li>
                    <li><a href="#  staff">Staff</a></li>
                </ul>
            </li>


            <li class="nav-item p-2 hover:bg-green-800"><a href="{{ route('program') }}">Program</a></li>


            <li class="nav-item p-2 hover:bg-green-800"><a href="#">Jurnal</a></li>
            <li class="nav-item p-2 hover:bg-green-800"><a href="#">Download</a></li>
            <li class="nav-item p-2 hover:bg-green-800"><a href="#">Kontak</a></li>


        </ul>
    </div>
</header>

<!-- Running text (teks berjalan) untuk menampilkan jam operasional -->
<div class="running-text overflow-hidden whitespace-nowrap relative w-screen bg-green-100">
    <p class="text-running">Jam Operasional : Senin - Jumat pukul 08.00 - 16.00 WIB</p>
</div>



<style>
    /* Mengatur tinggi elemen teks berjalan */
    .running-text {
        position: relative;
        height: 1.6em;
    }

    /* Menambahkan animasi pada teks berjalan */
    .text-running {
        animation: runningText 20s linear infinite;
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
        background-color: #2f855a;
        color: white;
    }

    * {
        scroll-behavior: smooth;
    }
</style>
