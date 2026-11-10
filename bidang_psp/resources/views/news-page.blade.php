<x-app-layout>

    {{-- Page Hero Header --}}
    <div class="news-page-hero relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white rounded-full translate-y-1/2 -translate-x-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="text-center">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white uppercase tracking-widest mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                        <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                    </svg>
                    Portal Berita
                </span>
                <h1 class="text-3xl lg:text-5xl font-bold text-white mb-3 tracking-tight">
                    Berita Terkini PSP
                </h1>
                <p class="text-green-200 text-base lg:text-lg max-w-xl mx-auto">
                    Informasi terbaru seputar Bidang Penyuluhan, Sarana dan Prasarana Pertanian Kabupaten Grobogan
                </p>
            </div>
        </div>
    </div>

    {{-- Search & Filter Bar --}}
    <div class="bg-white border-b border-gray-200 shadow-sm sticky z-40" style="top: var(--header-height, 72px);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <form action="{{ route('news.index') }}" method="GET" class="flex items-center gap-3 max-w-xl mx-auto lg:mx-0">
                <div class="flex-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0" />
                        </svg>
                    </div>
                    <input type="text" name="search" id="search-input"
                        placeholder="Cari berita..."
                        value="{{ request('search') }}"
                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm transition">
                </div>
                <button type="submit"
                    class="flex-shrink-0 inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 text-white text-sm font-semibold rounded-lg hover:bg-green-700 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    Cari
                </button>
                @if(request('search'))
                    <a href="{{ route('news.index') }}"
                        class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2.5 bg-gray-100 text-gray-600 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        Reset
                    </a>
                @endif
            </form>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        @if(request('search'))
            <div class="mb-6 flex items-center gap-2 text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
                <span>
                    Menampilkan hasil pencarian untuk: <strong class="text-green-700">"{{ request('search') }}"</strong>
                    — <span class="text-gray-500">{{ $news->total() }} hasil ditemukan</span>
                </span>
            </div>
        @endif

        @if ($news->isEmpty())
            <div class="flex flex-col items-center justify-center py-20 text-center fade-up">
                <img src="{{ asset('assets/finding-file.png') }}" alt="Tidak ditemukan" class="w-40 opacity-40 mb-5">
                <h3 class="text-xl font-semibold text-gray-600 mb-2">
                    @if (request('search'))
                        Tidak ada hasil untuk "{{ request('search') }}"
                    @else
                        Belum ada berita tersedia
                    @endif
                </h3>
                <p class="text-gray-400 text-sm max-w-sm">
                    @if (request('search'))
                        Coba kata kunci lain atau hapus filter pencarian Anda.
                    @else
                        Berita akan segera tersedia. Pantau terus halaman ini!
                    @endif
                </p>
                @if(request('search'))
                    <a href="{{ route('news.index') }}"
                        class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 text-white text-sm font-semibold rounded-lg hover:bg-green-700 transition-colors">
                        Tampilkan Semua Berita
                    </a>
                @endif
            </div>
        @else
            {{-- News Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                @foreach ($news as $index => $item)
                    <a href="{{ route('news-page.read', ['id' => $item->news_id]) }}" class="group block fade-up">
                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 h-full flex flex-col border border-gray-100 hover:border-green-200 hover:-translate-y-1">

                            {{-- Image --}}
                            <div class="relative overflow-hidden h-48 bg-gray-100">
                                <img src="{{ asset('storage/' . $item->image_news) }}"
                                    alt="{{ $item->title_news }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute top-3 left-3">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-600 text-white">
                                        Berita
                                    </span>
                                </div>
                            </div>

                            {{-- Content --}}
                            <div class="p-5 flex flex-col flex-1">
                                {{-- Meta --}}
                                <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-green-600 font-medium">{{ $item->created_at->format('d M Y') }}</span>
                                    </div>
                                    <span>·</span>
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                        <span>{{ $item->creator ?? 'Admin' }}</span>
                                    </div>
                                </div>

                                {{-- Title --}}
                                <h2 class="text-base font-bold text-gray-900 group-hover:text-green-700 transition-colors mb-3 line-clamp-2 leading-snug">
                                    {{ $item->title_news }}
                                </h2>

                                {{-- Excerpt --}}
                                <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 flex-1">
                                    {{ Str::limit(strip_tags($item->content_news), 120, '...') }}
                                </p>

                                {{-- Read More --}}
                                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                                    <span class="text-sm font-semibold text-green-600 group-hover:text-green-800 flex items-center gap-1 transition-colors">
                                        Baca Selengkapnya
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-10 flex justify-center">
                <div class="pagination-wrapper">
                    {{ $news->appends(request()->input())->links() }}
                </div>
            </div>
        @endif
    </div>

</x-app-layout>

<style>
    .news-page-hero {
        margin-top: 0;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Pagination Styling */
    .pagination-wrapper nav {
        display: flex;
        justify-content: center;
    }

    .pagination-wrapper span[aria-current="page"] span,
    .pagination-wrapper .page-link-active {
        background-color: #16a34a !important;
        border-color: #16a34a !important;
        color: white !important;
    }
</style>
