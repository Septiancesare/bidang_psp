@php
    $theme = $theme ?? 'green';
    
    $colorClass = match($theme) {
        'blue' => 'text-blue-600',
        'yellow' => 'text-yellow-600',
        'purple' => 'text-purple-600',
        default => 'text-green-600',
    };
    
    $bgClass = match($theme) {
        'blue' => 'bg-blue-50',
        'yellow' => 'bg-yellow-50',
        'purple' => 'bg-purple-50',
        default => 'bg-green-50',
    };
@endphp

<article class="bg-white rounded-3xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 overflow-hidden fade-up">
    <div class="flex flex-col lg:flex-row">
        
        {{-- Gambar Program --}}
        @if (!empty($program->gambar))
            <div class="lg:w-2/5 xl:w-1/3 flex-shrink-0 cursor-pointer overflow-hidden bg-gray-100 relative group" onclick="openModal(this.querySelector('img'))">
                <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->judul }}" class="w-full h-full object-cover min-h-[300px] lg:min-h-full group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </svg>
                </div>
            </div>
        @endif

        {{-- Konten Program --}}
        <div class="p-8 sm:p-10 flex-1 flex flex-col justify-center">
            
            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $program->judul }}</h3>
            
            @if (!empty($program->waktu))
                <div class="flex items-center gap-2 mb-6">
                    <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg {{ $bgClass }} {{ $colorClass }} text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        {{ $program->waktu }}
                    </div>
                </div>
            @endif

            <div class="prose prose-{{ $theme === 'blue' || $theme === 'purple' || $theme === 'yellow' ? $theme : 'green' }} max-w-none text-gray-600 leading-relaxed text-justify">
                {!! $program->deskripsi !!}
            </div>
            
        </div>
    </div>
</article>
