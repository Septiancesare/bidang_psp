<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto fade-up">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <div class="px-6 py-5 border-b border-gray-100 bg-white flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-3 w-full sm:w-auto overflow-hidden">
                        <div class="p-2 bg-green-100 rounded-lg flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h1 class="text-xl font-bold text-gray-800 truncate" title="{{ $fileName }}">{{ $fileName }}</h1>
                    </div>
                    <a href="{{ url()->previous() }}" 
                       class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200 w-full sm:w-auto flex-shrink-0">
                        <svg class="mr-2 h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        Kembali
                    </a>
                </div>
                
                <div class="aspect-video w-full bg-gray-100 relative">
                    <iframe 
                        src="https://docs.google.com/viewer?url={{ urlencode($fileUrl) }}&embedded=true"
                        class="absolute inset-0 w-full h-full border-0"
                        frameborder="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>