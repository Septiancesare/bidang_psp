<!-- Layout utama menggunakan guest layout -->
<x-app-layout>
    <!-- Container utama dengan padding dan margin -->
    <!-- Judul utama program -->
    <div
        class="title sm:2xl md:text-5xl  flex justify-start items-end text-center text-bold py-5 px-10 bg-slate-500 h-72 ">
        <h1><strong>PROGRAM UNGGULAN BIDANG PSP 2024</strong></h1>
    </div>
    <div class="container program-page py-2 lg:px-28 bg-slate-100">
        <!-- Card program dengan background abu-abu dan bayangan -->
        <div class="program p-2 m-3  bg-white rounded-lg  shadow-xl ">

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
                    <div class="penyuluhan-program lg:flex justify-evenly ">
                        <!-- Card program Ngopi Tani -->
                        <div class="ngopi-tani w-fit bg-slate-200 p-5 rounded-lg mb-4">
                            <!-- Container gambar dengan rounded corner -->
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/ngopi-tani.png') }}" alt="saung penyuluh"
                                    class="rounded-md hover:zoom" width="400" height="200"
                                    onclick="openModal(this)">
                            </div>

                            <!-- Modal untuk gambar besar -->
                            <div id="imageModal" class="modal">
                                <span class="close" onclick="closeModal()">&times;</span>
                                <img class="modal-content" id="modalImage">
                                <div class="caption" id="modalCaption"></div>
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
                        <div class="saung w-fit bg-slate-200 p-5 rounded-lg overflow-hidden mb-4">
                            <!-- Container gambar dengan rounded corner -->
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/saung-penyuluh.png') }}" alt="saung penyuluh"
                                    class="rounded-md hover:zoom" width="400" height="200"
                                    onclick="openModal(this)">
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
                            <h3 class="text-lg">1. Peningkatan Kelas Kelompok Tani</h3>
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
                    <div class="sarpras-program lg:flex justify-evenly ">
                        <!-- Card program Sawah Digital -->
                        <div class="sawah-digital w-fit bg-slate-200 p-5 rounded-lg ">
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/sawah-digital.jpg') }}" alt="Sawah Digital"
                                    class="rounded-md hover:zoom" width="400" height="200"
                                    onclick="openModal(this)">
                            </div>
                            <div class="sawah-digital-content text-center mt-2">
                                <p><strong>Sawah Digital</strong></p>
                            </div>
                        </div>
                        <!-- Card program Smart Farming -->
                        <div class="smart-farming w-fit bg-slate-200 p-5 rounded-lg ">
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/smart-farming.png') }}" alt="Smart Farming"
                                    class="rounded-md hover:zoom" width="400" height="200"
                                    onclick="openModal(this)">
                            </div>
                            <div class="smart-farming-content text-center mt-2">
                                <p><strong>Smart Farming</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian C: Subkoor Pupuk dan Pestisida -->
            <div class="pupuk-pestisida mx-20 mb-5  ">
                <!-- Judul seksi pupuk dan pestisida -->
                <div class="pupuk-pestisida-title p-5">
                    <strong>
                        <h2>C. Subkoor Pupuk dan Pestisida</h2>
                    </strong>
                </div>
                <div class="pupuk-pestisida-content">
                    <!-- Container program pupuk dengan flex layout -->
                    <div class="pupuk-program lg:flex justify-evenly ">
                        <!-- Card program Si Puber -->
                        <div class="puber w-fit bg-slate-200 p-5 rounded-lg ">
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/pupuk-subsidi.png') }}" alt="Si Puber"
                                    class="rounded-md hover:zoom" width="400" height="200"
                                    onclick="openModal(this)">
                            </div>
                            <div class="sawah-digital-content text-center mt-2">
                                <p><strong>Si Puber</strong></p>
                            </div>
                        </div>
                        <!-- Card program Go Organik -->
                        <div class="organik w-fit bg-slate-200 p-5 rounded-lg ">
                            <div class="image-container rounded-md overflow-hidden">
                                <img src="{{ asset('assets/go-organik.png') }}" alt="Go Organik"
                                    class="rounded-md hover:zoom" width="400" height="200"
                                    onclick="openModal(this)">
                            </div>
                            <div class="organik-content text-center mt-2">
                                <p><strong>Go Organik</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alsintan mx-20 mb-20">
                <!-- Judul seksi pupuk dan pestisida -->
                <div class="alsintan-title p-5">
                    <strong>
                        <h2>D. Subkoor Alat dan Mesin Pertanian</h2>
                    </strong>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<style>
    .title {
        background-image: url('/assets/smart-farming.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;
        overflow: hidden;
    }

    .title::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.85));
        z-index: 1;

    }

    .title * {
        position: relative;
        z-index: 2;
        color: white;
    }

    .image-container {
        position: relative;
        width: auto;
        height: auto;
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



    /* Container untuk modal */
    .modal {
        display: none;
        /* Modal tersembunyi secara default */
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
        /* Latar belakang gelap */
    }

    /* Konten modal */
    .modal-content {
        display: block;
        justify-content: center;
        align-items: center;
        margin: auto;
        max-width: 90%;
        /* Batas ukuran gambar */
        margin-top: 20px;
        max-height: 90%;
        border-radius: 10px;
    }

    /* Close button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: white;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        z-index: 1001;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* Caption teks */
    .caption {
        text-align: center;
        color: white;
        margin-top: 15px;
        font-size: 16px;
    }
</style>

<script>
    function openModal(imgElement) {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const captionText = document.getElementById("modalCaption");

        modal.style.display = "block";
        modalImg.src = imgElement.src;
        captionText.textContent = imgElement.alt;
    }

    function closeModal() {
        const modal = document.getElementById("imageModal");
        modal.style.display = "none";
    }
</script>
