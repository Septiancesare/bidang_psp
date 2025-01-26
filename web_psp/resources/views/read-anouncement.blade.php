<x-app-layout>
    <div class="info-container mx-5 p-5 my-5 lg:mx-24 bg-slate-100 rounded-md shadow-2xl">
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
            <div class="info-content-date text-start  text-md text-gray-400 my-5">
                <p>{{ $anounceContent->created_at->format('Y-m-d') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .info-content-desc p {
        padding: 0.5rem 0;
    }
</style>
