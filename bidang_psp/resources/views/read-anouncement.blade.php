<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto fade-up">
            
            {{-- Back Button & Breadcrumb --}}
            <nav class="flex items-center gap-4 text-sm font-medium text-gray-500 mb-8">
                <a href="{{ route('anouncement.index') }}" class="inline-flex items-center gap-1 text-green-600 hover:text-green-700 transition-colors bg-green-50 hover:bg-green-100 px-3 py-1.5 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Kembali
                </a>
                <span class="text-gray-300">|</span>
                <a href="{{ route('welcome') }}" class="hover:text-green-600 transition-colors hidden sm:block">Beranda</a>
                <span class="text-gray-300 hidden sm:block">/</span>
                <a href="{{ route('anouncement.index') }}" class="hover:text-green-600 transition-colors hidden sm:block">Informasi</a>
                <span class="text-gray-300 hidden sm:block">/</span>
                <span class="text-gray-900 truncate">Detail</span>
            </nav>

            <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 sm:p-10">
                    
                    {{-- Header --}}
                    <header class="mb-8 border-b border-gray-100 pb-8 text-center sm:text-left">
                        <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 uppercase tracking-widest mb-4">
                            Pengumuman
                        </div>
                        <h1 class="text-2xl sm:text-4xl font-bold text-gray-900 leading-tight mb-4">
                            {{ $anounceContent->title }}
                        </h1>
                        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-2 bg-gray-50 px-3 py-1.5 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium text-gray-700">Admin</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                </svg>
                                <span>{{ $anounceContent->created_at->format('d M Y, H:i') }}</span>
                            </div>
                        </div>
                    </header>

                    {{-- Content --}}
                    <div class="prose prose-green max-w-none text-gray-700 leading-loose text-justify">
                        {!! $anounceContent->content !!}
                    </div>
                    
                </div>
            </article>

        </div>
    </div>
</x-app-layout>

<style>
    .prose p {
        margin-bottom: 1.25em;
    }
    .prose p:last-child {
        margin-bottom: 0;
    }
    .prose a {
        color: #16a34a;
        text-decoration: underline;
    }
    .prose ul {
        list-style-type: disc;
        padding-left: 1.5em;
        margin-bottom: 1.25em;
    }
    .prose ol {
        list-style-type: decimal;
        padding-left: 1.5em;
        margin-bottom: 1.25em;
    }
    .prose h2, .prose h3, .prose h4 {
        color: #111827;
        font-weight: 700;
        margin-top: 2em;
        margin-bottom: 1em;
    }
    .prose h2 { font-size: 1.5rem; }
    .prose h3 { font-size: 1.25rem; }
</style>
