<!-- Layout utama menggunakan guest layout -->
<x-guest-layout>
    <!-- Container utama dengan padding dan margin -->
    <div class="container program-page py-2 px-28">
        <!-- Card program dengan background abu-abu dan bayangan -->
        <div class="program p-2 m-3  bg-slate-100 rounded-lg  shadow-xl ">
            <!-- Judul utama program -->
            <div class="title text-xl text-center text-bold py-5 ">
                <h1><strong>PROGRAM UNGGULAN BIDANG PSP 2024</strong></h1>
            </div>

            <!-- Bagian A: Subkoor Penyuluhan -->
            <div class="penyuluhan mx-20">
                <!-- Judul seksi penyuluhan -->
                <div class="penyuluhan-title p-5">
                    <strong>
                        <h2>A. Subkoor Penyuluhan</h2>
                    </strong>
                </div>
                <div class="penyuluhan-content">
                    <!-- Container program penyuluhan dengan flex layout -->
                    <div class="penyuluhan-program flex justify-evenly ">
                        <!-- Card program Ngopi Tani -->
                        <div class="ngopi-tani w-fit bg-slate-200 p-5 rounded-lg ">
                            <!-- Container gambar dengan rounded corner -->
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/ngopi-tani.png') }}" alt="ngopi tani"
                                    class="rounded-md hover:zoom" width="400" height="200">
                            </div>
                            <!-- Konten program Ngopi Tani -->
                            <div class="ngopi-content text-center mt-2">
                                <p><strong>Ngopi Tani</strong></p>
                                <p>(Ngobrol Pintar Pertanian)</p>
                                <!-- Indikator waktu dengan ikon -->
                                <div class="info-time text-green-500 flex justify-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15"
                                        fill="#6dff56">
                                        <path
                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <p>Setiap hari Jumat</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card program Saung Penyuluh -->
                        <div class="saung w-fit bg-slate-200 p-5 rounded-lg overflow-hidden">
                            <!-- Container gambar dengan rounded corner -->
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/saung-penyuluh.png') }}" alt="saung penyuluh"
                                    class="rounded-md hover:zoom" width="400" height="200">
                            </div>
                            <!-- Konten program Saung Penyuluh -->
                            <div class="saung-content text-center mt-2">
                                <p><strong>Saung Penyuluh</strong></p>
                                <p>(Sinahu Bareng Penyuluh Pertanian)</p>
                                <!-- Indikator waktu dengan ikon -->
                                <div class="info-time text-green-500 flex justify-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15"
                                        fill="#6dff56">
                                        <path
                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <p>Setiap hari Selasa</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seksi sasaran penyuluhan -->
                    <div class="sasaran-penyuluhan mx-9 mt-5">
                        <div class="title-sasaran">
                            <strong>
                                <h2>Sasaran</h2>
                            </strong>
                        </div>
                        <!-- Konten sasaran 1: Peningkatan Kelas -->
                        <div class="sasaran-content my-2">
                            <h3 class="text-lg ">1. Peningkatan Kelas Kelompok Tani</h3>
                            <p>Strategi : </p>
                            <img src="{{ asset('assets/strategi peningkatan kelas tani.png') }}"
                                alt="strategi peningkatan kelas tani">
                        </div>
                        <!-- Konten sasaran 2: Peningkatan Pengetahuan -->
                        <div class="sasaran-content my-10">
                            <h3 class="text-lg">2. Peningkatan Pengetahuan dan Keterampilan PPL</h3>
                            <p>Strategi : Temu Teknis Penyuluh</p>
                            <img src="{{ asset('assets/tahapan saung tani.png') }}"
                                alt="strategi peningkatan kelas tani">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian B: Subkoor Sarana dan Prasarana -->
            <div class="sarpras mx-20">
                <!-- Judul seksi sarpras -->
                <div class="sarpras-title p-5">
                    <strong>
                        <h2>B. Subkoor Sarana dan Prasarana</h2>
                    </strong>
                </div>
                <div class="sarpras-content">
                    <!-- Container program sarpras dengan flex layout -->
                    <div class="sarpras-program flex justify-evenly ">
                        <!-- Card program Sawah Digital -->
                        <div class="sawah-digital w-fit bg-slate-200 p-5 rounded-lg ">
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/sawah-digital.jpg') }}" alt="ngopi tani"
                                    class="rounded-md hover:zoom" width="400" height="200">
                            </div>
                            <div class="sawah-digital-content text-center mt-2">
                                <p><strong>Sawah Digital</strong></p>
                            </div>
                        </div>
                        <!-- Card program Smart Farming -->
                        <div class="smart-farming w-fit bg-slate-200 p-5 rounded-lg ">
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/smart-farming.png') }}" alt="ngopi tani"
                                    class="rounded-md hover:zoom" width="400" height="200">
                            </div>
                            <div class="smart-farming-content text-center mt-2">
                                <p><strong>Smart Farming</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian C: Subkoor Pupuk dan Pestisida -->
            <div class="pupuk-pestisida mx-20 mb-20 ">
                <!-- Judul seksi pupuk dan pestisida -->
                <div class="pupuk-pestisida-title p-5">
                    <strong>
                        <h2>C. Subkoor Pupuk dan Pestisida</h2>
                    </strong>
                </div>
                <div class="pupuk-pestisida-content">
                    <!-- Container program pupuk dengan flex layout -->
                    <div class="pupuk-program flex justify-evenly ">
                        <!-- Card program Si Puber -->
                        <div class="puber w-fit bg-slate-200 p-5 rounded-lg ">
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/pupuk-subsidi.png') }}" alt="ngopi tani"
                                    class="rounded-md hover:zoom" width="400" height="200">
                            </div>
                            <div class="sawah-digital-content text-center mt-2">
                                <p><strong>Si Puber</strong></p>
                            </div>
                        </div>
                        <!-- Card program Go Organik -->
                        <div class="organik w-fit bg-slate-200 p-5 rounded-lg ">
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/go-organik.png') }}" alt="ngopi tani"
                                    class="rounded-md hover:zoom" width="400" height="200">
                            </div>
                            <div class="organik-content text-center mt-2">
                                <p><strong>Go Organik</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>

<style>
    .image-container {
        position: relative;
        width: 400px;
        height: 200px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        transition: transform 0.3s ease;
    }

    .image-container img:hover {
        transform: scale(1.2);
    }

    .program-page {
        background-image: url('/assets/bg-program.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;

        /* Overlay warna */
        background-color: #f2f7f2d0;
        /* Putih dengan opacity */
        background-blend-mode: overlay;
        /* Gabungkan gambar dan warna */
    }
</style>
