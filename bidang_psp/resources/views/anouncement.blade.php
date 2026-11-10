<x-app-layout>
    {{-- Page Hero Header --}}
    <div class="anouncement-page-hero relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white rounded-full translate-y-1/2 -translate-x-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="text-center">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white uppercase tracking-widest mb-4 fade-up">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" />
                    </svg>
                    Pusat Informasi
                </span>
                <h1 class="text-3xl lg:text-5xl font-bold text-white mb-3 tracking-tight fade-up">
                    Papan Informasi
                </h1>
                <p class="text-green-200 text-base lg:text-lg max-w-xl mx-auto fade-up">
                    Pengumuman dan informasi terbaru terkait Bidang PSP.
                </p>
            </div>
        </div>
    </div>

    {{-- Search & Filter Bar --}}
    <div class="bg-white border-b border-gray-200 shadow-sm sticky z-40" style="top: var(--header-height, 72px);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <form action="{{ route('anouncement.index') }}" method="GET" class="flex items-center gap-3 max-w-2xl mx-auto">
                <div class="flex-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0" />
                        </svg>
                    </div>
                    <input type="text" name="search" id="search-input"
                        placeholder="Cari informasi..."
                        value="{{ request('search') }}"
                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm transition">
                </div>
                <button type="submit"
                    class="flex-shrink-0 inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 text-white text-sm font-semibold rounded-lg hover:bg-green-700 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    Cari
                </button>
                @if(request('search'))
                    <a href="{{ route('anouncement.index') }}"
                        class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2.5 bg-gray-100 text-gray-600 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors hidden sm:flex">
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
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-20">

        @if(request('search'))
            <div class="mb-6 flex items-center gap-2 text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
                <span>
                    Menampilkan hasil pencarian untuk: <strong class="text-green-700">"{{ request('search') }}"</strong>
                </span>
            </div>
        @endif

        @if ($anounce->isEmpty())
            <div class="flex flex-col items-center justify-center py-20 text-center fade-up bg-white rounded-2xl shadow-sm border border-gray-100">
                <img src="{{ asset('assets/finding-file.png') }}" alt="Tidak ditemukan" class="w-40 opacity-40 mb-5">
                <h3 class="text-xl font-semibold text-gray-600 mb-2">
                    @if (request('search'))
                        Tidak ada informasi untuk "{{ request('search') }}"
                    @else
                        Belum ada informasi yang tersedia
                    @endif
                </h3>
                <p class="text-gray-400 text-sm max-w-sm">
                    @if (request('search'))
                        Coba kata kunci lain atau hapus filter pencarian Anda.
                    @else
                        Informasi dan pengumuman akan segera ditambahkan.
                    @endif
                </p>
                @if(request('search'))
                    <a href="{{ route('anouncement.index') }}"
                        class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 text-white text-sm font-semibold rounded-lg hover:bg-green-700 transition-colors">
                        Tampilkan Semua Informasi
                    </a>
                @endif
            </div>
        @else
            <div class="space-y-4 stagger">
                @foreach ($anounce as $item)
                    <a href="{{ route('anouncement.read', ['id' => $item->id]) }}" class="block group">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:border-green-300 transition-all duration-300 p-5 sm:p-6 flex flex-col sm:flex-row gap-5 items-start sm:items-center">
                            
                            {{-- Icon / Date Badge --}}
                            <div class="flex-shrink-0 flex flex-col items-center justify-center bg-green-50 border border-green-100 rounded-xl w-16 h-16 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                                <span class="text-2xl font-bold text-green-700 group-hover:text-white leading-none">
                                    {{ $item->created_at->format('d') }}
                                </span>
                                <span class="text-xs font-medium text-green-600 group-hover:text-green-100 uppercase mt-0.5">
                                    {{ $item->created_at->format('M') }}
                                </span>
                            </div>

                            {{-- Content --}}
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-50 text-blue-700 border border-blue-200">
                                        Pengumuman
                                    </span>
                                </div>
                                <h2 class="text-lg font-bold text-gray-900 group-hover:text-green-700 transition-colors mb-2 line-clamp-2">
                                    {{ $item->title }}
                                </h2>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                                    <span class="flex items-center gap-1.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                        Admin
                                    </span>
                                    <span class="flex items-center gap-1.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $item->created_at->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                            
                            {{-- Arrow indicator --}}
                            <div class="hidden sm:flex flex-shrink-0 ml-4">
                                <span class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-50 text-gray-400 group-hover:bg-green-100 group-hover:text-green-600 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-0.5 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-10 flex justify-center">
                <div class="pagination-wrapper">
                    {{ $anounce->appends(request()->input())->links() }}
                </div>
            </div>
        @endif
    </div>
</x-app-layout>

<style>
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
