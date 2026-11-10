<x-app-layout>
    {{-- Page Hero Header --}}
    <div class="program-page-hero relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 overflow-hidden h-[400px]">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/sawah 8.png') }}" alt="Program Unggulan PSP" class="w-full h-full object-cover opacity-40 mix-blend-overlay">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white uppercase tracking-widest mb-4 fade-up">
                Fokus Utama
            </span>
            <h1 class="text-3xl lg:text-5xl font-bold text-white mb-4 tracking-tight max-w-4xl fade-up">
                Program Unggulan Bidang PSP 2024
            </h1>
            <p class="text-green-200 text-lg max-w-2xl fade-up">
                Berbagai inisiatif dan kegiatan strategis untuk mendukung kemajuan pertanian di Kabupaten Grobogan.
            </p>
        </div>
    </div>

    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Program Highlight Images --}}
            @if ($prog->isNotEmpty())
                <div class="mb-20">
                    <div class="text-center mb-10 fade-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Galeri Program</h2>
                        <p class="text-gray-500 max-w-2xl mx-auto">Dokumentasi pelaksanaan program-program unggulan di lapangan.</p>
                    </div>
                    
                    <div class="flex flex-wrap justify-center gap-4 stagger">
                        @foreach ($prog->take(8) as $index => $program)
                            <div class="w-[calc(50%_-_0.5rem)] md:w-[calc(25%_-_0.75rem)] max-w-[280px] aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group shadow-sm hover:shadow-md transition-shadow relative" onclick="openModal(this.querySelector('img'), {{ $index }})">
                                <img src="{{ asset('storage/' . $program->image_program) }}" alt="{{ $program->name_program }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                    </svg>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- Programs Detail Sections --}}
            <div class="space-y-16">
                
                {{-- A. Penyuluhan --}}
                <section class="scroll-mt-24" id="penyuluhan">
                    <div class="flex items-center gap-4 mb-8 pb-4 border-b border-gray-200 fade-up">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-2xl flex items-center justify-center text-xl font-bold shadow-md">
                            A
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Subkoor Penyuluhan</h2>
                    </div>
                    
                    @if ($penyuluhan->isEmpty())
                        <div class="bg-white rounded-2xl p-10 text-center border border-gray-100 shadow-sm fade-up">
                            <p class="text-gray-500">Belum ada program yang dibagikan untuk bagian ini.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-1 gap-10">
                            @foreach ($penyuluhan as $item)
                                @include('components.program-card', ['program' => $item, 'theme' => 'green'])
                            @endforeach
                        </div>
                    @endif
                </section>

                {{-- B. Pembiayaan Lahan Air (PLA) --}}
                <section class="scroll-mt-24" id="pla">
                    <div class="flex items-center gap-4 mb-8 pb-4 border-b border-gray-200 fade-up">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-xl font-bold shadow-md">
                            B
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Subkoor Pembiayaan Lahan Air</h2>
                    </div>
                    
                    @if ($pla->isEmpty())
                        <div class="bg-white rounded-2xl p-10 text-center border border-gray-100 shadow-sm fade-up">
                            <p class="text-gray-500">Belum ada program yang dibagikan untuk bagian ini.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-1 gap-10">
                            @foreach ($pla as $item)
                                @include('components.program-card', ['program' => $item, 'theme' => 'blue'])
                            @endforeach
                        </div>
                    @endif
                </section>

                {{-- C. Pupuk dan Pestisida --}}
                <section class="scroll-mt-24" id="pupuk">
                    <div class="flex items-center gap-4 mb-8 pb-4 border-b border-gray-200 fade-up">
                        <div class="w-12 h-12 bg-yellow-500 text-white rounded-2xl flex items-center justify-center text-xl font-bold shadow-md">
                            C
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Subkoor Pupuk dan Pestisida</h2>
                    </div>
                    
                    @if ($pupuk->isEmpty())
                        <div class="bg-white rounded-2xl p-10 text-center border border-gray-100 shadow-sm fade-up">
                            <p class="text-gray-500">Belum ada program yang dibagikan untuk bagian ini.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-1 gap-10">
                            @foreach ($pupuk as $item)
                                @include('components.program-card', ['program' => $item, 'theme' => 'yellow'])
                            @endforeach
                        </div>
                    @endif
                </section>

                {{-- D. Alat dan Mesin Pertanian (Alsintan) --}}
                <section class="scroll-mt-24 mb-16" id="alsintan">
                    <div class="flex items-center gap-4 mb-8 pb-4 border-b border-gray-200 fade-up">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-2xl flex items-center justify-center text-xl font-bold shadow-md">
                            D
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Subkoor Alat dan Mesin Pertanian</h2>
                    </div>
                    
                    @if ($alsinta->isEmpty())
                        <div class="bg-white rounded-2xl p-10 text-center border border-gray-100 shadow-sm fade-up">
                            <p class="text-gray-500">Belum ada program yang dibagikan untuk bagian ini.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-1 gap-10">
                            @foreach ($alsinta as $item)
                                @include('components.program-card', ['program' => $item, 'theme' => 'purple'])
                            @endforeach
                        </div>
                    @endif
                </section>

            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content shadow-2xl rounded-lg" id="modalImage">
        <div class="caption font-medium" id="modalCaption"></div>
        <button class="prev bg-white/20 hover:bg-white/40 backdrop-blur-sm" onclick="changeImage(-1)">&#10094;</button>
        <button class="next bg-white/20 hover:bg-white/40 backdrop-blur-sm" onclick="changeImage(1)">&#10095;</button>
    </div>

    <script>
        let currentIndex = 0;
        let images = [];

        document.addEventListener("DOMContentLoaded", function() {
            // Populate images array from all program images
            document.querySelectorAll('img[onclick^="openModal"]').forEach(img => {
                images.push({
                    src: img.src,
                    alt: img.alt
                });
            });
        });

        function openModal(imgElement, index) {
            const modal = document.getElementById("imageModal");
            const modalImg = document.getElementById("modalImage");
            const captionText = document.getElementById("modalCaption");

            // Find index if not provided directly
            if (index === undefined || index === null) {
                index = images.findIndex(i => i.src === imgElement.src);
                if(index === -1) index = 0;
            }

            currentIndex = index;
            modal.style.display = "flex";
            modalImg.src = imgElement.src;
            captionText.textContent = imgElement.alt;

            document.addEventListener('keydown', handleKeyPress);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById("imageModal").style.display = "none";
            document.removeEventListener('keydown', handleKeyPress);
            document.body.style.overflow = 'auto';
        }

        function changeImage(step) {
            if(images.length === 0) return;
            
            currentIndex += step;
            if (currentIndex < 0) currentIndex = images.length - 1;
            if (currentIndex >= images.length) currentIndex = 0;

            const modalImg = document.getElementById("modalImage");
            const captionText = document.getElementById("modalCaption");

            modalImg.style.opacity = '0';
            setTimeout(() => {
                modalImg.src = images[currentIndex].src;
                captionText.textContent = images[currentIndex].alt;
                modalImg.style.opacity = '1';
            }, 200);
        }

        function handleKeyPress(event) {
            if (event.key === 'ArrowRight') changeImage(1);
            if (event.key === 'ArrowLeft') changeImage(-1);
            if (event.key === 'Escape') closeModal();
        }

        document.getElementById("imageModal").addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });
    </script>

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
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
        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 10001;
        }
        .close:hover { color: #bbb; }
        .caption {
            margin-top: 20px;
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
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            user-select: none;
            z-index: 10000;
        }
        .prev { left: 20px; }
        .next { right: 20px; }
    </style>
</x-app-layout>
