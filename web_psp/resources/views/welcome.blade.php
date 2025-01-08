<x-guest-layout>
    <!-- Hero Section -->
    <div class="relative h-96  w-full overflow-hidden">
        <!-- Hero Images -->
        <div id="hero-slider" class="absolute inset-0">
            <img src="{{ asset('assets/saung-penyuluh.png') }}" alt="Hero Image"
                class="absolute h-full w-full object-cover transition-opacity duration-1000 opacity-100" data-index="1" />
            <img src="{{ asset('assets/smart-farming.png') }}" alt="Second Image"
                class="absolute h-full w-full object-cover transition-opacity duration-1000 opacity-0" data-index="2" />
            <img src="{{ asset('assets/sawah-digital.jpg') }}" alt="Third Image"
                class="absolute h-full w-full object-cover transition-opacity duration-1000 opacity-0" data-index="3" />
        </div>
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
        <!-- Sliding Text -->
        <div id="text-slider" class="absolute inset-0 flex flex-col items-center justify-center text-center">
            <h1 class="text-white text-4xl font-bold transform transition-transform duration-1000 translate-y-0 opacity-100 carter-one-regular"
                data-index="1">
                Bidang Penyuluhan, Sarana dan Prasarana Pertanian
            </h1>
            <h1 class="text-white text-4xl font-bold transform transition-transform duration-1000 translate-y-0 opacity-0 carter-one-regular"
                data-index="2">
                Dinas Pertanian Kabupaten Grobogan
            </h1>
            <h1 class="text-white text-4xl font-bold transform transition-transform duration-1000 translate-y-full opacity-0 carter-one-regular"
                data-index="3">
                Bersama Menuju Pertanian Berkelanjutan
            </h1>
            <h2 class="text-white italic mt-10 tracking-wider text-xl font-thin">"Supporting Farmers with Modern
                Knowledge and
                Reliable
                Facilities"</h2>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto my-10 ">
        {{-- Section for profile company  --}}
        <div class="profile-bidang text-center mx-12">
            <header class="font-bold" id="profile-bidang">
                <h1 class="profile-header text-lg text-slate-500 tracking-widest">Profile</h1>
                <h2 class="profile-bidang-header text-3xl text-green-900 tracking-wider">Bidang Penyuluhan, Sarana, dan
                    Prasarana
                    Pertanian</h2>
                <h3 class="profile-dinas-header text-2xl text-green-900 tracking-wider">Dinas Pertanian Kabupaten
                    Grobogan</h3>
            </header>
            <div class="content-profile tracking-widest text-justify lg:mx-56 my-10 leading-7  ">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet cupiditate dolorem aut fugit
                    soluta quod, provident consequatur sunt iure quaerat dolores suscipit doloribus odit a quasi!
                    Facilis nostrum veniam sed porro consequatur eum fugiat, quo iure eveniet possimus eos mollitia quia
                    laudantium magnam quasi quibusdam ipsa labore veritatis repellat doloremque. Molestias iste nesciunt
                    aspernatur, doloremque nulla officiis architecto incidunt labore eos, culpa qui perspiciatis
                    assumenda. Nemo, eius quas. Sed eligendi, impedit quae vel quia culpa, enim ex quaerat tempora
                    praesentium provident tempore totam cupiditate facere maxime ea, laboriosam magni voluptatibus sit
                    amet? Libero similique totam cum dignissimos aliquam! Rerum sequi asperiores odio similique
                    excepturi illum voluptate beatae sapiente, sunt quam quisquam magni voluptates numquam qui
                    consequuntur mollitia natus ut! Iusto vero explicabo repellendus mollitia adipisci iure sapiente
                    rerum ex, porro nam. Cum quia quos facilis minus saepe natus earum obcaecati vel voluptates! Veniam
                    eligendi eveniet fuga accusantium iusto autem quod voluptates. Alias, sequi! Sit quos doloremque
                    excepturi eum perspiciatis repellat velit incidunt ipsa autem, dolores eligendi illum ab eius a.
                    Quasi ut, blanditiis ullam facere nulla maxime, mollitia quos facilis error iure incidunt aliquam
                    commodi nisi! Vel culpa doloremque, dolor laboriosam explicabo illo doloribus animi consequatur,
                    magnam aperiam placeat?</p>
            </div>

            {{-- section image program in home page  --}}
            <div id="imageModal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content shadow-xl" id="modalImage">
                <div class="caption" id="modalCaption"></div>
            </div>

            <div class="program my-3 lg:mx-56">
                <div class="line-break lg:flex justify-center gap-1 mb-1">
                    <div class="program-card ">
                        <div class="image-container overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy.png') }}" alt="Dummy Image" class=" hover:zoom"
                                width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card ">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (2).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (3).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (4).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                </div>
                <div class="line-break lg:flex justify-center gap-1 mb-1">
                    <div class="program-card ">
                        <div class="image-container overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (5).png') }}" alt="Dummy Image"
                                class=" hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (6).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>

                    <div class="program-card">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (8).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                </div>
                <div class="line-break lg:flex justify-center gap-1 mb-1">
                    <div class="program-card ">
                        <div class="image-container overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy.png') }}" alt="Dummy Image"
                                class=" hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card ">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (2).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (3).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="image-container overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (4).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                </div>
                <div class="line-break lg:flex justify-center gap-1 mb-1">
                    <div class="program-card ">
                        <div class="image-container overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (5).png') }}" alt="Dummy Image"
                                class=" hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (6).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="image-container  overflow-hidden">
                            <img src="{{ asset('assets/Dummy Page/dummy (7).png') }}" alt="Dummy Image"
                                class="hover:zoom" width="400" height="200" onclick="openModal(this)">
                        </div>
                    </div>
                </div>

                <div class="button-more-program flex justify-center">
                    <a href="{{ route('program') }}"
                        class="w-auto p-4 my-3 border-2 border-green-600 rounded-3xl text-green-600 hover:bg-green-600 hover:text-white hover:bg-gradient-to-t from-black/50 to-transparent">Baca
                        Selengkapnya</a>
                </div>
            </div>
        </div>

        {{-- Section for company Management  --}}
        <div class="management-bidang text-center my-28 ">
            <header>
                <h2 class="management-bidang-header text-3xl text-green-900 font-bold">Tata Kelola Bidang PSP</h2>
            </header>
            <div class="management-bidang-content ">
                {{-- card pimpinan --}}
                <div class="management-line flex justify-center">
                    <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72">
                        <img src="{{ asset('assets/Dummy person/dummy person 1.png') }}" alt="">
                        <div class="card-management-info text-center mt-4">
                            <h2 class="font-bold">
                                Dr.Ir. Eng. George, Phd.
                            </h2>
                            <p>Kepala Bidang Penyuluhan Sarana dan Prasarana Pertanian</p>
                        </div>
                    </div>
                </div>


                {{-- Card staff line 3  --}}
                <div class="management-line md:flex justify-center gap-10">
                    <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72">
                        <img src="{{ asset('assets/Dummy person/dummy person 2.png') }}" alt="">
                        <div class="card-management-info text-center mt-4">
                            <h2 class="font-bold">
                                Dr.Ir. Eng. George, Phd.
                            </h2>
                            <p>Kepala Seksi 1</p>
                        </div>
                    </div>
                    <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72">
                        <img src="{{ asset('assets/Dummy person/dummy person 3.png') }}" alt="">
                        <div class="card-management-info text-center mt-4">
                            <h2 class="font-bold">
                                Dr.Ir. Eng. George, Phd.
                            </h2>
                            <p>Kepala Seksi 2</p>
                        </div>
                    </div>
                    <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72">
                        <img src="{{ asset('assets/Dummy person/dummy person 4.png') }}" alt="">
                        <div class="card-management-info text-center mt-4">
                            <h2 class="font-bold">
                                Dr.Ir. Eng. George, Phd.
                            </h2>
                            <p>Kepala Seksi 3</p>
                        </div>
                    </div>
                    <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72">
                        <img src="{{ asset('assets/Dummy person/dummy person 2.png') }}" alt="">
                        <div class="card-management-info text-center mt-4">
                            <h2 class="font-bold">
                                Dr.Ir. Eng. George, Phd.
                            </h2>
                            <p>Kepala Seksi 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Section for News  --}}
        <div class="news-bidang text-center">
            <header class="font-bold">
                <h2 class="news-bidang-header text-3xl text-green-900">Berita Terkini</h2>
            </header>
            <div class="news-container lg:mx-20 flex flex-col gap-2 p-5 ">

                {{-- News Card  --}}
                <a href="">
                    <div
                        class="news-card w-full bg-slate-50 p-3 flex text-start gap-3 shadow-xl hover:bg-green-100 rounded-md ">
                        {{-- image section news card  --}}
                        <img src="{{ asset('assets/ngopi-tani.png') }}" alt="news pict" width="250"
                            class="rounded-md ">
                        {{-- section news card  --}}
                        <div class="news-card-info">
                            {{-- section title card news  --}}
                            <div class="title-news-card lg:text-xl">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius quidem
                                    amet
                                    quis debitis dolore est, hic at saepe modi.</h2>
                            </div>
                            {{-- info desc news  --}}
                            <div class="desc-info-news-card text-gray-500 lg:text-xl font-thin py-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus fuga
                                repellendus, obcaecati dolorum explicabo iste non sequi reiciendis aut cum sunt alias
                                ...

                            </div>
                        </div>
                    </div>
                </a>

                <div class="button-more-news flex justify-center">
                    <a href="#"
                        class="w-auto p-4 my-3 border-2 border-green-600 rounded-3xl text-green-600 hover:bg-green-600 hover:text-white hover:bg-gradient-to-t from-black/50 to-transparent">Berita
                        Selengkapnya</a>
                </div>


            </div>
        </div>
