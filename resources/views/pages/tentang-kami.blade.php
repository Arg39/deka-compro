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
                {{-- breadcrumb --}}
                <div class="flex items-center space-x-2 text-white mt-8">
                    <a href="{{ url('/') }}" class="font-normal text-2xl text-white hover:underline">Beranda</a>
                    <span class="text-[#C00000]">
                        @include('components.icons', ['name' => 'arrow-right', 'size' => 38])
                    </span>
                    <span class="font-normal text-2xl text-white">Tentang Kami</span>
                </div>
            </div>
        </div>
    </div>

    <div class="h-fit bg-[#F3F0F1]">
        <div class="mt-12 sm:mt-24 flex flex-col justify-center items-center">
            <h5 class="text-2xl font-extrabold text-[#C00000] mb-8 uppercase">Selamat Datang di PT Delta Eka Perkasa</h5>
            @include('contents.tentang')
        </div>

        <div class="p-16">
            <div class="mt-12 sm:mt-24 grid grid-cols-1 md:grid-cols-2 gap-8 justify-center items-start">
                <div></div>
                <div>
                    <h4 class="text-3xl font-extrabold text-[#C00000] mb-8 uppercase">PT Delta Eka Perkasa</h4>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center items-start">
                <div class="">
                    <img class="h-[520px] w-[800px]" src="{{asset('assets/img/tentang/tentang1.jpg')}}" alt="">
                </div>
                <div>
                    <p class="text-2xl text-justify font-light">
                        PT Delta Eka Perkasa adalah badan usaha yang bergerak di bidang Jasa Layanan Teknologi Informasi, Jaringan
                        Telekomunikasi untuk kebutuhan Industri Telekomunikasi/ Digital, Manufacturing, Plantation, Exploration & Mining di Indonesia.
                        <br><br>
                        Dalam komitmen memberikan layanan terbaik, Delta Eka Perkasa mengimplementasikan strategi bisnis dan operasional perusahaan 
                        yang berorientasi kepada pelanggan (customer oriented). Dengan hal tersebut, Delta Eka
                        Perkasa akan selalu beradaptasi dengan perubahan trend telekomunikasi dan industri yang berlangsung sangat cepat.
                        Organisasi ini juga diharapkan dapat meningkatkan efisiensi dan efektivitas dalam menciptakan customer experience yang berkualitas.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center items-start p-16">
            <div class="flex flex-col justify-center items-start">
                <div class="px-0 sm:px-8">
                    <h4 class="text-3xl font-extrabold text-[#C00000] mb-24 uppercase">Visi & 
                        <span class="text-black">Misi</span>
                    </h4>
                </div>
                @include('contents.visi-misi', [
                    'visiTitle' => 'Visi',
                    'visiContent' => 'Menjadi mitra terkemuka dalam penyediaan solusi Teknologi Informasi, Jaringan Telekomunikasi, dan Layanan Industri untuk mendukung pertumbuhan berkelanjutan dan transformasi digital di Indonesia.',
                    'misiTitle' => 'Misi',
                    'misiContent' => 'Mengimplementasikan strategi bisnis dan operasional perusahaan yang berorientasi kepada pelanggan (customer-oriented). dapat beradaptasi dengan perubahan trend telekomunikasi dan industri yang berlangsung sangat cepat.'
                ])
            </div>
            <div>
                <h4 class="text-3xl font-extrabold text-[#C00000] mb-24 uppercase">Divisi</h4>
            </div>
        </div>
    </div>


    @include('templates.footer')
@endsection

@section('script')
    {{-- script --}}
@endsection