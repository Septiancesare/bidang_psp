<x-app-layout>
    <div class="anouncement-container min-h-screen">
        <div class="title-anouncement py-5">
            <h1 class="text-center font-bold text-2xl">INFORMASI</h1>
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
                <div class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4">
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
                            class="card-anouncement flex items-center gap-4 bg-white shadow-lg rounded-lg p-5 hover:bg-green-100 transition duration-300 mb-4">
                            <div class="icon-anouncement">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                        clip-rule="evenodd" />
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

                {{-- Pagination Links --}}
                <div class="pagination mt-4">
                    {{ $anounce->appends(request()->input())->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
