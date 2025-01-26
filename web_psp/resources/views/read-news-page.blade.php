<x-app-layout>
    <div class="mx-10 lg:ml-32 my-3">
        <div class="page lg:flex gap-10">
            <div class="main-content">
                <div class="title-news text-2xl  w-full font-bold">
                    <h1>{{ $newsItem->title_news }}</h1>
                </div>
                <div class="info-news my-3">
                    <div class="date-publish">
                        {{ $newsItem->created_at->format('Y-m-d') }}
                    </div>
                    <div class="admin flex gap-4 my-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="15">
                            <path
                                d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z" />
                        </svg>
                        <p>Admin</p>
                    </div>
                </div>
                <div class="news-container my-10">

                    {{-- image-container  --}}
                    <div class="image-news lg:mx-40 flex justify-center w-auto">
                        <img src="{{ asset('storage/' . $newsItem->image_news) }}" alt="" class="rounded-md">
                    </div>

                    <br>


                    <div class="paragraph-content text-justify my-4 leading-loose">
                        {!! $newsItem->content_news !!}
                    </div>

                </div>
            </div>
            <div class="sidebar p-2 bg-slate-50 lg:w-4/5 rounded-md mt-24 ">
                <div class="title-sidebar text-2xl  my-3 text-center tracking-widest">
                    <h1>RECENT NEWS</h1>
                    <hr class="border-2 border-green-500 my-3">
                </div>
                <div class="content-recent">
                    @foreach ($recentNews as $item)
                        <a href="{{ route('news-page.read', ['id' => $item->news_id]) }}">
                            <div
                                class="news-card w-full bg-white p-3 flex flex-col lg:flex-row text-start gap-3  hover:bg-green-100 ">

                                {{-- section news card  --}}
                                <div class="news-card-info">
                                    {{-- section title card news  --}}
                                    <div class="title-news-card lg:text-xl">
                                        <h2>{{ $item->title_news }}</h2>
                                    </div>
                                    {{-- info desc news  --}}
                                    <div class="news-snippet text-gray-500 lg:text-sm font-thin py-2">
                                        {{ Str::limit(strip_tags($item->content_news), 50, '...') }}

                                    </div>

                                    <div class="date-news">
                                        <p class="text-green-500 text-sm ">{{ $item->created_at->format('Y-m-d') }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .paragraph-content p {
        padding: 0.75rem 0;
    }
</style>
