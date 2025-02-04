<x-app-layout>
    <div class="anouncement-container min-h-screen">
        <div class="title-anouncement py-7 fade-up">
            <h1 class="text-center font-bold text-3xl">INFORMASI</h1>
        </div>

        {{-- Search Form --}}
        <div class="search-container mx-10 lg:mx-64 mb-6">
            <form action="{{ route('anouncement.index') }}" method="GET" class="flex items-center">
                <input type="text" name="search" placeholder="Cari informasi ..." value="{{ request('search') }}"
                    class="w-full px-4 py-2 rounded-l-lg focus:outline-none  focus:ring-green-500">
                <button type="submit"
                    class="bg-green-500 text-white px-4 py-2 rounded-r-lg hover:bg-green-600 transition duration-300">
                    Cari
                </button>
            </form>
        </div>

        <div class="content-anouncement lg:mx-64 px-10 my-6 mb-20">
            @if ($anounce->isEmpty())
                <div class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                    <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File" class="w-1/4 opacity-40">
                    <p>
                        @if (request('search'))
                            Tidak ada informasi yang sesuai dengan pencarian "{{ request('search') }}".
                        @else
                            Belum ada informasi yang dibagikan.
                        @endif
                    </p>
                </div>
            @else
                @foreach ($anounce as $item)
                    <a href="{{ route('anouncement.read', ['id' => $item->id]) }}">
                        <div
                            class="card-anouncement flex items-center gap-4 bg-white shadow-lg rounded-lg p-5 hover:bg-green-100 transition duration-300 mb-4 fade-up">
                            <div class="icon-anouncement">
                                <img src="{{ asset('assets/anouncement-image.png') }}" alt="icon anouncement"
                                    width="100" class="rounded-lg">
                            </div>
                            <div class="content-card-anouncement flex flex-col gap-2">
                                <div class="card-title text-xl font-bold">
                                    <h2>{{ $item->title }}</h2>
                                </div>
                                <div class="card-date text-sm text-gray-500">
                                    {{ $item->created_at->format('Y-m-d') }}
                                </div>
                                <div class="by flex gap-4 items-center text-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="15"
                                        height="15" fill="currentColor">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                    <p class="">Admin</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

                {{-- Pagination Links --}}
                <div class="pagination mt-4">
                    {{ $anounce->appends(request()->input())->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
