<!-- resources/views/file-viewer.blade.php -->
<x-app-layout>
    <div class="min-h-screen p-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-bold">{{ $fileName }}</h1>
                    <a href="{{ url()->previous() }}" 
                       class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-300">
                        Kembali
                    </a>
                </div>
                
                <div class="aspect-video w-full">
                    <iframe 
                        src="https://docs.google.com/viewer?url={{ urlencode($fileUrl) }}&embedded=true"
                        class="w-full h-full border-0"
                        frameborder="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>