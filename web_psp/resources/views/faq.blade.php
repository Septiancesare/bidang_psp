<x-app-layout>
    <div class="faq-container mx-4 lg:mx-24 my-10">
        <div class="faq-title my-4 text-3xl text-center font-bold stagger">
            <h1>FREQUENTLY ASKED QUESTIONS</h1>
        </div>
        <div class="faq-content">
            @foreach ($questAns as $question)
                @if ($questAns->isEmpty())
                    <div
                        class="text-center text-gray-500 text-lg flex justify-center items-center flex-col gap-4 fade-up">
                        <img src="{{ asset('assets/finding-file.png') }}" alt="Finding File" class="w-1/4 opacity-40">
                        <p>Belum ada QA yang dibagikan.</p>
                    </div>
                @else
                    <div class="faq-card shadow-lg text-lg tracking-wider my-6 fade-up">
                        <div class="faq-content-title my-4 font-bold flex justify-between items-center "
                            onclick="toggleAnswer(this)">
                            <h2> <span
                                    class="bg-green-500 p-2 text-white text-sm rounded-md mx-3 encode-sans-sc">Question</span>
                                {{ $question->question }}</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="faq-content-desc my-4">
                            <hr class="my-4 border-2 border-green-300">
                            {{-- <p> <span class="bg-green-300 font-bold p-3 rounded-md my-2">Answer</span> --}}
                            {!! $question->answer !!}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <script>
        function toggleAnswer(element) {
            const contentDesc = element.nextElementSibling;
            contentDesc.classList.toggle('open');
        }
    </script>

    <style>
        .faq-card {
            border: 1px solid #ccc;
            padding: 16px;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-content-title {
            cursor: pointer;
            user-select: none;
        }

        .faq-content-desc {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, opacity 0.3s ease;
            opacity: 0;
        }

        .faq-content-desc.open {
            max-height: 1000px;
            /* Set tinggi maksimal yang cukup besar untuk konten */
            opacity: 1;
        }
    </style>
</x-app-layout>
