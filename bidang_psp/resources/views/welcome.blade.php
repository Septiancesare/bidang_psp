<x-app-layout>
    <!-- Hero Section -->
    <div class="hero-section relative min-h-[600px] w-full overflow-hidden">
        <!-- Hero Images -->
        <div id="hero-slider" class="absolute inset-0 bg-green-900">
            <img src="{{ asset('assets/sawah 3.png') }}" alt="Sawah 3"
                class="absolute h-full w-full object-cover transition-opacity duration-1000 opacity-100" />
            <img src="{{ asset('assets/sawah 2.png') }}" alt="Sawah 2"
                class="absolute h-full w-full object-cover transition-opacity duration-1000 opacity-0" />
            <img src="{{ asset('assets/sawah 6.png') }}" alt="Sawah 6"
                class="absolute h-full w-full object-cover transition-opacity duration-1000 opacity-0" />
        </div>
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
        
        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8">
            <div id="text-slider" class="relative w-full max-w-4xl h-48 flex items-center justify-center">
                <div class="absolute inset-0 flex flex-col items-center justify-center transition-all duration-1000 transform translate-y-0 opacity-100 slide-text">
                    <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs sm:text-sm font-semibold bg-white/20 text-white uppercase tracking-widest mb-6 backdrop-blur-sm border border-white/30">
                        Selamat Datang di Portal Resmi
                    </span>
                    <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tight mb-4 drop-shadow-lg font-serif">
                        Bidang Penyuluhan, Sarana dan Prasarana Pertanian
                    </h1>
                </div>
                <div class="absolute inset-0 flex flex-col items-center justify-center transition-all duration-1000 transform translate-y-8 opacity-0 slide-text">
                    <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs sm:text-sm font-semibold bg-white/20 text-white uppercase tracking-widest mb-6 backdrop-blur-sm border border-white/30">
                        Pemerintah Daerah
                    </span>
                    <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tight mb-4 drop-shadow-lg font-serif">
                        Dinas Pertanian Kabupaten Grobogan
                    </h1>
                </div>
                <div class="absolute inset-0 flex flex-col items-center justify-center transition-all duration-1000 transform translate-y-8 opacity-0 slide-text">
                    <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs sm:text-sm font-semibold bg-white/20 text-white uppercase tracking-widest mb-6 backdrop-blur-sm border border-white/30">
                        Visi Kami
                    </span>
                    <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tight mb-4 drop-shadow-lg font-serif">
                        Bersama Menuju Pertanian Berkelanjutan
                    </h1>
                </div>
            </div>
            
            <h2 class="text-green-300 italic mt-8 tracking-wider text-lg lg:text-2xl font-light drop-shadow-md">
                "Supporting Farmers with Modern Knowledge and Reliable Facilities"
            </h2>
            
            <div class="mt-12 flex gap-4 animate-bounce">
                <a href="#profile" class="p-3 bg-white/20 rounded-full text-white backdrop-blur-sm hover:bg-white/40 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="bg-gray-50 py-20" id="profile">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Profile Bidang --}}
            <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
                <span class="text-green-600 font-bold tracking-widest uppercase text-sm mb-2 block">Profil Bidang</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6 font-serif">Bidang Penyuluhan, Sarana, dan Prasarana Pertanian</h2>
                <div class="w-24 h-1 bg-green-500 mx-auto rounded-full mb-8"></div>
                
                @if (!$profilebidang || !$profilebidang->description)
                    <div class="text-center p-8 bg-white rounded-2xl shadow-sm border border-gray-100">
                        <p class="text-gray-500">Belum ada Data yang dibagikan.</p>
                    </div>
                @else
                    <div class="prose prose-green max-w-none text-gray-600 leading-relaxed text-justify sm:text-center text-lg">
                        {!! $profilebidang->description !!}
                    </div>
                @endif
            </div>

            {{-- Program Highlight Gallery --}}
            <div class="mb-24">
                @if ($prog->isEmpty())
                    <!-- No programs yet -->
                @else
                    <div class="flex flex-wrap justify-center gap-4 mb-10 stagger">
                        @foreach ($prog->take(8) as $index => $program)
                            <div class="w-[calc(50%_-_0.5rem)] md:w-[calc(25%_-_0.75rem)] max-w-[280px] aspect-square sm:aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group shadow-sm hover:shadow-xl transition-all duration-300 relative" onclick="openModal(this.querySelector('img'), {{ $index }})">
                                @if ($program->image_program)
                                    <img src="{{ asset('storage/' . $program->image_program) }}"
                                        alt="{{ $program->name_program }}" 
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                        </svg>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center fade-up">
                        <a href="{{ route('program.index') }}"
                            class="inline-flex items-center justify-center px-8 py-3.5 border border-transparent text-base font-medium rounded-full text-white bg-green-600 hover:bg-green-700 md:py-4 md:text-lg md:px-10 transition-all duration-300 shadow-md hover:shadow-lg">
                            Pelajari Program Selengkapnya
                        </a>
                    </div>
                @endif
            </div>
            
            {{-- Tata Kelola Bidang PSP --}}
            <div class="py-16 border-t border-gray-200">
                <div class="text-center mb-16 fade-up">
                    <span class="text-green-600 font-bold tracking-widest uppercase text-sm mb-2 block">Struktur Organisasi</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6 font-serif">Tata Kelola Bidang PSP</h2>
                    <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
                </div>

                {{-- Card Pimpinan --}}
                <div class="flex justify-center mb-16 fade-up">
                    @if ($kepalaBidangStaffs)
                        <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 max-w-sm w-full border border-gray-100 group">
                            <div class="aspect-[4/5] relative overflow-hidden bg-gray-100">
                                <img src="{{ asset('storage/' . $kepalaBidangStaffs->image_member) }}"
                                    alt="{{ $kepalaBidangStaffs->name_member }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-60"></div>
                            </div>
                            <div class="p-6 text-center bg-white relative -mt-16 mx-4 rounded-2xl shadow-lg">
                                <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $kepalaBidangStaffs->name_member }}</h3>
                                <p class="text-green-600 font-medium text-sm">Kepala Bidang PSP</p>
                            </div>
                        </div>
                    @else
                        <div class="text-center p-8 bg-white rounded-2xl shadow-sm border border-gray-100">
                            <p class="text-gray-500">Belum ada data pimpinan yang tersedia.</p>
                        </div>
                    @endif
                </div>

                {{-- Card Staff --}}
                @if ($staff->isNotEmpty())
                    <div class="flex flex-wrap justify-center gap-8 stagger">
                        @foreach ($staff as $person)
                            <div class="w-full sm:w-[calc(50%_-_1rem)] lg:w-[calc(33.333%_-_1.333rem)] xl:w-[calc(25%_-_1.5rem)] max-w-sm bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 group">
                                <div class="aspect-square relative overflow-hidden bg-gray-100">
                                    <img src="{{ asset('storage/' . $person->image_member) }}" 
                                         alt="{{ $person->name_member }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="p-6 text-center">
                                    <h3 class="text-lg font-bold text-gray-900 mb-1 line-clamp-1">{{ $person->name_member }}</h3>
                                    <p class="text-green-600 font-medium text-xs mb-1">{{ $person->position_member }}</p>
                                    <p class="text-gray-500 text-[11px] line-clamp-1">{{ $person->division_member }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Berita Terkini --}}
            <div class="py-16 border-t border-gray-200">
                <div class="flex flex-col sm:flex-row justify-between items-center mb-12 fade-up">
                    <div>
                        <span class="text-green-600 font-bold tracking-widest uppercase text-sm mb-2 block">Pusat Informasi</span>
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 font-serif">Berita Terkini</h2>
                    </div>
                    <a href="{{ route('news.index') }}" class="mt-4 sm:mt-0 inline-flex items-center text-green-600 font-semibold hover:text-green-800 transition-colors">
                        Lihat Semua Berita
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger">
                    @forelse ($news->take(3) as $item)
                        @if ($item->news_id)
                            <a href="{{ route('news-page.read', ['id' => $item->news_id]) }}" class="group block h-full">
                                <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 h-full flex flex-col border border-gray-100 hover:border-green-300 transform hover:-translate-y-1">
                                    {{-- Image --}}
                                    <div class="relative overflow-hidden aspect-video bg-gray-100">
                                        @if ($item->image_news)
                                            <img src="{{ asset('storage/' . $item->image_news) }}"
                                                alt="{{ $item->title_news }}"
                                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                        @endif
                                        <div class="absolute top-3 left-3">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-600 text-white shadow-sm">
                                                Berita
                                            </span>
                                        </div>
                                    </div>
                                    {{-- Content --}}
                                    <div class="p-6 flex flex-col flex-1">
                                        <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                <span>{{ $item->created_at->format('d M Y') }}</span>
                                            </div>
                                            <span>·</span>
                                            <span>Admin</span>
                                        </div>
                                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-700 transition-colors mb-3 line-clamp-2 leading-snug">
                                            {{ $item->title_news }}
                                        </h3>
                                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 flex-1">
                                            {{ Str::limit(strip_tags($item->content_news), 120, '...') }}
                                        </p>
                                    </div>
                                </article>
                            </a>
                        @endif
                    @empty
                        <div class="col-span-full text-center p-8 bg-white rounded-2xl shadow-sm border border-gray-100">
                            <p class="text-gray-500">Belum ada berita yang tersedia.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            {{-- FAQ --}}
            <div class="py-16 border-t border-gray-200 scroll-mt-24" id="faq">
                <div class="flex flex-col sm:flex-row justify-between items-center mb-12 fade-up">
                    <div>
                        <span class="text-green-600 font-bold tracking-widest uppercase text-sm mb-2 block">Pusat Bantuan</span>
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 font-serif">Pertanyaan yang Sering Diajukan</h2>
                    </div>
                    <a href="{{ route('faq.index') }}"
                        class="mt-4 sm:mt-0 inline-flex items-center text-green-600 font-semibold hover:text-green-800 transition-colors">
                        Lihat Semua FAQ
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                @if (($faqs ?? collect())->isEmpty())
                    <div class="text-center p-8 bg-white rounded-2xl shadow-sm border border-gray-100">
                        <p class="text-gray-500">Belum ada FAQ yang tersedia.</p>
                    </div>
                @else
                    <div class="space-y-4 max-w-4xl mx-auto">
                        @foreach ($faqs as $faq)
                            <div class="bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden fade-up">
                                <button type="button"
                                    class="faq-toggle w-full px-5 sm:px-6 py-5 flex items-center justify-between gap-4 text-left focus:outline-none focus:bg-gray-50 transition-colors"
                                    onclick="toggleHomeFaq(this)">
                                    <div class="flex items-center gap-4">
                                        <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-green-100 text-green-600 font-bold text-sm">
                                            Q
                                        </span>
                                        <h3 class="text-base sm:text-lg font-semibold text-gray-900">
                                            {{ $faq->question }}
                                        </h3>
                                    </div>
                                    <svg class="faq-chevron w-5 h-5 text-gray-400 flex-shrink-0 transform transition-transform duration-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <div class="home-faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50 border-t border-transparent">
                                    <div class="px-5 sm:px-6 py-5 flex gap-4">
                                        <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-600 font-bold text-sm">
                                            A
                                        </span>
                                        <div class="text-gray-600 text-sm sm:text-base leading-relaxed">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>

