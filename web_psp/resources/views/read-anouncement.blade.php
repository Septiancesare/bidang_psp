<x-app-layout>
    <div class="info-container mx-5 p-5 my-5 lg:mx-24 bg-slate-50 rounded-md shadow-2xl">
        <div class="info-title text-center dm-serif-text-regular text-3xl my-5">
            <h1>Informasi</h1>
        </div>
        <div class="info-content">
            <div class="info-content-title text-center  text-2xl font-bold">
                <h2>{{ $anounceContent->title }}</h2>
            </div>
            <div class="info-content-desc text-justify  text-lg leading-loose">
                <p>{!! $anounceContent->content !!}</p>
            </div>
            <div class="info-content-date text-start  text-md text-slate-400 my-5">
                <p>{{ $anounceContent->created_at->format('Y-m-d') }}</p>
                <div class="admin flex gap-4 my-4 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="15">
                        <path
                            d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z" />
                    </svg>
                    <p>Admin</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .info-content-desc p {
        padding: 0.75rem 0;
    }
</style>
