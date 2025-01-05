<header class="bg-green-600 p-2 text-white tracking-wider">
    <!-- Bagian header yang berisi logo dan judul utama -->
    <div class="header flex justify-center gap-3 ">
        <!-- Logo Kabupaten Grobogan -->
        <div class="logo-kabupaten">
            <img src="{{ asset('assets/Lambang_Grobogan.png') }}" alt="grobogan" class="h-12">
        </div>
        <!-- Bagian teks header, berisi judul dan deskripsi -->
        <div class="header-text h-14 text-center items-center ">
            <div class="header-title text-lg">
                <h1 class="text-bold">Bidang Penyuluhan Sarana dan Prasarana Pertanian</h1>
            </div>
            <p>Dinas Pertanian Kabupaten Grobogan</p>
        </div>
    </div>
</header>

<!-- Running text (teks berjalan) untuk menampilkan jam operasional -->
<div class="running-text overflow-hidden whitespace-nowrap relative w-screen bg-green-100">
    <p class="text-running">Jam Operasional : Senin - Jumat pukul 08.00 - 16.00 WIB</p>
</div>

<!-- Menyertakan komponen navigasi dari file terpisah -->
@include('components.navigation')

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
</style>
