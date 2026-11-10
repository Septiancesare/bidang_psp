<x-app-layout>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 text-center fade-up">
            <div>
                <img src="{{ asset('assets/icon-404.png') }}" alt="404" class="mx-auto h-48 w-auto">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    <span class="text-green-600">UPSSS!</span> Halaman Tidak Ditemukan
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Maaf, halaman yang Anda cari mungkin telah dihapus, namanya diubah, atau sementara tidak tersedia.
                </p>
            </div>
            <div class="mt-8 flex justify-center">
                <a href="{{ route('welcome') }}"
                    class="group relative w-full sm:w-auto flex justify-center items-center py-3 px-6 border border-transparent text-sm font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-300 shadow-md hover:shadow-lg">
                    <svg class="mr-2 h-5 w-5 text-white group-hover:-translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
