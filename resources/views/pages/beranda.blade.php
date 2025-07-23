@extends('templates.template')

@section('style')
    <style>
        .beranda-bg {
            background-image: url('{{ asset('assets/img/beranda.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 996px;
            width: 100%;
            position: relative;
        }
        @media (max-width: 640px) {
            .beranda-bg {
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
    <div class="beranda-bg flex items-center justify-center">
        <div class="w-full h-full p-4 sm:p-16 md:p-32 flex flex-col sm:flex-row items-center justify-center sm:justify-start">
            <div class="w-full flex flex-col">
                <div class="w-full flex flex-col sm:flex-row justify-between items-center text-white gap-4 sm:gap-0">
                    <h1
                        class="font-extrabold text-2xl sm:text-6xl text-[#C00000] leading-[114%] tracking-[0.03em] uppercase text-center sm:text-left"
                    >
                        Selamat Datang di 
                        <br> PT Delta Eka Perkasa
                    </h1>
                    <img src="{{ asset('assets/img/deka.png') }}" alt="PT Delta Eka Perkasa" class="h-16 sm:h-36 mt-4 sm:mt-4 mx-auto sm:mx-0">
                </div>
                <h5 class="font-bold text-lg sm:text-4xl mt-2 sm:mt-8 text-[#2D2D2D] text-center sm:text-left">
                    Kami Siap Membantu Transformasi 
                    <br> Digital bisnis Anda
                </h5>
                <div class="mt-4 sm:mt-8 flex justify-center sm:justify-start">
                    <button class="w-fit font-bold text-base sm:text-3xl leading-none tracking-normal text-center p-2 px-4 border-2 border-[#C00000] 
                    bg-transparent hover:bg-[#C00000] hover:text-white text-[#C00000] rounded-lg transition duration-300 ease-in-out"
                    onclick="location.href='{{ url('/contact') }}'"
                    >
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="h-fit bg-white">
        <div class="pt-12 sm:pt-24 mb-4">
            <h5 class="text-center text-2xl sm:text-4xl font-extrabold uppercase">semua yang anda butuhkan
                <br><span class="text-[#C00000]">dalam satu tempat</span>
            </h5>
        </div>

        <div class="w-full flex justify-center items-center mt-24 mb-4">
            <div class="relative w-full">
                <div 
                    class="w-full"
                    style="
                        clip-path: polygon(
                            0 0, 
                            100% 0, 
                            100% 80%, 
                            50% 100%, 
                            0 80%
                        );
                        background: #C00000;
                        border-radius: 0 0 0 0;
                        padding: 2.5rem 0 4rem 0;
                        color: white;
                    "
                >
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 px-4 sm:px-8 md:px-24 gap-6">
                        <div class="flex flex-row sm:flex-row gap-2 sm:gap-4 items-start sm:md:pr-8 md:border-r md:border-white md:border-opacity-60 py-4 md:py-0">
                            <p class="text-3xl sm:text-5xl font-extrabold mb-2">01</p>
                            <div class="flex flex-col">
                                <p class="text-base sm:text-2xl font-bold mb-2">Kualitas Unggul</p>
                                <p class="text-sm sm:text-lg font-light text-justify">Kami selalu memberikan hasil terbaik dan berkualitas dari setiap project yang dikerjakan dan didukung SDM yang mumpuni dalam bidangnya</p>
                            </div>
                        </div>
                        <div class="flex flex-row sm:flex-row gap-2 sm:gap-4 items-start sm:md:px-8 md:border-r md:border-white md:border-opacity-60 py-4 md:py-0">
                            <p class="text-3xl sm:text-5xl font-extrabold mb-2">02</p>
                            <div class="flex flex-col">
                                <p class="text-base sm:text-2xl font-bold mb-2">Layanan Sangat Baik</p>
                                <p class="text-sm sm:text-lg font-light text-justify">Pelayanan prima adalah bagian dari culture perusahaan yang kami bangun, kami menghargai setiap kesempatan dengan respon yang cepat dan bersahabat</p>
                            </div>
                        </div>
                        <div class="flex flex-row sm:flex-row gap-2 sm:gap-4 items-start sm:md:pl-8 py-4 md:py-0">
                            <p class="text-3xl sm:text-5xl font-extrabold mb-2">03</p>
                            <div class="flex flex-col">
                                <p class="text-base sm:text-2xl font-bold mb-2">Dukungan Klien</p>
                                <p class="text-sm sm:text-lg font-light text-justify">Kecepatan dan ketepatan proses adalah hal yang sangat kami perhatikan demi profesionalitas yang kami usung</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 w-full px-4 sm:px-12 md:px-24 py-8 sm:py-16">
            <div class="w-full flex flex-col md:flex-row items-center md:items-start md:text-left gap-8">
                <div class="w-full flex flex-row flex-wrap justify-start md:justify-start items-start max-w-[600px] mx-auto mb-6 md:mb-0 gap-8">
                    <img 
                        src="{{ asset('assets/img/beranda/solution1.png') }}" 
                        alt="Solusi Delta Eka Perkasa 1" 
                        class="w-40 sm:w-64 max-w-full shadow-md rounded-lg transition-transform duration-200 hover:scale-105"
                        style="object-fit: cover;"
                    >
                    <img 
                        src="{{ asset('assets/img/beranda/solution2.png') }}" 
                        alt="Solusi Delta Eka Perkasa 2" 
                        class="w-40 sm:w-64 max-w-full mt-10 shadow-md rounded-lg transition-transform duration-200 hover:scale-105"
                        style="object-fit: cover;"
                    >
                </div>
                <div class="w-full">
                    <h5 class="text-2xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-4 leading-tight tracking-wide">
                        Solusi Terbaik Untuk <br>
                        <span class="text-black">Bisnis Anda</span>
                    </h5>
                    <p class="text-base sm:text-lg md:text-xl font-light text-justify mb-6 text-gray-700">
                        Delta Eka Perkasa adalah badan usaha yang bergerak di bidang Jasa Layanan Teknologi Informasi, Jaringan Telekomunikasi untuk kebutuhan Industri Telekomunikasi / Digital, Manufacturing, Plantation, Exploration & Mining di Indonesia.
                    </p>
                    <a href="{{ url('/about') }}">
                        <button class="p-2 px-6 text-xl border-2 font-extrabold text-[#C00000] border-[#C00000] rounded-md hover:text-white hover:bg-[#C00000] transition duration-200 shadow">
                            Selengkapnya
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center items-center mt-16 px-4 sm:px-12 md:px-24">
            <div class="w-full">
                <h5 class="text-2xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-16 leading-tight tracking-wide text-center">
                    Layanan Kami <br>
                </h5>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start justify-start">
                    @component('components.card-layanan', [
                        'image' => asset('assets/img/layanan-kami/layanan-ti.jpg'),
                        'title' => 'LAYANAN TI',
                        'description' => 'Kami memberikan service untuk memenuhi atau me-modernisasi kebutuhan IT Sistem atau IT Infrastruktur yang bersifat berdiri sendiri ataupun yang bersifat integrasi.'
                    ])@endcomponent
                    @component('components.card-layanan', [
                        'image' => asset('assets/img/layanan-kami/integrator-jaringan.jpg'),
                        'title' => 'INTEGRATOR JARINGAN',
                        'description' => 'Merupakan “third party” Network Solution yang mengintegrasikan layanan penyedia backhaul internet / Metro Ethernet.'
                    ])@endcomponent
                    @component('components.card-layanan', [
                        'image' => asset('assets/img/layanan-kami/pengembangan-sistem.jpg'),
                        'title' => 'PENGEMBANGAN SISTEM',
                        'description' => 'Dalam industri IT dan komunikasi yang berubah dengan cepat, Kami menyadari pentingnya memahami masalah yang dihadapi oleh klien kami'
                    ])@endcomponent
                </div>
            </div>
        </div>

        @include('components.carousel-produk')
    </div>
@endsection

@section('script')
    {{-- Custom JS untuk Beranda (optional) --}}
@endsection