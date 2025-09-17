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
        <div
            class="w-full h-full p-4 sm:p-16 md:p-32 flex flex-col sm:flex-row items-center justify-center sm:justify-start">
            <div class="w-full flex flex-col">
                <div class="w-full flex flex-col sm:flex-row justify-between items-center text-white gap-4 sm:gap-0">
                    <h1
                        class="font-extrabold text-2xl sm:text-6xl text-[#C00000] leading-[114%] tracking-[0.03em] uppercase text-center sm:text-left">
                        Selamat Datang di
                        <br> PT Delta Eka Perkasa
                    </h1>
                    <img src="{{ asset('assets/img/deka.png') }}" alt="PT Delta Eka Perkasa"
                        class="h-16 sm:h-36 mt-4 sm:mt-4 mx-auto sm:mx-0">
                </div>
                <h5 class="font-bold text-lg sm:text-4xl mt-2 sm:mt-8 text-[#2D2D2D] text-center sm:text-left">
                    Kami Siap Membantu Transformasi
                    <br> Digital bisnis Anda
                </h5>
                <div class="mt-4 sm:mt-8 flex justify-center sm:justify-start">
                    <button
                        class="w-fit font-bold text-base sm:text-3xl leading-none tracking-normal text-center p-2 px-4 border-2 border-[#C00000] 
                    bg-transparent hover:bg-[#C00000] hover:text-white text-[#C00000] rounded-lg transition duration-300 ease-in-out"
                        onclick="location.href='{{ url('/contact') }}'">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="h-fit bg-[#F3F0F1]">
        <div class="mt-8 sm:mt-24 px-2 sm:px-0">
            @include('contents.tentang')
        </div>

        <div class="mt-10 sm:mt-16 w-full px-2 sm:px-12 md:px-24 py-6 sm:py-16">
            <div class="w-full flex flex-col md:flex-row items-center md:items-start md:text-left gap-6 sm:gap-8">
                <div
                    class="w-full flex flex-row flex-wrap justify-center md:justify-start items-start max-w-full sm:max-w-[600px] mx-auto mb-4 md:mb-0 gap-4 sm:gap-8">
                    <img src="{{ asset('assets/img/beranda/solution1.png') }}" alt="Solusi Delta Eka Perkasa 1"
                        class="w-32 sm:w-64 max-w-full shadow-md rounded-lg transition-transform duration-200 hover:scale-105 object-cover">
                    <img src="{{ asset('assets/img/beranda/solution2.png') }}" alt="Solusi Delta Eka Perkasa 2"
                        class="w-32 sm:w-64 max-w-full mt-4 sm:mt-10 shadow-md rounded-lg transition-transform duration-200 hover:scale-105 object-cover">
                </div>
                <div class="w-full">
                    <h5
                        class="text-xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-2 sm:mb-4 leading-tight tracking-wide text-center sm:text-left">
                        Solusi Terbaik Untuk <br>
                        <span class="text-black">Bisnis Anda</span>
                    </h5>
                    <p class="text-sm sm:text-lg md:text-xl font-light text-justify mb-4 sm:mb-6 text-gray-700">
                        Delta Eka Perkasa adalah badan usaha yang bergerak di bidang Jasa Layanan Teknologi Informasi,
                        Jaringan Telekomunikasi untuk kebutuhan Industri Telekomunikasi / Digital, Manufacturing,
                        Plantation, Exploration & Mining di Indonesia.
                    </p>
                    <div class="flex justify-center sm:justify-start">
                        <a href="{{ url('/tentang-kami') }}">
                            <button
                                class="p-2 px-4 sm:px-6 text-base sm:text-xl border-2 font-extrabold text-[#C00000] border-[#C00000] rounded-md hover:text-white hover:bg-[#C00000] transition duration-200 shadow">
                                Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center items-center mt-10 sm:mt-16 px-2 sm:px-12 md:px-24">
            <div class="w-full">
                <h5
                    class="text-xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-8 sm:mb-16 leading-tight tracking-wide text-center">
                    Layanan Kami <br>
                </h5>
                <div class="grid grid-cols-1 gap-6 sm:gap-8 md:grid-cols-3 items-start justify-start">
                    @component('components.card-layanan', [
                        'image' => asset('assets/img/layanan-kami/layanan-ti.jpg'),
                        'title' => 'LAYANAN TI',
                        'description' =>
                            'Kami memberikan service untuk memenuhi atau me-modernisasi kebutuhan IT Sistem atau IT Infrastruktur yang bersifat berdiri sendiri ataupun yang bersifat integrasi.',
                    ])
                    @endcomponent
                    @component('components.card-layanan', [
                        'image' => asset('assets/img/layanan-kami/integrator-jaringan.jpg'),
                        'title' => 'INTEGRATOR JARINGAN',
                        'description' =>
                            'Merupakan “third party” Network Solution yang mengintegrasikan layanan penyedia backhaul internet / Metro Ethernet.',
                    ])
                    @endcomponent
                    @component('components.card-layanan', [
                        'image' => asset('assets/img/layanan-kami/pengembangan-sistem.jpg'),
                        'title' => 'PENGEMBANGAN SISTEM',
                        'description' =>
                            'Dalam industri IT dan komunikasi yang berubah dengan cepat, Kami menyadari pentingnya memahami masalah yang dihadapi oleh klien kami',
                    ])
                    @endcomponent
                </div>
            </div>
        </div>

        @include('components.carousel-produk')

        <div class="w-full flex justify-center mt-10 sm:mt-16">
            <div class="w-full flex flex-col items-center">
                <h5
                    class="text-xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-8 sm:mb-16 leading-tight tracking-wide text-center">
                    Lokasi Kami
                </h5>
                <iframe class="w-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1178.8802264769415!2d116.86054610906668!3d-1.223643222179101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1462215e4c245%3A0xdd261999d820c9f6!2sPerumahan%20Pelangi%20Metro%20Residence%20Blok%20E!5e0!3m2!1sen!2sid!4v1753367909639!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="w-full flex flex-col justify-center items-center mt-10 sm:mt-16 px-2 sm:px-12 md:px-24 mb-16 sm:mb-24">
            <div class="w-full flex flex-col items-center mb-6 sm:mb-8">
                <h5
                    class="text-xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-4 sm:mb-8 leading-tight tracking-wide text-center">
                    Terimakasih atas Kepercayaannya
                </h5>
                <div class="w-full px-0 sm:px-24 md:px-52 justify-center text-center">
                    <p class="text-base sm:text-2xl">Kami selalu memberikan apresiasi dan rasa terima kasih kepada rekan,
                        mitra dan pelanggan setia kami yang telah mempercayakan jasa kepada kami.</p>
                </div>
            </div>
            @include('components.carousel-client')
        </div>
    </div>
    @include('templates.footer')
@endsection

@section('script')
    {{-- script --}}
@endsection