</x-guest-layout>


{{-- Script Slider --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll("#hero-slider img");
        const texts = document.querySelectorAll("#text-slider h1");
        let currentIndex = 0;

        setInterval(() => {
            // Hide current image
            images[currentIndex].classList.remove("opacity-100");
            images[currentIndex].classList.add("opacity-0");

            // Hide current text
            texts[currentIndex].classList.remove("translate-y-0", "opacity-100");
            texts[currentIndex].classList.add("translate-y-full", "opacity-0");

            // Update index
            currentIndex = (currentIndex + 1) % images.length;

            // Show next image
            images[currentIndex].classList.remove("opacity-0");
            images[currentIndex].classList.add("opacity-100");

            // Show next text
            texts[currentIndex].classList.remove("translate-y-full", "opacity-0");
            texts[currentIndex].classList.add("translate-y-0", "opacity-100");
        }, 5000); // Change every 5 seconds
    });
</script>

{{-- Script to open modal image --}}
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

<style>
    @import url('https://fonts.googleapis.com/css2?family=Carter+One&display=swap');

    .carter-one-regular {
        font-family: "Carter One", serif;
        font-weight: 400;
        font-style: normal;
    }
</style>

<style>
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
        transition: transform 0.5s ease;
    }

    .image-container img:hover {
        transform: scale(1.2);
    }



    .management-line {
        margin-top: 1.2rem;
    }
</style>