{{-- Image Modal Structure --}}
<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content shadow-2xl rounded-lg" id="modalImage">
    <div class="caption font-medium" id="modalCaption"></div>
    <button class="prev bg-white/20 hover:bg-white/40 backdrop-blur-sm" onclick="changeImage(-1)">&#10094;</button>
    <button class="next bg-white/20 hover:bg-white/40 backdrop-blur-sm" onclick="changeImage(1)">&#10095;</button>
</div>

{{-- Scripts --}}
<script>
    // Hero Slider Functionality
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll("#hero-slider img");
        const texts = document.querySelectorAll(".slide-text");
        let currentIndex = 0;

        if (images.length > 0 && texts.length > 0) {
            setInterval(() => {
                // Hide current
                images[currentIndex].classList.remove("opacity-100");
                images[currentIndex].classList.add("opacity-0");
                
                texts[currentIndex].classList.remove("translate-y-0", "opacity-100");
                texts[currentIndex].classList.add("translate-y-8", "opacity-0");

                // Increment
                currentIndex = (currentIndex + 1) % images.length;

                // Show next
                images[currentIndex].classList.remove("opacity-0");
                images[currentIndex].classList.add("opacity-100");

                texts[currentIndex].classList.remove("translate-y-8", "opacity-0");
                texts[currentIndex].classList.add("translate-y-0", "opacity-100");
            }, 5000);
        }
    });

    // Gallery Modal Functionality
    let currentImageIndex = 0;
    const galleryImages = [];

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('img[onclick^="openModal"]').forEach(img => {
            galleryImages.push({
                src: img.src,
                alt: img.alt
            });
        });
    });

    function openModal(imgElement, index) {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const captionText = document.getElementById("modalCaption");

        if (index === undefined || index === null) {
            index = galleryImages.findIndex(i => i.src === imgElement.src);
            if(index === -1) index = 0;
        }

        currentImageIndex = index;
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
        if(galleryImages.length === 0) return;
        
        currentImageIndex += step;
        if (currentImageIndex < 0) currentImageIndex = galleryImages.length - 1;
        if (currentImageIndex >= galleryImages.length) currentImageIndex = 0;

        const modalImg = document.getElementById("modalImage");
        const captionText = document.getElementById("modalCaption");

        modalImg.style.opacity = '0';
        setTimeout(() => {
            modalImg.src = galleryImages[currentImageIndex].src;
            captionText.textContent = galleryImages[currentImageIndex].alt;
            modalImg.style.opacity = '1';
        }, 200);
    }

    // Homepage FAQ accordion
    function toggleHomeFaq(button) {
        const answer = button.nextElementSibling;
        const icon = button.querySelector('.faq-chevron');

        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
            answer.classList.remove('border-gray-200');
            icon.classList.remove('rotate-180');
        } else {
            answer.style.maxHeight = answer.scrollHeight + 'px';
            answer.classList.add('border-gray-200');
            icon.classList.add('rotate-180');
        }
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
    /* Hero fills the viewport below the sticky header */
    .hero-section {
        height: calc(100vh - var(--header-height, 4rem));
    }

    /* FAQ answer typography */
    .home-faq-answer p {
        margin-bottom: 0.75em;
    }
    .home-faq-answer p:last-child {
        margin-bottom: 0;
    }
    .home-faq-answer ul {
        list-style-type: disc;
        padding-left: 1.5em;
        margin-bottom: 0.75em;
    }
    .home-faq-answer ol {
        list-style-type: decimal;
        padding-left: 1.5em;
        margin-bottom: 0.75em;
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 99999;
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
        top: 15px;
        right: 30px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        z-index: 100001;
        transition: color 0.3s;
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
        z-index: 100000;
        transition: background-color 0.3s;
    }
    .prev { left: 20px; }
    .next { right: 20px; }
    
    @media (max-width: 640px) {
        .prev, .next { width: 40px; height: 40px; font-size: 20px; }
    }
</style>
