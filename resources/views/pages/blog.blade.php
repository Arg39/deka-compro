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

    <div class="h-fit bg-[#F3F0F1]">
        <div></div>
    </div>
    @include('templates.footer')
@endsection

@section('script')
@endsection
