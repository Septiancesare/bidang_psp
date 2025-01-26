<x-app-layout>

    <div class="title-news-header text-center font-bold dm-serif-text-regular text-3xl my-5">
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
            <div class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4">
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
                        class="news-card w-full bg-slate-50 p-3 flex flex-col lg:flex-row text-start gap-3 shadow-xl hover:bg-green-100 rounded-md ">
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

                            <div class="date-news">
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
