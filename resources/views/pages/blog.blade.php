@extends('templates.template')

@section('style')
    <style>
        html {
            scroll-behavior: smooth;
        }

        .tentang-bg {
            background-image: url('{{ asset('assets/img/blog.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 680px;
            width: 100%;
            position: relative;
        }

        @media (max-width: 640px) {
            .tentang-bg {
                height: 400px;
            }
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Mobile responsive improvements */
        @media (max-width: 640px) {
            .blog-section {
                padding: 1.5rem 0.5rem !important;
            }

            .blog-img {
                width: 100% !important;
                height: 220px !important;
                max-width: 100vw !important;
                object-position: center 20% !important;
            }

            .blog-title {
                font-size: 1.25rem !important;
                margin-bottom: 1rem !important;
            }

            .blog-desc {
                font-size: 1rem !important;
                padding: 0 !important;
                margin-top: 1rem !important;
            }

            .blog-flex {
                flex-direction: column !important;
                gap: 1.5rem !important;
            }

            .blog-breadcrumb {
                font-size: 1rem !important;
                margin-top: 1rem !important;
            }

            .blog-thanks-title {
                font-size: 1.25rem !important;
                margin-bottom: 1.5rem !important;
            }

            .blog-thanks-desc {
                font-size: 1rem !important;
                padding: 0 !important;
            }

            .blog-thanks-box {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            /* Responsive main and sidebar stacking */
            .blog-main-sidebar {
                flex-direction: column !important;
            }

            .blog-main-content,
            .blog-sidebar {
                width: 100% !important;
                padding: 1rem !important;
            }

            .blog-sidebar {
                margin-top: 2rem !important;
            }
        }
    </style>
@endsection

@section('container')
    <div class="tentang-bg flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black opacity-25 pointer-events-none"></div>
        <div
            class="w-full h-full p-4 sm:p-16 md:p-32 flex flex-col sm:flex-row items-center justify-center sm:justify-start relative z-10">
            <div class="w-full flex flex-col justify-center items-center">
                <h1
                    class="font-extrabold text-xl sm:text-6xl text-white leading-[114%] tracking-[0.03em] uppercase text-center sm:text-left">
                    Blog kami
                </h1>
                {{-- breadcrumb --}}
                <div
                    class="blog-breadcrumb flex flex-wrap items-center space-x-2 text-white mt-4 sm:mt-8 text-base sm:text-2xl">
                    <a href="{{ url('/') }}"
                        class="font-normal text-base sm:text-2xl text-white hover:underline">Beranda</a>
                    <span class="text-[#C00000]">
                        @include('components.icons', ['name' => 'arrow-right', 'size' => 24])
                    </span>
                    <span class="font-normal text-base sm:text-2xl text-white">Blog Kami</span>
                </div>
            </div>
        </div>
    </div>

    <div class="h-fit bg-[#F3F0F1] p-16 blog-section">
        <div class="flex flex-row blog-main-sidebar">
            <div class="w-2/3 p-8 blog-main-content">
                <div id="blog-list">
                    @foreach ($blogs as $blog)
                        @include('pages.content.blog', ['blog' => $blog])
                    @endforeach
                </div>
                @if ($perPage * $page < $totalBlogs)
                    <button id="load-more"
                        class="mt-4 px-6 py-2 bg-none border-2 border-[#C00000] text-[#C00000] hover:text-white font-semibold rounded hover:bg-[#C00000]">
                        Muat lebih banyak
                    </button>
                @endif
            </div>

            <div class="w-1/3 p-8 blog-sidebar">
                <div class="p-8 bg-[#D9D9D9]">
                    <p class="text-[#C00000] text-xl font-bold uppercase">Postingan terbaru</p>

                    <div class="mt-8 flex flex-col">
                        @foreach ($latestBlogs as $blog)
                            <a href="{{ url('/blog/' . $blog->id) }}" class="mt-4 flex flex-col gap-4">
                                <h3 class="text-lg font-bold">{{ $blog->title }}</h3>
                                <div class="flex items-center space-x-2">
                                    <span class="text-[#C00000]">
                                        @include('components.icons', ['name' => 'time', 'size' => 18])
                                    </span>
                                    <p class="text-sm text-gray-600">
                                        {{ $blog->tanggal_berita->translatedFormat('l, j F Y') }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="relative w-full h-[340px] flex items-center justify-center mt-16 overflow-hidden"
                    style="background-image: url('{{ asset('assets/img/blog/kontak-kami.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-black opacity-80"></div>
                    <div class="relative z-10 flex flex-col items-start px-8 py-6 w-full max-w-md">
                        <p class="text-[#C00000] text-xl font-bold uppercase">Ada Pertanyaan?</p>
                        <p class="text-white mb-4">Hubungi Kami Untuk Mendapatkan Informasi Lebih Lengkap</p>
                        <div class="flex flex-row items-center gap-2 mb-3">
                            <div class="text-[#C00000]">
                                @include('components.icons', ['name' => 'phone', 'size' => 32])
                            </div>
                            <div>
                                <p class="text-[#C00000] text-sm font-bold">Telepon</p>
                                <a class="text-white text-xs" href="https://wa.me/628115469933" target="_blank"
                                    rel="noopener noreferrer">+62-811-5469-933</a>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <div class="text-[#C00000]">
                                @include('components.icons', [
                                    'name' => 'email-newsletter',
                                    'size' => 32,
                                ])
                            </div>
                            <div>
                                <p class="text-[#C00000] text-sm font-bold">E-mail</p>
                                <a class="text-white text-xs" href="mailto:admin@deltaeka.id" target="_blank"
                                    rel="noopener noreferrer">admin@deltaeka.id</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16">
                    <p class="text-lg font-black uppercase text-black">Kategori</p>
                    <div class="flex flex-col gap-6">
                        <p class="w-full flex flex-row gap-2 items-center text-[#C00000]">
                            @include('components.icons', [
                                'name' => 'play-arrow',
                                'size' => 24,
                            ])
                            <span class="font-bold text-black">Penjaringan</span>
                        </p>
                        <p class="w-full flex flex-row gap-2 items-center text-[#C00000]">
                            @include('components.icons', [
                                'name' => 'play-arrow',
                                'size' => 24,
                            ])
                            <span class="font-bold text-black">Teknologi</span>
                        </p>
                        <p class="w-full flex flex-row gap-2 items-center text-[#C00000]">
                            @include('components.icons', [
                                'name' => 'play-arrow',
                                'size' => 24,
                            ])
                            <span class="font-bold text-black">Jaringan Internet</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('templates.footer')
@endsection

@section('script')
    <script>
        let page = {{ $page }};
        const perPage = {{ $perPage }};
        const totalBlogs = {{ $totalBlogs }};

        document.addEventListener('DOMContentLoaded', function() {
            const loadMoreBtn = document.getElementById('load-more');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    page++;
                    loadMoreBtn.disabled = true;
                    loadMoreBtn.textContent = 'Memuat...';
                    fetch(`{{ route('blog') }}?page=${page}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.html) {
                                document.getElementById('blog-list').insertAdjacentHTML('beforeend',
                                    data.html);
                            }
                            if (!data.hasMore) {
                                loadMoreBtn.style.display = 'none';
                            } else {
                                loadMoreBtn.disabled = false;
                                loadMoreBtn.textContent = 'Muat lebih banyak';
                            }
                        })
                        .catch(() => {
                            loadMoreBtn.disabled = false;
                            loadMoreBtn.textContent = 'Muat lebih banyak';
                        });
                });
            }
        });
    </script>
@endsection
