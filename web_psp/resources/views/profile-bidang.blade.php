<x-app-layout>
    {{-- image header  --}}
    <div class="header relative h-96  w-full overflow-hidden">
        <div class="image-header  inset-0">
            <img src="{{ asset('assets/team-pict.png') }}" alt="" class="absolute h-full w-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
    </div>

    <div class="container tracking-wider p-5 bg-slate-100">

        <div class="content-profile-page bg-white m-10 p-5 shadow-xl rounded-xl">
            {{-- Title profile bidang --}}
            <div class="profile-title text-center fade-up">
                <div class="h1-title font-bold text-xl text-gray-500">
                    <h1>Profile</h1>
                </div>
                <div class="h2-title text-3xl font-bold dm-serif-text-regular">
                    <h2>Bidang Penyuluhan, Sarana, dan Prasarana Pertanian</h2>
                </div>
            </div>

            {{-- Konten profile bidang --}}
            <div class="content-profile mx-40 text-justify my-3 leading-loose fade-up">
                @if (!empty($profilebidang))
                    {!! $profilebidang->description !!}
                @else
                    <div
                        class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                        <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File" class="w-1/4 opacity-40">
                        <p>Belum ada Data yang dibagikan.</p>
                    </div>
                @endif
            </div>

            {{-- Visi --}}
            <div class="title-visi-misi font-bold text-center text-xl mt-10 text-gray-600 stagger" id="visi-misi">
                <h1>Visi Misi Bidang</h1>
            </div>
            <div class="visi">
                <div class="title-visi text-center font-bold dm-serif-text-regular fade-in">
                    <h2 class="text-2xl">Visi</h2>
                </div>
                <div class="konten-visi text-justify mx-40 my-3 leading-loose stagger">
                    @if (!empty($visi))
                        {!! $visi->description !!}
                    @else
                        <div
                            class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                            <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File"
                                class="w-1/4 opacity-40">
                            <p>Belum ada Data Visi yang dibagikan.</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Misi --}}
            <div class="misi mx-40 my-10">
                <div class="title-misi text-center font-bold my-5 dm-serif-text-regular fade-up">
                    <h2 class="text-2xl">Misi</h2>
                </div>
                <div class="content-misi leading-loose fade-up">
                    @if (!empty($misi))
                        {!! $misi->description !!}
                    @else
                        <div
                            class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                            <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File"
                                class="w-1/4 opacity-40">
                            <p>Belum ada Data Misi yang dibagikan.</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Tata Kelola Bidang PSP --}}
            <div class="management-bidang text-center my-28" id="staff">
                <header>
                    <h2 class="management-bidang-header text-3xl text-green-900 font-bold stagger">Tata Kelola Bidang
                        PSP</h2>
                </header>
                <div class="management-bidang-content mt-10">
                    {{-- Card Pimpinan --}}
                    <div class="management-line flex justify-center fade-up">
                        @if (!empty($kepalaBidangStaff))
                            <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72 my-5">
                                <img src="{{ asset('storage/' . $kepalaBidangStaff->image_member) }}" alt="">
                                <div class="card-management-info text-center mt-4">
                                    <h2 class="font-bold">{{ $kepalaBidangStaff->name_member }}</h2>
                                    <p>Kepala Bidang Penyuluhan Sarana dan Prasarana Pertanian</p>
                                </div>
                            </div>
                        @else
                            <div
                                class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                                <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File"
                                    class="w-1/4 opacity-40">
                                <p>Belum ada data pimpinan yang dibagikan.</p>
                            </div>
                        @endif
                    </div>

                    {{-- Card Kepala Seksi --}}
                    <div class="management-line flex flex-wrap justify-center gap-10 my-5">
                        @if ($kasi->isNotEmpty())
                            @foreach ($kasi as $kasiMember)
                                <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72 fade-up">
                                    <img src="{{ asset('storage/' . $kasiMember->image_member) }}" alt="">
                                    <div class="card-management-info text-center mt-4">
                                        <h2 class="font-bold">{{ $kasiMember->name_member }}</h2>
                                        <p>{{ $kasiMember->position_member }}</p>
                                        <p>{{ $kasiMember->division_member }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div
                                class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                                <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File"
                                    class="w-1/4 opacity-40">
                                <p>Belum ada data kepala seksi yang dibagikan.</p>
                            </div>
                        @endif
                    </div>

                    {{-- Card Staff --}}
                    <div class="management-line flex flex-wrap justify-center gap-10 my-5">
                        @if ($staff->isNotEmpty())
                            @foreach ($staff as $staffMember)
                                <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72 fade-up">
                                    <img src="{{ asset('storage/' . $staffMember->image_member) }}" alt="">
                                    <div class="card-management-info text-center mt-4">
                                        <h2 class="font-bold">{{ $staffMember->name_member }}</h2>
                                        <p>{{ $staffMember->position_member }}</p>
                                        <p>{{ $staffMember->division_member }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div
                                class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                                <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File"
                                    class="w-1/4 opacity-40">
                                <p>Belum ada data staff yang dibagikan.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


    </div>

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
    </style>

</x-app-layout>
