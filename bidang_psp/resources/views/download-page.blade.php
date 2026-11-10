<x-app-layout>
    {{-- Page Hero Header --}}
    <div class="download-page-hero relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white rounded-full translate-y-1/2 -translate-x-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="text-center">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white uppercase tracking-widest mb-4 fade-up">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    Unduhan
                </span>
                <h1 class="text-3xl lg:text-5xl font-bold text-white mb-3 tracking-tight fade-up">
                    Pusat Unduhan Dokumen
                </h1>
                <p class="text-green-200 text-base lg:text-lg max-w-xl mx-auto fade-up">
                    Kumpulan file, dokumen, dan panduan yang dapat Anda unduh.
                </p>
            </div>
        </div>
    </div>

    {{-- Search & Filter Bar --}}
    <div class="bg-white border-b border-gray-200 shadow-sm sticky z-40" style="top: var(--header-height, 72px);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <form action="{{ route('download.index') }}" method="GET" class="flex items-center gap-3 max-w-2xl mx-auto">
                <div class="flex-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0" />
                        </svg>
                    </div>
                    <input type="text" name="search" id="search-input"
                        placeholder="Cari dokumen..."
                        value="{{ request('search') }}"
                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm transition">
                </div>
                <button type="submit"
                    class="flex-shrink-0 inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 text-white text-sm font-semibold rounded-lg hover:bg-green-700 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    Cari
                </button>
                @if(request('search'))
                    <a href="{{ route('download.index') }}"
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-20">

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

        @if ($file->isEmpty())
            <div class="flex flex-col items-center justify-center py-20 text-center fade-up bg-white rounded-2xl shadow-sm border border-gray-100">
                <img src="{{ asset('assets/finding-file.png') }}" alt="Tidak ditemukan" class="w-40 opacity-40 mb-5">
                <h3 class="text-xl font-semibold text-gray-600 mb-2">
                    @if (request('search'))
                        Tidak ada dokumen untuk "{{ request('search') }}"
                    @else
                        Belum ada dokumen yang tersedia
                    @endif
                </h3>
                <p class="text-gray-400 text-sm max-w-sm">
                    @if (request('search'))
                        Coba kata kunci lain atau hapus filter pencarian Anda.
                    @else
                        Dokumen akan segera ditambahkan ke halaman ini.
                    @endif
                </p>
                @if(request('search'))
                    <a href="{{ route('download.index') }}"
                        class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 text-white text-sm font-semibold rounded-lg hover:bg-green-700 transition-colors">
                        Tampilkan Semua Dokumen
                    </a>
                @endif
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 stagger">
                @foreach ($file as $item)
                    @php
                        $colors = [
                            'pdf' => 'bg-red-50 text-red-600 border-red-200',
                            'docs' => 'bg-blue-50 text-blue-600 border-blue-200',
                            'docx' => 'bg-blue-50 text-blue-600 border-blue-200',
                            'xls' => 'bg-green-50 text-green-600 border-green-200',
                            'xlsx' => 'bg-green-50 text-green-600 border-green-200',
                            'csv' => 'bg-green-50 text-green-600 border-green-200',
                            'jpg' => 'bg-yellow-50 text-yellow-600 border-yellow-200',
                            'jpeg' => 'bg-yellow-50 text-yellow-600 border-yellow-200',
                            'png' => 'bg-yellow-50 text-yellow-600 border-yellow-200',
                            'zip' => 'bg-purple-50 text-purple-600 border-purple-200',
                            'rar' => 'bg-purple-50 text-purple-600 border-purple-200',
                        ];
                        $fileType = strtolower($item->type);
                        $colorClass = $colors[$fileType] ?? 'bg-gray-50 text-gray-600 border-gray-200'; 
                    @endphp
                    
                    <div class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-green-300 flex flex-col sm:flex-row p-5 gap-5 items-start sm:items-center">
                        <div class="flex-shrink-0 bg-gray-50 p-4 rounded-xl group-hover:bg-green-50 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 group-hover:text-green-500 transition-colors" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        
                        <div class="flex-1 min-w-0 w-full">
                            <h2 class="text-lg font-bold text-gray-900 group-hover:text-green-700 transition-colors truncate mb-1" title="{{ $item->title }}">
                                {{ $item->title }}
                            </h2>
                            <div class="flex items-center gap-3 text-sm">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold border uppercase {{ $colorClass }}">
                                    {{ $item->type }}
                                </span>
                                <span class="text-gray-400 flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $item->created_at->format('d M Y') }}
                                </span>
                            </div>
                        </div>

                        <div class="flex sm:flex-col gap-2 w-full sm:w-auto mt-2 sm:mt-0">
                            <a href="{{ route('download.view', $item->id) }}"
                                class="flex-1 sm:flex-none inline-flex justify-center items-center px-3 py-1.5 border border-green-200 text-sm font-medium rounded-lg text-green-700 bg-green-50 hover:bg-green-100 hover:border-green-300 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-1">
                                Lihat
                            </a>
                            <a href="{{ route('download.download', $item->id) }}"
                                class="flex-1 sm:flex-none inline-flex justify-center items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 transition-colors shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                Unduh
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-10 flex justify-center">
                <div class="pagination-wrapper">
                    {{ $file->appends(request()->input())->links() }}
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
