<x-app-layout>

    <div class="title-news-header text-center font-bold dm-serif-text-regular text-3xl my-5 fade-up">
        <h1>Berita Terkini PSP</h1>
    </div>
    <div class="search-container lg:mx-20 mb-5 px-5">
        <form action="{{ route('news.index') }}" method="GET" class="flex items-center">
            <input type="text" name="search" placeholder="Cari berita..." value="{{ request('search') }}"
                class="w-full px-4 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            <button type="submit"
                class="bg-green-500 text-white px-4 py-2 rounded-r-lg hover:bg-green-600 transition duration-300">
                Cari
            </button>
        </form>
    </div>

    <div class="news-container lg:mx-20 flex flex-col gap-2 p-5">
        @if ($news->isEmpty())
            <div class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File" class="w-1/4 opacity-40">
                <p>
                    @if (request('search'))
                        Tidak ada berita yang sesuai dengan pencarian "{{ request('search') }}".
                    @else
                        Belum ada berita yang tersedia.
                    @endif
                </p>
            </div>
        @else
            @foreach ($news as $item)
                <a href="{{ route('news-page.read', ['id' => $item->news_id]) }}">
                    <div
                        class="news-card w-full bg-slate-50 p-3 flex flex-col lg:flex-row text-start gap-3 shadow-xl hover:bg-green-100 rounded-md fade-up">
                        {{-- image section news card  --}}
                        <img src="{{ asset('storage/' . $item->image_news) }}" alt="news pict"
                            class="rounded-md lg:w-[250px] lg:h-[150px]  object-cover">
                        {{-- section news card  --}}
                        <div class="news-card-info">
                            {{-- section title card news  --}}
                            <div class="title-news-card lg:text-xl">
                                <h2>{{ $item->title_news }}</h2>
                            </div>
                            {{-- info desc news  --}}
                            <div class="news-snippet text-gray-500 lg:text-xl font-thin py-2">
                                {{ Str::limit(strip_tags($item->content_news), 150, '...') }}
                            </div>

                            <div class="date-news flex items-center gap-3">
                                <div class="news-admin flex gap-2 text-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="13">
                                        <path
                                            d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z" />
                                    </svg>
                                    <p>Admin</p>
                                </div>
                                <p class="text-green-500 text-sm ">{{ $item->created_at->format('Y-m-d') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif

        {{-- Pagination Links --}}
        <div class="pagination mt-5">
            {{ $news->appends(request()->input())->links() }}
        </div>
    </div>
</x-app-layout>
