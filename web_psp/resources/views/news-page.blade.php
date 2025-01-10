<x-app-layout>
    <div class="title-news-header text-center font-bold dm-serif-text-regular text-3xl my-5">
        <h1>Berita Terkini PSP</h1>
    </div>

    <div class="news-container lg:mx-20 flex flex-col gap-2 p-5 ">

        {{-- News Card  --}}
        <a href="{{ route('newspage.read') }}">
            <div class="news-card w-full bg-slate-50 p-3 flex text-start gap-3 shadow-xl hover:bg-green-100 rounded-md ">
                {{-- image section news card  --}}
                <img src="{{ asset('assets/ngopi-tani.png') }}" alt="news pict" width="250" class="rounded-md ">
                {{-- section news card  --}}
                <div class="news-card-info">
                    {{-- section title card news  --}}
                    <div class="title-news-card lg:text-xl">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius quidem
                            amet
                            quis debitis dolore est, hic at saepe modi.</h2>
                    </div>
                    {{-- info desc news  --}}
                    <div class="desc-info-news-card text-gray-500 lg:text-xl font-thin py-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus fuga
                        repellendus, obcaecati dolorum explicabo iste non sequi reiciendis aut cum sunt alias
                        ...

                    </div>

                    <div class="date-news">
                        <p class="text-green-500 text-sm ">2025-01-24</p>
                    </div>
                </div>
            </div>
        </a>


        <a href="">
            <div
                class="news-card w-full bg-slate-50 p-3 flex text-start gap-3 shadow-xl hover:bg-green-100 rounded-md ">
                {{-- image section news card  --}}
                <img src="{{ asset('assets/ngopi-tani.png') }}" alt="news pict" width="250" class="rounded-md ">
                {{-- section news card  --}}
                <div class="news-card-info">
                    {{-- section title card news  --}}
                    <div class="title-news-card lg:text-xl">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius quidem
                            amet
                            quis debitis dolore est, hic at saepe modi.</h2>
                    </div>
                    {{-- info desc news  --}}
                    <div class="desc-info-news-card text-gray-500 lg:text-xl font-thin py-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus fuga
                        repellendus, obcaecati dolorum explicabo iste non sequi reiciendis aut cum sunt alias
                        ...

                    </div>

                    <div class="date-news">
                        <p class="text-green-500 text-sm ">2025-01-24</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="">
            <div
                class="news-card w-full bg-slate-50 p-3 flex text-start gap-3 shadow-xl hover:bg-green-100 rounded-md ">
                {{-- image section news card  --}}
                <img src="{{ asset('assets/ngopi-tani.png') }}" alt="news pict" width="250" class="rounded-md ">
                {{-- section news card  --}}
                <div class="news-card-info">
                    {{-- section title card news  --}}
                    <div class="title-news-card lg:text-xl">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius quidem
                            amet
                            quis debitis dolore est, hic at saepe modi.</h2>
                    </div>
                    {{-- info desc news  --}}
                    <div class="desc-info-news-card text-gray-500 lg:text-xl font-thin py-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus fuga
                        repellendus, obcaecati dolorum explicabo iste non sequi reiciendis aut cum sunt alias
                        ...

                    </div>

                    <div class="date-news">
                        <p class="text-green-500 text-sm ">2025-01-24</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="">
            <div
                class="news-card w-full bg-slate-50 p-3 flex text-start gap-3 shadow-xl hover:bg-green-100 rounded-md ">
                {{-- image section news card  --}}
                <img src="{{ asset('assets/ngopi-tani.png') }}" alt="news pict" width="250" class="rounded-md ">
                {{-- section news card  --}}
                <div class="news-card-info">
                    {{-- section title card news  --}}
                    <div class="title-news-card lg:text-xl">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius quidem
                            amet
                            quis debitis dolore est, hic at saepe modi.</h2>
                    </div>
                    {{-- info desc news  --}}
                    <div class="desc-info-news-card text-gray-500 lg:text-xl font-thin py-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus fuga
                        repellendus, obcaecati dolorum explicabo iste non sequi reiciendis aut cum sunt alias
                        ...
                    </div>

                    <div class="date-news">
                        <p class="text-green-500 text-sm ">2025-01-24</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</x-app-layout>
