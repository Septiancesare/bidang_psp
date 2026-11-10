<x-app-layout>
    {{-- Page Hero Header --}}
    <div class="profile-page-hero relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 overflow-hidden h-[400px]">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/team-pict.png') }}" alt="Profile Bidang PSP" class="w-full h-full object-cover opacity-30 mix-blend-overlay">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white uppercase tracking-widest mb-4 fade-up">
                Tentang Kami
            </span>
            <h1 class="text-3xl lg:text-5xl font-bold text-white mb-4 tracking-tight max-w-4xl fade-up">
                Bidang Penyuluhan, Sarana, dan Prasarana Pertanian
            </h1>
            <p class="text-green-200 text-lg max-w-2xl fade-up">
                Dinas Pertanian Kabupaten Grobogan
            </p>
        </div>
    </div>

    <div class="bg-gray-50 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Profile Content --}}
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden mb-16 fade-up">
                <div class="p-8 sm:p-12">
                    <div class="flex items-center gap-4 mb-8 pb-8 border-b border-gray-100">
                        <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Profil Singkat</h2>
                            <p class="text-gray-500 text-sm">Informasi umum mengenai Bidang PSP</p>
                        </div>
                    </div>
                    
                    <div class="prose prose-green max-w-none text-gray-700 leading-loose text-justify text-lg">
                        @if (!empty($profilebidang) && $profilebidang->description)
                            {!! $profilebidang->description !!}
                        @else
                            <div class="text-center py-10">
                                <p class="text-gray-400">Belum ada deskripsi profil yang ditambahkan.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Visi & Misi --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20 stagger">
                {{-- Visi --}}
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 sm:p-10 relative overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-green-50 transition-transform group-hover:scale-150 duration-500 z-0"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Visi</h2>
                        <div class="prose prose-green text-gray-600 leading-relaxed text-justify">
                            @if (!empty($visi) && $visi->description)
                                {!! $visi->description !!}
                            @else
                                <p class="text-gray-400 italic text-center">Belum ada visi yang ditambahkan.</p>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Misi --}}
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 sm:p-10 relative overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-blue-50 transition-transform group-hover:scale-150 duration-500 z-0"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Misi</h2>
                        <div class="prose prose-blue text-gray-600 leading-relaxed text-justify">
                            @if (!empty($misi) && $misi->description)
                                {!! $misi->description !!}
                            @else
                                <p class="text-gray-400 italic text-center">Belum ada misi yang ditambahkan.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- Struktur Organisasi --}}
            <div class="text-center mb-12 fade-up">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 uppercase tracking-widest mb-4">
                    Struktur Organisasi
                </span>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Tata Kelola Bidang PSP</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Susunan kepengurusan dan staf di Bidang Penyuluhan, Sarana, dan Prasarana Pertanian.</p>
            </div>

            {{-- Kepala Bidang --}}
            <div class="flex justify-center mb-12 fade-up">
                @if (!empty($kepalaBidangStaff))
                    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden w-full max-w-sm group hover:shadow-lg transition-shadow">
                        <div class="aspect-[4/5] overflow-hidden relative bg-gray-100">
                            <img src="{{ asset('storage/' . $kepalaBidangStaff->image_member) }}" alt="{{ $kepalaBidangStaff->name_member }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-center text-white">
                                <h3 class="font-bold text-xl mb-1">{{ $kepalaBidangStaff->name_member }}</h3>
                                <p class="text-green-300 text-sm font-medium">Kepala Bidang Penyuluhan Sarana dan Prasarana Pertanian</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Kepala Seksi --}}
            @if ($kasi->isNotEmpty())
                <div class="flex flex-wrap justify-center gap-8 mb-12 stagger">
                    @foreach ($kasi as $kasiMember)
                        <div class="w-full sm:w-[calc(50%_-_1rem)] lg:w-[calc(33.333%_-_1.333rem)] max-w-sm bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden group hover:shadow-lg transition-shadow flex flex-col">
                            <div class="aspect-[4/5] overflow-hidden relative bg-gray-100">
                                <img src="{{ asset('storage/' . $kasiMember->image_member) }}" alt="{{ $kasiMember->name_member }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6 text-center flex flex-col flex-1">
                                <h3 class="font-bold text-lg text-gray-900 mb-1">{{ $kasiMember->name_member }}</h3>
                                <p class="text-green-600 text-sm font-medium mb-1">{{ $kasiMember->position_member }}</p>
                                <p class="text-gray-500 text-xs mt-auto">{{ $kasiMember->division_member }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            {{-- Staff --}}
            @if ($staff->isNotEmpty())
                <div class="flex flex-wrap justify-center gap-6 stagger">
                    @foreach ($staff as $staffMember)
                        <div class="w-full sm:w-[calc(50%_-_0.75rem)] lg:w-[calc(25%_-_1.125rem)] max-w-[280px] bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group hover:shadow-md transition-shadow flex flex-col">
                            <div class="aspect-square overflow-hidden relative bg-gray-100">
                                <img src="{{ asset('storage/' . $staffMember->image_member) }}" alt="{{ $staffMember->name_member }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-5 text-center bg-gray-50 group-hover:bg-green-50 transition-colors flex flex-col flex-1">
                                <h3 class="font-bold text-gray-900 mb-1 line-clamp-2">{{ $staffMember->name_member }}</h3>
                                <p class="text-green-600 text-xs font-medium mb-1">{{ $staffMember->position_member }}</p>
                                <p class="text-gray-500 text-[11px] line-clamp-2 mt-auto">{{ $staffMember->division_member }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</x-app-layout>

<style>
    .prose p {
        margin-bottom: 1em;
    }
    .prose p:last-child {
        margin-bottom: 0;
    }
</style>
