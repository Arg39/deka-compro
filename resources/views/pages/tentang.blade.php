@extends('templates.template')

@section('style')
    <style>
        .tentang-bg {
            background-image: url('{{ asset('assets/img/tentang-kami.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 996px;
            width: 100%;
            position: relative;
        }
        @media (max-width: 640px) {
            .tentang-bg {
                height: 600px;
            }
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endsection

@section('container')
    <div class="tentang-bg flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black opacity-25 pointer-events-none"></div>
        <div class="w-full h-full p-4 sm:p-16 md:p-32 flex flex-col sm:flex-row items-center justify-center sm:justify-start relative z-10">
            <div class="w-full flex flex-col justify-center items-center">
                <h1
                    class="font-extrabold text-2xl sm:text-6xl text-white leading-[114%] tracking-[0.03em] uppercase text-center sm:text-left"
                >
                    tentang kami
                </h1>
            </div>
        </div>
    </div>
    @include('templates.footer')
@endsection

@section('script')
    {{-- script --}}
@endsection