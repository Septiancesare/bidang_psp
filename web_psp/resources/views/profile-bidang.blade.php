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
            {{-- Title profile bidang  --}}
            <div class="profile-title text-center">
                <div class="h1-title font-bold text-xl text-gray-500">
                    <h1>
                        Profile
                    </h1>
                </div>

                <div class="h2-title text-3xl font-bold dm-serif-text-regular">
                    <h2>
                        Bidang Penyuluhan, Sarana, dan Prasarana Pertanian
                    </h2>
                </div>
            </div>

            {{-- Konten profile bidang --}}
            <div class="content-profile mx-40 text-justify my-3 leading-loose">
                {!! $profilebidang->description !!}
            </div>



            {{-- visi-misi bidang --}}
            <div class="title-visi-misi font-bold text-center text-xl mt-10 text-gray-600" id="visi-misi">
                <h1>Visi Misi Bidang</h1>
            </div>
            <div class="visi">
                <div class="title-visi text-center font-bold dm-serif-text-regular ">
                    <h2 class="text-2xl ">Visi</h2>
                </div>
                <div class="konten-visi text-justify mx-40 my-3 leading-loose">
                    {!! $visi->description !!}
                </div>
            </div>

            <div class="misi mx-40 my-10">
                <div class="title-misi text-center font-bold my-5 dm-serif-text-regular ">
                    <h2 class="text-2xl">Misi</h2>
                </div>
                <div class="content-misi leading-loose">
                    {!! $misi->description !!}
                </div>
            </div>

            <div class="management-bidang text-center my-28 " id="staff">
                <header>
                    <h2 class="management-bidang-header text-3xl text-green-900 font-bold">Tata Kelola Bidang PSP</h2>
                </header>
                <div class="management-bidang-content mt-10">
                    {{-- card pimpinan --}}
                    <div class="management-line flex justify-center">
                        <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72 bg-green-400 my-5">
                            <img src="{{ asset('storage/' . $kepalaBidangStaff->image_member) }}" alt="">
                            <div class="card-management-info text-center mt-4">
                                <h2 class="font-bold">
                                    {{ $kepalaBidangStaff->name_member }}
                                </h2>
                                <p>Kepala Bidang Penyuluhan Sarana dan Prasarana Pertanian</p>
                            </div>
                        </div>
                    </div>


                    {{-- Card kepala seksi line 3  --}}
                    <div class="management-line flex flex-wrap justify-center gap-10 my-5">
                        @foreach ($kasi as $staff)
                            <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72 bg-green-200">
                                <img src="{{ asset('storage/' . $staff->image_member) }}" alt="">
                                <div class="card-management-info text-center mt-4">
                                    <h2 class="font-bold">
                                        {{ $staff->name_member }}
                                    </h2>
                                    <p>{{ $staff->position_member }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    {{-- Card staff line 3  --}}
                    <div class="management-line flex flex-wrap justify-center gap-10 my-5">
                        @foreach ($staff as $staffbidang)
                            <div class="card-management flex justify-center flex-col shadow-lg p-5 w-72 bg-green-200">
                                <img src="{{ asset('storage/' . $staff->image_member) }}" alt="">
                                <div class="card-management-info text-center mt-4">
                                    <h2 class="font-bold">
                                        {{ $staffbidang->name_member }}
                                    </h2>
                                    <p>{{ $staffbidang->position_member }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>






                </div>
            </div>

        </div>

    </div>

</x-app-layout>
