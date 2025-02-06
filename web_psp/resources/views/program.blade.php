<!-- Layout utama menggunakan guest layout -->
<x-app-layout>
    <!-- Container utama dengan padding dan margin -->
    <!-- Judul utama program -->
    <div
        class="title sm:2xl md:text-5xl  flex justify-start items-end text-center text-bold py-5 lg:px-10 bg-slate-500 h-72 ">
        <h1><strong>PROGRAM UNGGULAN BIDANG PSP 2024</strong></h1>
    </div>
    <div class="container program-page py-2 lg:px-28 bg-slate-100">
        <!-- Card program dengan background abu-abu dan bayangan -->
        <div class="program p-2 m-3  bg-white rounded-lg  shadow-xl ">
            {{-- section image program  --}}
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

            <!-- Modal untuk gambar besar -->
            <div id="imageModal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content" id="modalImage">
                <div class="caption" id="modalCaption"></div>
            </div>

            <!-- Bagian A: Subkoor Penyuluhan -->
            <div class="penyuluhan mx-5 lg:mx-20">
                <!-- Judul seksi penyuluhan -->
                <div class="penyuluhan-title p-5 text-xl fade-up">
                    <strong>
                        <h2>A. Subkoor Penyuluhan</h2>
                    </strong>
                </div>
                <div class="penyuluhan-content">
                    @if ($penyuluhan->isEmpty())
                        <div class="text-center text-gray-500 text-lg mt-5 fade-up">
                            <p>Belum ada program yang dibagikan.</p>
                        </div>
                    @else
                        <!-- Container program penyuluhan dengan flex layout -->
                        @foreach ($penyuluhan as $penyuluh)
                            @php
                                $hasImage = !empty($penyuluh->gambar);
                                $hasTitle = !empty($penyuluh->judul);
                                $hasTime = !empty($penyuluh->waktu);
                            @endphp

                            @if (!$hasImage)
                                <div class="title-program my-5 text-lg font-bold fade-up">
                                    <h2>{{ $penyuluh->judul }}</h2>
                                </div>
                            @endif

                            @if ($hasImage)
                                <div class="penyuluhan-program lg:flex justify-evenly">
                                    <div class="card-program w-fit bg-slate-200 p-5 rounded-lg mb-4">
                                        <div class="image-container rounded-md overflow-hidden fade-up">
                                            <img src="{{ asset('storage/' . $penyuluh->gambar) }}"
                                                alt="{{ $penyuluh->judul }}" class="rounded-md hover:zoom"
                                                width="800" onclick="openModal(this)">
                                        </div>

                                        <div class="content text-center mt-2 fade-up">
                                            <p><strong>{{ $penyuluh->judul }}</strong></p>
                                            @if ($hasTime)
                                                <div class="info-time text-green-500 flex justify-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        width="15" fill="#6dff56">
                                                        <path
                                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                                    </svg>
                                                    <p>{{ $penyuluh->waktu }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="deskripsi-penyuluhan lg:mx-9 mt-5 tracking-wider text-justify leading-loose">
                                <div class="deskripsi fade-up">
                                    <p>{!! $penyuluh->deskripsi !!}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>


            <!-- Bagian B: Subkoor Sarana dan Prasarana -->
            <div class="sarpras mx-5 lg:mx-20">
                <!-- Judul seksi sarpras -->
                <div class="sarpras-title p-5 fade-up">
                    <strong>
                        <h2>B. Subkoor Pembiayaan Lahan Air</h2>
                    </strong>
                </div>

                <div class="sarpras-content">
                    <!-- Container program sarpras dengan flex layout -->
                    @if ($pla->isEmpty())
                        <div class="text-center text-gray-500 text-lg mt-5 fade-up">
                            <p>Belum ada program yang dibagikan.</p>
                        </div>
                    @else
                        <!-- Container program penyuluhan dengan flex layout -->
                        @foreach ($pla as $pla)
                            @php
                                $hasImage = !empty($pla->gambar);
                                $hasTitle = !empty($pla->judul);
                                $hasTime = !empty($pla->waktu);
                            @endphp

                            @if (!$hasImage)
                                <div class="title-program my-5 text-lg font-bold fade-up">
                                    <h2>{{ $pla->judul }}</h2>
                                </div>
                            @endif

                            @if ($hasImage)
                                <div class="pla-program lg:flex justify-evenly">
                                    <div class="card-program w-fit bg-slate-200 p-5 rounded-lg mb-4">
                                        <div class="image-container rounded-md overflow-hidden fade-up">
                                            <img src="{{ asset('storage/' . $pla->gambar) }}" alt="{{ $pla->judul }}"
                                                class="rounded-md hover:zoom" width="800" onclick="openModal(this)">
                                        </div>

                                        <div class="content text-center mt-2 fade-up">
                                            <p><strong>{{ $pla->judul }}</strong></p>
                                            @if ($hasTime)
                                                <div class="info-time text-green-500 flex justify-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        width="15" fill="#6dff56">
                                                        <path
                                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                                    </svg>
                                                    <p>{{ $pla->waktu }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="deskripsi-pla mx-9 mt-5 tracking-wider text-justify leading-loose">
                                <div class="deskripsi fade-up">
                                    <p>{!! $pla->deskripsi !!}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Bagian C: Subkoor Pupuk dan Pestisida -->
            <div class="pupuk-pestisida mx-5 lg:mx-20 mb-5  ">
                <!-- Judul seksi pupuk dan pestisida -->
                <div class="pupuk-pestisida-title p-5 fade-up">
                    <strong>
                        <h2>C. Subkoor Pupuk dan Pestisida</h2>
                    </strong>
                </div>
                <div class="pupuk-pestisida-content">
                    <!-- Container program pupuk dengan flex layout -->
                    @if ($pupuk->isEmpty())
                        <div class="text-center text-gray-500 text-lg mt-5 fade-up">
                            <p>Belum ada program yang dibagikan.</p>
                        </div>
                    @else
                        <!-- Container program penyuluhan dengan flex layout -->
                        @foreach ($pupuk as $pupuk)
                            @php
                                $hasImage = !empty($pupuk->gambar);
                                $hasTitle = !empty($pupuk->judul);
                                $hasTime = !empty($pupuk->waktu);
                            @endphp

                            @if (!$hasImage)
                                <div class="title-program my-5 text-lg font-bold fade-up">
                                    <h2>{{ $pupuk->judul }}</h2>
                                </div>
                            @endif

                            @if ($hasImage)
                                <div class="pupuk-program lg:flex justify-evenly">
                                    <div class="card-program w-fit bg-slate-200 p-5 rounded-lg mb-4">
                                        <div class="image-container rounded-md overflow-hidden fade-up">
                                            <img src="{{ asset('storage/' . $pupuk->gambar) }}"
                                                alt="{{ $pupuk->judul }}" class="rounded-md hover:zoom" width="800"
                                                onclick="openModal(this)">
                                        </div>

                                        <div class="content text-center mt-2 fade-up">
                                            <p><strong>{{ $pupuk->judul }}</strong></p>
                                            @if ($hasTime)
                                                <div class="info-time text-green-500 flex justify-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        width="15" fill="#6dff56">
                                                        <path
                                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                                    </svg>
                                                    <p>{{ $pupuk->waktu }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="deskripsi-pupuk mx-9 mt-5 tracking-wider text-justify leading-loose">
                                <div class="deskripsi fade-up">
                                    <p>{!! $pupuk->deskripsi !!}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="alsintan mx-5 lg:mx-20 mb-20">
                <!-- Judul seksi pupuk dan pestisida -->
                <div class="alsintan-title p-5 fade-up">
                    <strong>
                        <h2>D. Subkoor Alat dan Mesin Pertanian</h2>
                    </strong>
                </div>
                <div class="alsintan-content">
                    @if ($alsinta->isEmpty())
                        <div class="text-center text-gray-500 text-lg mt-5 fade-up">
                            <p>Belum ada program yang dibagikan.</p>
                        </div>
                    @else
                        <!-- Container program penyuluhan dengan flex layout -->
                        @foreach ($alsinta as $alsinta)
                            @php
                                $hasImage = !empty($alsinta->gambar);
                                $hasTitle = !empty($alsinta->judul);
                                $hasTime = !empty($alsinta->waktu);
                            @endphp

                            @if (!$hasImage)
                                <div class="title-program my-5 text-lg font-bold fade-up">
                                    <h2>{{ $alsinta->judul }}</h2>
                                </div>
                            @endif

                            @if ($hasImage)
                                <div class="alsinta-program lg:flex justify-evenly">
                                    <div class="card-program w-fit bg-slate-200 p-5 rounded-lg mb-4">
                                        <div class="image-container rounded-md overflow-hidden fade-up">
                                            <img src="{{ asset('storage/' . $alsinta->gambar) }}"
                                                alt="{{ $alsinta->judul }}" class="rounded-md hover:zoom"
                                                width="800" onclick="openModal(this)">
                                        </div>

                                        <div class="content text-center mt-2 fade-up">
                                            <p><strong>{{ $alsinta->judul }}</strong></p>
                                            @if ($hasTime)
                                                <div class="info-time text-green-500 flex justify-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        width="15" fill="#6dff56">
                                                        <path
                                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                                    </svg>
                                                    <p>{{ $alsinta->waktu }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="deskripsi-alsinta mx-9 mt-5 tracking-wider text-justify leading-loose">
                                <div class="deskripsi fade-up">
                                    <p>{!! $alsinta->deskripsi !!}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
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
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 90%;
        max-height: 90%;
        border-radius: 10px;
    }

    /* Tambahan untuk mobile view */
    @media (max-width: 768px) {
        .modal-content {
            max-width: 100%;
            max-height: 80%;
        }
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
