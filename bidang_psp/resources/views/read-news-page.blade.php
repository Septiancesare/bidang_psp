<x-app-layout>
    <div class="news-read-page min-h-screen bg-gray-50">

        {{-- Breadcrumb --}}
        <div class="breadcrumb-bar bg-white border-b border-gray-200 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
                <nav class="flex items-center gap-2 text-sm text-gray-500">
                    <a href="{{ route('welcome') }}" class="hover:text-green-600 transition-colors flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        Beranda
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <a href="{{ route('news.index') }}" class="hover:text-green-600 transition-colors">Berita</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <span class="text-green-700 font-medium truncate max-w-xs">{{ Str::limit($newsItem->title_news, 40) }}</span>
                </nav>
            </div>
        </div>

        {{-- Main Content --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="lg:flex gap-8">

                {{-- Article Content --}}
                <main class="flex-1 min-w-0">
                    <article class="bg-white rounded-2xl shadow-sm overflow-hidden">

                        {{-- Article Header --}}
                        <div class="p-6 lg:p-10 border-b border-gray-100">
                            {{-- Category Badge --}}
                            <div class="mb-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800 uppercase tracking-wide">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                                        <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                                    </svg>
                                    Berita
                                </span>
                            </div>

                            {{-- Title --}}
                            <h1 class="text-2xl lg:text-4xl font-bold text-gray-900 leading-tight mb-6">
                                {{ $newsItem->title_news }}
                            </h1>

                            {{-- Meta Info --}}
                            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-700">{{ $newsItem->creator ?? 'Admin' }}</p>
                                        <p class="text-xs">Penulis</p>
                                    </div>
                                </div>
                                <div class="h-4 w-px bg-gray-300"></div>
                                <div class="flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                    </svg>
                                    <span>{{ $newsItem->created_at->translatedFormat('d F Y') }}</span>
                                </div>
                                <div class="h-4 w-px bg-gray-300"></div>
                                <div class="flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                    </svg>
                                    <span>{{ $comments->count() }} Komentar</span>
                                </div>
                            </div>
                        </div>

                        {{-- Featured Image --}}
                        <div class="relative overflow-hidden bg-gray-100">
                            <img src="{{ asset('storage/' . $newsItem->image_news) }}"
                                alt="{{ $newsItem->title_news }}"
                                class="w-full max-h-[500px] object-cover">
                        </div>

                        {{-- Article Body --}}
                        <div class="p-6 lg:p-10">
                            <div class="prose prose-lg max-w-none news-content">
                                {!! $newsItem->content_news !!}
                            </div>

                            {{-- Share Section --}}
                            <div class="mt-10 pt-6 border-t border-gray-100">
                                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Bagikan Artikel</p>
                                <div class="flex gap-3">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                        target="_blank"
                                        class="share-btn flex items-center gap-2 px-4 py-2 rounded-lg bg-blue-600 text-white text-sm font-medium hover:bg-blue-700 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                        Facebook
                                    </a>
                                    <a href="https://wa.me/?text={{ urlencode($newsItem->title_news . ' - ' . url()->current()) }}"
                                        target="_blank"
                                        class="share-btn flex items-center gap-2 px-4 py-2 rounded-lg bg-green-500 text-white text-sm font-medium hover:bg-green-600 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        WhatsApp
                                    </a>
                                    <button onclick="copyLink()" id="copy-link-btn"
                                        class="share-btn flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-100 text-gray-700 text-sm font-medium hover:bg-gray-200 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" />
                                            <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z" />
                                        </svg>
                                        Salin Link
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- Comment Section --}}
                    <div class="mt-8">
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 lg:p-8 border-b border-gray-100">
                                <h2 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                    </svg>
                                    Komentar ({{ $comments->count() }})
                                </h2>
                            </div>

                            {{-- Success Message --}}
                            @if(session('comment_success'))
                                <div class="mx-6 mt-6 px-4 py-3 bg-green-50 border border-green-200 text-green-800 rounded-lg flex items-center gap-2 fade-up">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    {{ session('comment_success') }}
                                </div>
                            @endif

                            {{-- Comment Form --}}
                            <div class="p-6 lg:p-8 border-b border-gray-100">
                                <h3 class="text-base font-semibold text-gray-700 mb-4">Tulis Komentar</h3>
                                <form action="{{ route('news.comment.store', ['id' => $newsItem->news_id]) }}" method="POST" class="space-y-4">
                                    @csrf
                                    <div>
                                        <label for="commenter_name" class="block text-sm font-medium text-gray-700 mb-1">Nama <span class="text-red-500">*</span></label>
                                        <input type="text" id="commenter_name" name="commenter_name"
                                            value="{{ old('commenter_name') }}"
                                            placeholder="Masukkan nama Anda..."
                                            class="w-full px-4 py-2.5 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm transition {{ $errors->has('commenter_name') ? 'border-red-400 bg-red-50' : 'border-gray-300' }}"
                                            maxlength="100">
                                        @error('commenter_name')
                                            <p class="mt-1 text-xs text-red-600 flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Komentar <span class="text-red-500">*</span></label>
                                        <textarea id="comment" name="comment" rows="4"
                                            placeholder="Tuliskan komentar Anda tentang berita ini..."
                                            class="w-full px-4 py-2.5 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm transition resize-none {{ $errors->has('comment') ? 'border-red-400 bg-red-50' : 'border-gray-300' }}"
                                            maxlength="1000">{{ old('comment') }}</textarea>
                                        @error('comment')
                                            <p class="mt-1 text-xs text-red-600 flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="submit"
                                            class="inline-flex items-center gap-2 px-6 py-2.5 bg-green-600 text-white text-sm font-semibold rounded-lg hover:bg-green-700 active:bg-green-800 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                            </svg>
                                            Kirim Komentar
                                        </button>
                                    </div>
                                </form>
                            </div>

                            {{-- Comments List --}}
                            <div class="p-6 lg:p-8">
                                @if($comments->isEmpty())
                                    <div class="text-center py-10 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-3 opacity-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                        <p class="text-sm">Belum ada komentar. Jadilah yang pertama berkomentar!</p>
                                    </div>
                                @else
                                    <div class="space-y-5">
                                        @foreach($comments as $comment)
                                            <div class="comment-card flex gap-4 p-4 rounded-xl bg-gray-50 hover:bg-green-50 transition-colors">
                                                {{-- Avatar --}}
                                                <div class="flex-shrink-0">
                                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-400 to-green-700 flex items-center justify-center text-white font-bold text-sm">
                                                        {{ strtoupper(substr($comment->commenter_name, 0, 1)) }}
                                                    </div>
                                                </div>
                                                {{-- Content --}}
                                                <div class="flex-1 min-w-0">
                                                    <div class="flex items-center justify-between gap-2 mb-1">
                                                        <p class="font-semibold text-gray-800 text-sm">{{ $comment->commenter_name }}</p>
                                                        <span class="text-xs text-gray-400 whitespace-nowrap">{{ $comment->created_at->diffForHumans() }}</span>
                                                    </div>
                                                    <p class="text-gray-600 text-sm leading-relaxed">{{ $comment->comment }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </main>

                {{-- Sidebar --}}
                <aside class="lg:w-80 flex-shrink-0">
                    <div class="sticky top-24 space-y-6">

                        {{-- Recent News --}}
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 bg-gradient-to-r from-green-700 to-green-500">
                                <h2 class="text-white font-bold text-lg flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                                        <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                                    </svg>
                                    Berita Terkini
                                </h2>
                            </div>
                            <div class="divide-y divide-gray-100">
                                @foreach ($recentNews as $item)
                                    <a href="{{ route('news-page.read', ['id' => $item->news_id]) }}" class="block group">
                                        <div class="p-4 hover:bg-green-50 transition-colors">
                                            <div class="flex gap-3">
                                                <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden bg-gray-100">
                                                    <img src="{{ asset('storage/' . $item->image_news) }}"
                                                        alt="{{ $item->title_news }}"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h3 class="text-sm font-semibold text-gray-800 group-hover:text-green-700 transition-colors line-clamp-2 leading-snug">
                                                        {{ $item->title_news }}
                                                    </h3>
                                                    <p class="mt-1 text-xs text-green-600 font-medium">
                                                        {{ $item->created_at->format('d M Y') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="p-4 border-t border-gray-100">
                                <a href="{{ route('news.index') }}"
                                    class="block text-center text-sm font-semibold text-green-600 hover:text-green-800 transition-colors">
                                    Lihat Semua Berita →
                                </a>
                            </div>
                        </div>

                    </div>
                </aside>

            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .news-content p {
        padding: 0.5rem 0;
        color: #374151;
        line-height: 1.8;
        font-size: 1rem;
    }

    .news-content h1,
    .news-content h2,
    .news-content h3 {
        font-weight: 700;
        color: #111827;
        margin: 1.25rem 0 0.5rem;
    }

    .news-content h2 { font-size: 1.5rem; }
    .news-content h3 { font-size: 1.25rem; }

    .news-content img {
        border-radius: 0.75rem;
        margin: 1rem auto;
        max-width: 100%;
    }

    .news-content blockquote {
        border-left: 4px solid #16a34a;
        padding: 0.5rem 1rem;
        margin: 1rem 0;
        background: #f0fdf4;
        color: #166534;
        font-style: italic;
        border-radius: 0 0.5rem 0.5rem 0;
    }

    .news-content ul,
    .news-content ol {
        padding-left: 1.5rem;
        margin: 0.75rem 0;
    }

    .news-content ul li { list-style-type: disc; padding: 0.25rem 0; }
    .news-content ol li { list-style-type: decimal; padding: 0.25rem 0; }

    .news-content a {
        color: #16a34a;
        text-decoration: underline;
    }

    .news-content a:hover { color: #14532d; }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .share-btn {
        transition: all 0.2s ease;
    }

    .share-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .comment-card {
        animation: slideInUp 0.3s ease;
    }

    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<script>
    function copyLink() {
        navigator.clipboard.writeText(window.location.href).then(() => {
            const btn = document.getElementById('copy-link-btn');
            const originalText = btn.innerHTML;
            btn.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Tersalin!`;
            btn.classList.add('bg-green-100', 'text-green-700');
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.classList.remove('bg-green-100', 'text-green-700');
            }, 2000);
        });
    }
</script>
