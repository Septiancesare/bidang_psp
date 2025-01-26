<x-app-layout>
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
            <h1 class="text-white text-xl lg:text-5xl  font-bold transform transition-transform duration-1000 translate-y-0 opacity-100 carter-one-regular"
                data-index="1">
                Bidang Penyuluhan, Sarana dan Prasarana Pertanian
            </h1>
            <h1 class="text-white text-xl lg:text-5xl font-bold transform transition-transform duration-1000 translate-y-0 opacity-0 carter-one-regular"
                data-index="2">
                Dinas Pertanian Kabupaten Grobogan
            </h1>
            <h1 class="text-white text-xl lg:text-5xl font-bold transform transition-transform duration-1000 translate-y-full opacity-0 carter-one-regular"
                data-index="3">
                Bersama Menuju Pertanian Berkelanjutan
            </h1>
            <h2 class="text-white italic mt-10 tracking-wider text-md lg:text-xl font-thin">"Supporting Farmers with
                Modern
                Knowledge and
                Reliable
                Facilities"</h2>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto my-10 ">
        {{-- Section for profile company  --}}
        <div class="profile-bidang text-center mx-12">
            <div>
                <header class="font-bold " id="profile-bidang">
                    <h1 class="profile-header text-lg text-slate-500 tracking-widest">Profile</h1>
                    <h2 class="profile-bidang-header text-3xl text-green-900 tracking-wider">Bidang Penyuluhan, Sarana,
                        dan
                        Prasarana
                        Pertanian</h2>
                    <h3 class="profile-dinas-header text-2xl text-green-900 tracking-wider">Dinas Pertanian Kabupaten
                        Grobogan</h3>
                </header>
                <div class="content-profile tracking-widest text-justify lg:mx-56 my-10 leading-7  ">
                    {!! $profilebidang->description !!}
                </div>
            </div>

            {{-- section image program in home page  --}}
            <div id="imageModal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content shadow-xl" id="modalImage">
                <div class="caption" id="modalCaption"></div>
                <button class="prev" onclick="changeImage(-1)">&#10094;</button>
                <button class="next" onclick="changeImage(1)">&#10095;</button>
            </div>

            <div class="program my-3 lg:mx-56">
                @php
                    $chunks = $prog->chunk(4);
                @endphp

                @foreach ($chunks as $chunk)
                    <div class="line-break lg:flex justify-center gap-1 mb-1">
                        @foreach ($chunk as $program)
                            <div class="program-card">
                                <div class="image-container overflow-hidden">
                                    <img src="{{ asset('storage/' . $program->image_program) }}"
                                        alt="{{ $program->name_program }}" class="hover:zoom" width="400"
                                        height="200"
                                        onclick="openModal(this, {{ $loop->parent->index * 4 + $loop->index }})">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>


            <div class="button-more-program flex justify-center">
                <a href="{{ route('program.index') }}"
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
                    <img src="{{ asset('storage/' . $kepalaBidangStaffs->image_member) }}" alt="">
                    <div class="card-management-info text-center mt-4">
                        <h2 class="font-bold">
                            {{ $kepalaBidangStaffs->name_member }}
                        </h2>
                        <p>Kepala Bidang Penyuluhan Sarana dan Prasarana Pertanian</p>
                    </div>
                </div>
            </div>


            {{-- Card staff line 3  --}}
            <div class="management-line flex flex-wrap justify-center gap-10">
                @foreach ($staff as $person)
                    <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72">
                        <img src="{{ asset('storage/' . $person->image_member) }}" alt="">
                        <div class="card-management-info text-center mt-4">
                            <h2 class="font-bold">
                                {{ $person->name_member }}
                            </h2>
                            <p>{{ $person->position_member }}</p>
                        </div>
                    </div>
                @endforeach
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
            @foreach ($news as $item)
                <a href="{{ route('news-page.read', ['id' => $item->news_id]) }}">
                    <div
                        class="news-card w-full bg-slate-50 p-3 flex flex-col lg:flex-row text-start gap-3 shadow-xl hover:bg-green-100 rounded-md ">
                        <img src="{{ asset('storage/' . $item->image_news) }}" alt="news pict"
                            class="rounded-md lg:w-[250px] lg:h-[150px]  object-cover">
                        <div class="news-card-info">
                            <div class="title-news-card lg:text-xl">
                                <h2>{{ $item->title_news }}</h2>
                            </div>
                            <div class="news-snippet text-gray-500 lg:text-xl font-thin py-2">
                                {{ Str::limit(strip_tags($item->content_news), 150, '...') }}
                            </div>
                            <div class="date-news">
                                <p class="text-green-500 text-sm ">{{ $item->created_at->format('Y-m-d') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

            <div class="button-more-news flex justify-center">
                <a href="{{ route('news.index') }}"
                    class="w-auto p-4 my-3 border-2 border-green-600 rounded-3xl text-green-600 hover:bg-green-600 hover:text-white hover:bg-gradient-to-t from-black/50 to-transparent">Berita
                    Selengkapnya</a>
            </div>


        </div>
    </div>
</x-app-layout>


{{-- Script Slider --}}
{{-- Place this script after your HTML content --}}
<script>
    // Hero Slider Functionality
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll("#hero-slider img");
        const texts = document.querySelectorAll("#text-slider h1");
        let currentIndex = 0;

        setInterval(() => {
            images[currentIndex].classList.remove("opacity-100");
            images[currentIndex].classList.add("opacity-0");

            texts[currentIndex].classList.remove("translate-y-0", "opacity-100");
            texts[currentIndex].classList.add("translate-y-full", "opacity-0");

            currentIndex = (currentIndex + 1) % images.length;

            images[currentIndex].classList.remove("opacity-0");
            images[currentIndex].classList.add("opacity-100");

            texts[currentIndex].classList.remove("translate-y-full", "opacity-0");
            texts[currentIndex].classList.add("translate-y-0", "opacity-100");
        }, 5000);
    });

    // Gallery Modal Functionality
    let currentIndex = 0;
    const images = [
        @foreach ($prog as $program)
            {
                src: "{{ asset('storage/' . $program->image_program) }}",
                alt: "{{ $program->name_program }}"
            }
            @if (!$loop->last)
                ,
            @endif
        @endforeach
    ];

    // Modal Functions
    function openModal(imgElement, index) {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const captionText = document.getElementById("modalCaption");

        currentIndex = index;
        modal.style.display = "block";
        modalImg.src = imgElement.src;
        captionText.textContent = imgElement.alt;

        // Add event listeners
        document.addEventListener('keydown', handleKeyPress);
    }

    function closeModal() {
        const modal = document.getElementById("imageModal");
        modal.style.display = "none";

        // Remove event listeners
        document.removeEventListener('keydown', handleKeyPress);
    }

    function changeImage(step) {
        currentIndex += step;

        // Handle wrapping
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }

        const modalImg = document.getElementById("modalImage");
        const captionText = document.getElementById("modalCaption");

        modalImg.src = images[currentIndex].src;
        captionText.textContent = images[currentIndex].alt;
    }

    function handleKeyPress(event) {
        switch (event.key) {
            case 'ArrowRight':
                changeImage(1);
                break;
            case 'ArrowLeft':
                changeImage(-1);
                break;
            case 'Escape':
                closeModal();
                break;
        }
    }

    // Close modal when clicking outside the image
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById("imageModal");
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    });
</script>

{{-- Script to open modal image --}}
{{-- <script>
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
</script> --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Carter+One&display=swap');

    .carter-one-regular {
        font-family: "Carter One", serif;
        font-weight: 400;
        font-style: normal;
    }
</style>

<style>
    .card-management img {
        height: 300px;
        /* Sesuaikan dengan tinggi yang diinginkan */
        width: 100%;
        /* Agar gambar memenuhi lebar kartu */
        object-fit: cover;
        /* Memastikan gambar terpotong sesuai dimensi */
        border-radius: 8px;
        /* Opsional, untuk memberi sudut melengkung */
    }

    /* Container untuk modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        display: block;
        justify-content: center;
        align-items: center;
        margin: auto;
        max-width: 90%;
        margin-top: 20px;
        max-height: 90%;
        border-radius: 10px;
    }

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

    .caption {
        text-align: center;
        color: white;
        margin-top: 15px;
        font-size: 16px;
    }

    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.3s;
        border: none;
        background-color: transparent;
        z-index: 1002;
    }

    .prev {
        left: 15px;
    }

    .next {
        right: 15px;
    }

    .prev:hover,
    .next:hover {
        color: #bbb;
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

    .content-profile p {
        padding: 0.5rem 0;
    }
</style>
