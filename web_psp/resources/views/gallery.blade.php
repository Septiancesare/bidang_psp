<x-app-layout>
    <div class="container-gallery">
        <div class="gallery min-h-screen">
            <div class="title-gallery text-center font-bold text-3xl m-4">
                <h1>Gallery of PSP</h1>
            </div>

            {{-- section image program in home page  --}}
            <div id="imageModal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content shadow-xl" id="modalImage">
                <div class="caption" id="modalCaption"></div>
                <button class="prev" onclick="changeImage(-1)">&#10094;</button>
                <button class="next" onclick="changeImage(1)">&#10095;</button>
            </div>

            {{-- Sort Controls --}}
            <div class="flex justify-end px-4 mb-4 lg:mx-56">
                <select onchange="window.location.href = '{{ route('gallery.index') }}?sort=' + this.value"
                    class="bg-white border border-gray-300 rounded-md px-2 pr-10 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center">
                    <option value="desc" {{ $currentSort === 'desc' ? 'selected' : '' }}>Newest First</option>
                    <option value="asc" {{ $currentSort === 'asc' ? 'selected' : '' }}>Oldest First</option>
                </select>
            </div>

            <div class="gallery-content">
                {{-- Modal code remains the same --}}
                <div id="imageModal" class="modal">
                    <!-- ... existing modal code ... -->
                </div>

                @if ($pict->isEmpty())
                    <div
                        class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 my-24">
                        <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File" class="w-1/4 opacity-40">
                        <p>Belum ada gambar yang dibagikan.</p>
                    </div>
                @else
                    <div class="gallery my-3 lg:mx-56">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            @foreach ($pict as $index => $picture)
                                <div class="gallery-card">
                                    <div class="image-container overflow-hidden relative group">
                                        <img src="{{ asset('storage/' . $picture->file) }}" alt="{{ $picture->name }}"
                                            class="w-full h-full object-cover transition-transform duration-500"
                                            width="400" height="200"
                                            onclick="openModal(this, {{ $index }})">
                                        <div
                                            class="overlay absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                                            <div
                                                class="text-white text-center px-4 py-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                <p class="font-medium">{{ $picture->name }}</p>
                                                <p class="text-sm">{{ $picture->created_at->format('d M Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-6 px-4 lg:mx-56">
                        {{ $pict->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
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
        const images = [];

        // Populate images array when the page loads
        document.addEventListener("DOMContentLoaded", function() {
            // Get all gallery images
            const galleryImages = document.querySelectorAll('.gallery-card img');

            // Populate the images array with the correct data
            galleryImages.forEach((img) => {
                images.push({
                    src: img.src,
                    alt: img.alt
                });
            });
        });

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

            // Add a fade effect
            modalImg.style.opacity = '0';

            setTimeout(() => {
                modalImg.src = images[currentIndex].src;
                captionText.textContent = images[currentIndex].alt;
                modalImg.style.opacity = '1';
            }, 200);
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

        .modal-content {
            display: block;
            justify-content: center;
            align-items: center;
            margin: auto;
            max-width: 90%;
            margin-top: 20px;
            max-height: 90%;
            border-radius: 10px;
            transition: opacity 0.2s ease-in-out;
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
            font-size: 24px;
            transition: 0.3s;
            border: none;
            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 4px;
            z-index: 1002;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            width: 50px;
        }

        .prev {
            left: 15px;
        }

        .next {
            right: 15px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.7);
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

    <style>
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
            transition: all 0.5s ease;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        /* Remove the previous hover:zoom class as we're handling it differently now */
        .hover\:zoom {
            transition: transform 0.5s ease;
        }

        /* Overlay styling */
        .overlay {
            pointer-events: none;
            /* This ensures the click event still goes to the image */
        }

        /* Ensure the text is readable */
        .overlay p {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Optional: Add a slight zoom out effect when hovering to show more of the image */
        .image-container:hover img {
            transform: scale(1.1);
        }

        /* Ensure the gallery card maintains consistent dimensions */
        .gallery-card {
            overflow: hidden;
            position: relative;
        }

        /* Maintain aspect ratio  */
        .image-container {
            aspect-ratio: 2/1;
        }

        .pagination {
            @apply flex justify-center items-center gap-2;
        }

        .pagination>* {
            @apply px-3 py-1 rounded border border-gray-300;
        }

        .pagination .active {
            @apply bg-green-500 text-white border-green-500;
        }

        .pagination a:hover {
            @apply bg-gray-100;
        }
    </style>

</x-app-layout>
