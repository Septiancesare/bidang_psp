<x-app-layout>
    <div class="download-container min-h-screen">

        <div class="header-download">
            <div class="header-download-title text-center font-bold text-3xl my-5 fade-up">
                <h1>DOWNLOAD</h1>
            </div>
        </div>
        <div class="search-container lg:mx-64 px-10 mb-5">
            <form action="{{ route('download.index') }}" method="GET" class="flex items-center">
                <input type="text" name="search" placeholder="Cari dokumen..." value="{{ request('search') }}"
                    class="w-full px-4 py-2 border border-gray-200 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded-r-lg hover:bg-green-700 transition duration-300">
                    Cari
                </button>
            </form>
        </div>
        <div class="content-download">
            <div class="content-download lg:mx-64 px-10 my-6 mb-20">
                @if ($file->isEmpty())
                    <div
                        class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                        <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File" class="w-1/4 opacity-40">
                        <p>
                            @if (request('search'))
                                Tidak ada dokumen yang sesuai dengan pencarian "{{ request('search') }}".
                            @else
                                Belum ada File yang dibagikan.
                            @endif
                        </p>
                    </div>
                @else
                    @foreach ($file as $item)
                        {{-- <a href="{{ route('download.download', $item->id) }}"> --}}
                        <div
                            class="card-download flex items-center gap-4 bg-white shadow-lg rounded-lg my-3 p-5 hover:bg-green-100 transition duration-300 fade-up">
                            <div class="icon-file">
                                <img src="{{ asset('assets/File icon.png') }}" alt="icon file" width="100"
                                    class="rounded-lg">
                            </div>
                            <div class="content-card-anouncement flex justify-between gap-2 items-center w-full">
                                <div class="flex flex-col">
                                    <div class="card-title text-xl font-bold">
                                        <h2>{{ $item->title }}</h2>
                                    </div>
                                    <div class="card-date-type flex gap-4 items-center my-2">
                                        @php
                                            $colors = [
                                                'pdf' => 'text-red-500 border-red-500',
                                                'docs' => 'text-blue-500 border-blue-500',
                                                'docx' => 'text-blue-500 border-blue-500',
                                                'xls' => 'text-green-500 border-green-500',
                                                'csv' => 'text-green-500 border-green-500',
                                                'jpg' => 'text-yellow-500 border-yellow-500',
                                                'jpeg' => 'text-yellow-500 border-yellow-500',
                                                'png' => 'text-yellow-500 border-yellow-500',
                                                'gif' => 'text-yellow-500 border-yellow-500',
                                                'bmp' => 'text-yellow-500 border-yellow-500',
                                                'svg' => 'text-yellow-500 border-yellow-500',
                                                'txt' => 'text-black border-black',
                                            ];
                                            $fileType = strtolower($item->type); // Mengubah menjadi lowercase agar konsisten
                                            $colorClass = $colors[$fileType] ?? 'text-gray-500 border-gray-500'; // Default warna abu-abu jika tidak cocok
                                        @endphp
                                        <div class="card-type text-sm {{ $colorClass }} border-2  p-1 rounded-md">
                                            {{ $item->type }}
                                        </div>
                                        <div class="card-date text-sm text-gray-500">
                                            {{ $item->created_at->format('Y-m-d') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="button-download flex gap-4">
                                    <a href="{{ route('download.view', $item->id) }}"
                                        class=" text-green-500 px-4 py-2 rounded-lg border hover:bg-green-600 hover:text-white transition duration-300">
                                        Lihat
                                    </a>
                                    <a href="{{ route('download.download', $item->id) }}"
                                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-300">
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- </a> --}}
                    @endforeach

                    {{-- Pagination Links --}}
                    <div class="pagination mt-4">
                        {{ $file->appends(request()->input())->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
