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

        /* Tambahan mobile improvement */
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
                    class="font-extrabold text-xl sm:text-4xl text-white leading-[114%] tracking-[0.03em] uppercase text-center blog-title">
                    {{ $blog->title }}
                </h1>
                <div
                    class="flex flex-row items-center gap-8 mt-8 blog-breadcrumb flex-wrap sm:flex-nowrap justify-center sm:justify-start">
                    <div class="flex flex-row items-center gap-2">
                        <div class="text-[#C00000]">
                            @include('components.icons', [
                                'name' => 'user',
                                'size' => 32,
                            ])
                        </div>
                        <p class="text-white text-lg">Admin</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <div class="text-[#C00000]">
                            @include('components.icons', [
                                'name' => 'date',
                                'size' => 32,
                            ])
                        </div>
                        <p class="text-white text-lg">{{ $blog->tanggal_berita->translatedFormat('l, j F Y') }}</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <div class="text-[#C00000]">
                            @include('components.icons', [
                                'name' => 'file',
                                'size' => 32,
                            ])
                        </div>
                        <p class="text-white text-lg">{{ $blog->category }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-fit bg-[#F3F0F1] p-4 sm:p-16">
        <div class="flex flex-col lg:flex-row blog-flex">
            <div class="w-full lg:w-2/3 p-4 sm:p-8">
                <img class="mb-8 blog-img w-full h-auto sm:h-[400px] object-cover rounded"
                    src="{{ asset('storage/' . $blog->image) }}" alt="">
                <p class="blog-desc">
                    {!! $blog->content !!}
                </p>
            </div>

            <div class="w-full lg:w-1/3 p-4 sm:p-8">
                <div class="p-4 sm:p-8 bg-[#D9D9D9] blog-thanks-box">
                    <p class="text-[#C00000] text-xl font-bold uppercase blog-thanks-title">Postingan terbaru</p>

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

                <div class="relative w-full h-[220px] sm:h-[340px] flex items-center justify-center mt-8 sm:mt-16 overflow-hidden"
                    style="background-image: url('{{ asset('assets/img/blog/kontak-kami.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-black opacity-80"></div>
                    <div class="relative z-10 flex flex-col items-start px-4 py-4 sm:px-8 sm:py-6 w-full max-w-md">
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

                <div class="mt-8 sm:mt-16">
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
@endsection
