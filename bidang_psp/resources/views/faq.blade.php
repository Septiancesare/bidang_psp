<x-app-layout>
    {{-- Page Hero Header --}}
    <div class="faq-page-hero relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white rounded-full translate-y-1/2 -translate-x-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="text-center">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white uppercase tracking-widest mb-4 fade-up">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                    </svg>
                    Bantuan
                </span>
                <h1 class="text-3xl lg:text-5xl font-bold text-white mb-3 tracking-tight fade-up">
                    Pertanyaan Seputar PSP
                </h1>
                <p class="text-green-200 text-base lg:text-lg max-w-xl mx-auto fade-up">
                    Temukan jawaban untuk pertanyaan yang paling sering diajukan (FAQ) di bawah ini.
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 mb-10">
        <div class="faq-content min-h-96 space-y-4">
            @if ($questAns->isEmpty())
                <div class="flex flex-col items-center justify-center py-20 text-center fade-up bg-white rounded-2xl shadow-sm border border-gray-100">
                    <img src="{{ asset('assets/finding-file.png') }}" alt="Tidak ditemukan" class="w-40 opacity-40 mb-5">
                    <h3 class="text-xl font-semibold text-gray-600 mb-2">
                        Belum ada FAQ yang tersedia
                    </h3>
                    <p class="text-gray-400 text-sm max-w-sm">
                        Pertanyaan dan jawaban akan segera ditambahkan.
                    </p>
                </div>
            @else
                @foreach ($questAns as $index => $question)
                    <div class="faq-card bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden fade-up" style="animation-delay: {{ $index * 100 }}ms;">
                        <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between focus:outline-none focus:bg-gray-50 transition-colors" onclick="toggleAnswer(this)">
                            <div class="flex items-center gap-4 text-left">
                                <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-green-100 text-green-600 font-bold text-sm">
                                    Q
                                </span>
                                <h3 class="text-lg font-semibold text-gray-900 pr-4">
                                    {{ $question->question }}
                                </h3>
                            </div>
                            <span class="flex-shrink-0 ml-2">
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300 icon-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>

                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50 border-t border-transparent">
                            <div class="px-6 py-5 flex gap-4">
                                <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-600 font-bold text-sm">
                                    A
                                </span>
                                <div class="text-gray-600 prose prose-green max-w-none text-base leading-relaxed">
                                    {!! $question->answer !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <script>
        function toggleAnswer(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('.icon-chevron');
            
            if (answer.style.maxHeight) {
                // Close
                answer.style.maxHeight = null;
                answer.classList.remove('border-gray-200');
                icon.classList.remove('rotate-180');
            } else {
                // Open
                answer.style.maxHeight = answer.scrollHeight + "px";
                answer.classList.add('border-gray-200');
                icon.classList.add('rotate-180');
            }
        }
    </script>

    <style>
        .prose p {
            margin-bottom: 0.75em;
        }
        .prose p:last-child {
            margin-bottom: 0;
        }
        .prose a {
            color: #16a34a;
            text-decoration: underline;
        }
        .prose ul {
            list-style-type: disc;
            padding-left: 1.5em;
            margin-bottom: 0.75em;
        }
        .prose ol {
            list-style-type: decimal;
            padding-left: 1.5em;
            margin-bottom: 0.75em;
        }
    </style>
</x-app-layout>
