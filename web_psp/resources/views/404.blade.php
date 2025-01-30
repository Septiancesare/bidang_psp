<x-app-layout>
    <div class="404-container min-h-screen mx-5 flex items-center justify-center">
        <div class="404-content text-center">
            <div class="404-desc text-2xl font-bold text-gray-500"><span class="text-red-500 ">UPSSS!</span> Halaman
                Tidak
                Ditemukan</div>
            <img src="{{ asset('assets/icon-404.png') }}" alt="404">
            <a href="{{ route('welcome') }}"
                class="404-back m-6 bg-green-400 hover:bg-green-600 p-4 text-white transition duration-300 rounded-lg">Kembali
                ke
                Dashboard</a>
        </div>
    </div>
</x-app-layout>
