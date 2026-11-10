<x-app-layout>
    {{-- Page Hero Header --}}
    <div class="gallery-page-hero relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white rounded-full translate-y-1/2 -translate-x-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="text-center">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white uppercase tracking-widest mb-4 fade-up">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                    Galeri Foto
                </span>
                <h1 class="text-3xl lg:text-5xl font-bold text-white mb-3 tracking-tight fade-up">
                    Galeri Kegiatan PSP
                </h1>
                <p class="text-green-200 text-base lg:text-lg max-w-xl mx-auto fade-up">
                    Dokumentasi kegiatan dan program kerja Bidang Penyuluhan, Sarana dan Prasarana Pertanian.
                </p>
            </div>
        </div>
    </div>

    {{-- Filter Bar --}}
    <div class="bg-white border-b border-gray-200 shadow-sm sticky z-40" style="top: var(--header-height, 72px);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center max-w-5xl mx-auto">
                <div class="text-sm text-gray-500 hidden sm:block">
                    Menampilkan total <span class="font-semibold text-gray-900">{{ $pict->total() }}</span> foto
                </div>
                <div class="flex items-center gap-2 w-full sm:w-auto">
                    <label for="sort" class="text-sm font-medium text-gray-700 hidden sm:block">Urutkan:</label>
                    <select id="sort" onchange="window.location.href = '{{ route('gallery.index') }}?sort=' + this.value"
                        class="w-full sm:w-auto bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 transition-colors">
                        <option value="desc" {{ $currentSort === 'desc' ? 'selected' : '' }}>Terbaru</option>
                        <option value="asc" {{ $currentSort === 'asc' ? 'selected' : '' }}>Terlama</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 mb-20">
        
        {{-- Modal --}}
        <div id="imageModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content shadow-2xl rounded-lg" id="modalImage">
            <div class="modal-controls">
                <a href="#" id="downloadButton" class="download-btn bg-white/20 hover:bg-white/40 text-white p-2 rounded-lg backdrop-blur-sm transition-all shadow-lg" title="Unduh Gambar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                </a>
            </div>
            <div class="caption font-medium" id="modalCaption"></div>
            <button class="prev bg-white/20 hover:bg-white/40 backdrop-blur-sm" onclick="changeImage(-1)">&#10094;</button>
            <button class="next bg-white/20 hover:bg-white/40 backdrop-blur-sm" onclick="changeImage(1)">&#10095;</button>
        </div>

        @if ($pict->isEmpty())
            <div class="flex flex-col items-center justify-center py-20 text-center fade-up bg-white rounded-2xl shadow-sm border border-gray-100 max-w-4xl mx-auto">
                <img src="{{ asset('assets/finding-file.png') }}" alt="Tidak ditemukan" class="w-40 opacity-40 mb-5">
                <h3 class="text-xl font-semibold text-gray-600 mb-2">
                    Belum ada foto yang tersedia
                </h3>
                <p class="text-gray-400 text-sm max-w-sm">
                    Dokumentasi galeri akan segera ditambahkan.
                </p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-7xl mx-auto stagger">
                @foreach ($pict as $index => $picture)
                    <div class="gallery-card group relative bg-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 aspect-[4/3] cursor-pointer" onclick="openModal(this.querySelector('img'), {{ $index }})">
                        <img src="{{ asset('storage/' . $picture->file) }}" 
                             alt="{{ $picture->name }}"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                             data-id="{{ $picture->id }}" 
                             data-index="{{ $index }}">
                        
                        {{-- Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 line-clamp-2">
                                {{ $picture->name }}
                            </h3>
                            <p class="text-green-300 text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                                {{ $picture->created_at->format('d M Y') }}
                            </p>
                        </div>

                        {{-- Zoom Icon --}}
                        <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-12 flex justify-center">
                <div class="pagination-wrapper">
                    {{ $pict->appends(request()->input())->links() }}
                </div>
            </div>
        @endif
    </div>

    <script>
        // Gallery Modal Functionality
        let currentIndex = 0;
        const images = [];

        // Populate images array when the page loads
        document.addEventListener("DOMContentLoaded", function() {
            const galleryImages = document.querySelectorAll('.gallery-card img');
            galleryImages.forEach((img) => {
                images.push({
                    src: img.src,
                    alt: img.alt,
                    id: img.dataset.id
                });
            });

            const downloadButton = document.getElementById('downloadButton');
            downloadButton.addEventListener('click', function(e) {
                e.preventDefault();
                const currentImage = images[currentIndex];
                if (currentImage && currentImage.id) {
                    window.location.href = `/gallery/${currentImage.id}`;
                }
            });
        });

        function openModal(imgElement, index) {
            const modal = document.getElementById("imageModal");
            const modalImg = document.getElementById("modalImage");
            const captionText = document.getElementById("modalCaption");
            const downloadButton = document.getElementById("downloadButton");

            currentIndex = index;
            modal.style.display = "flex"; // Changed to flex for centering
            modalImg.src = imgElement.src;
            captionText.textContent = imgElement.alt;
            downloadButton.href = `/gallery/${imgElement.dataset.id}`;

            document.addEventListener('keydown', handleKeyPress);
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function closeModal() {
            const modal = document.getElementById("imageModal");
            modal.style.display = "none";
            document.removeEventListener('keydown', handleKeyPress);
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        function changeImage(step) {
            currentIndex += step;
            if (currentIndex < 0) {
                currentIndex = images.length - 1;
            } else if (currentIndex >= images.length) {
                currentIndex = 0;
            }

            const modalImg = document.getElementById("modalImage");
            const captionText = document.getElementById("modalCaption");
            const downloadButton = document.getElementById("downloadButton");

            modalImg.style.opacity = '0';

            setTimeout(() => {
                modalImg.src = images[currentIndex].src;
                captionText.textContent = images[currentIndex].alt;
                downloadButton.href = `/gallery/${images[currentIndex].id}`;
                modalImg.style.opacity = '1';
            }, 200);
        }

        function handleKeyPress(event) {
            switch (event.key) {
                case 'ArrowRight': changeImage(1); break;
                case 'ArrowLeft': changeImage(-1); break;
                case 'Escape': closeModal(); break;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById("imageModal");
            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    closeModal();
                }
            });
        });
    </script>

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 9999; /* Ensure it's above everything */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            flex-direction: column;
            backdrop-filter: blur(5px);
        }

        .modal-content {
            max-width: 90%;
            max-height: 80vh;
            object-fit: contain;
            transition: opacity 0.2s ease-in-out;
        }

        .modal-controls {
            position: absolute;
            top: 20px;
            right: 80px;
            z-index: 10001;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
            z-index: 10001;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .caption {
            margin-top: 20px;
            text-align: center;
            color: #ccc;
            font-size: 1.125rem;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            color: white;
            font-weight: bold;
            font-size: 24px;
            transition: 0.3s;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            user-select: none;
            z-index: 10000;
        }

        .prev { left: 20px; }
        .next { right: 20px; }

        @media (max-width: 640px) {
            .prev, .next { width: 40px; height: 40px; font-size: 20px; }
            .modal-content { max-width: 95%; max-height: 70vh; }
        }

        /* Pagination Styling */
        .pagination-wrapper nav { display: flex; justify-content: center; }
        .pagination-wrapper span[aria-current="page"] span,
        .pagination-wrapper .page-link-active { background-color: #16a34a !important; border-color: #16a34a !important; color: white !important; }
    </style>
</x-app-layout>
