<x-app-layout>
    <div class="download-container min-h-screen">
        <div class="header-download">
            <div class="header-download-title text-center font-bold dm-serif-text-regular text-3xl my-5">
                <h1>Download</h1>
            </div>
        </div>
        <div class="content-download">
            <div class="content-download  mx-20 lg:mx-64  px-10 my-6 mb-20">
                @if ($file->isEmpty())
                    <div class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4">
                        <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File" class="w-1/4 opacity-40">
                        <p>Belum ada File yang dibagikan.</p>
                    </div>
                @else
                    @foreach ($file as $item)
                        <a href="{{ route('download.download', $item->id) }}">
                            <div
                                class="card-download flex items-center gap-4 bg-white shadow-lg rounded-lg my-3 p-5 hover:bg-green-100">
                                <div class="icon-anouncement">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                        <path
                                            d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                    </svg>

                                </div>
                                <div class="content-card-anouncement flex flex-col gap-2">
                                    <div class="card-title text-xl font-bold">
                                        <h2>{{ $item->title }}</h2>
                                    </div>
                                    <div class="card-date text-sm text-gray-500">
                                        {{ $item->created_at->format('Y-m-d') }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
</x-app-layout>
