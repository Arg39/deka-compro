@extends('templates.template')

@section('style')
    <style>
        html {
            scroll-behavior: smooth;
        }
        .tentang-bg {
            background-image: url('{{ asset('assets/img/tentang-kami.jpg') }}');
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
    </style>
@endsection

@section('container')
    <div class="tentang-bg flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black opacity-25 pointer-events-none"></div>
        <div class="w-full h-full p-4 sm:p-16 md:p-32 flex flex-col sm:flex-row items-center justify-center sm:justify-start relative z-10">
            <div class="w-full flex flex-col justify-center items-center">
                <h1
                    class="font-extrabold text-xl sm:text-6xl text-white leading-[114%] tracking-[0.03em] uppercase text-center sm:text-left"
                >
                    tentang kami
                </h1>
                {{-- breadcrumb --}}
                <div class="flex flex-wrap items-center space-x-2 text-white mt-4 sm:mt-8 text-base sm:text-2xl">
                    <a href="{{ url('/') }}" class="font-normal text-base sm:text-2xl text-white hover:underline">Beranda</a>
                    <span class="text-[#C00000]">
                        @include('components.icons', ['name' => 'arrow-right', 'size' => 24])
                    </span>
                    <span class="font-normal text-base sm:text-2xl text-white">Tentang Kami</span>
                </div>
            </div>
        </div>
    </div>

    <div class="h-fit bg-[#F3F0F1]">
        <div class="pt-8 sm:pt-24 flex flex-col justify-center items-center px-4 sm:px-0">
            <h5 class="text-lg sm:text-2xl font-extrabold text-[#C00000] mb-4 sm:mb-8 uppercase text-center">Selamat Datang di PT Delta Eka Perkasa</h5>
            @include('contents.tentang')
        </div>

        <div class="p-4 sm:p-16">
            <div class="mt-8 sm:mt-24 grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 justify-center items-start">
                <div></div>
                <div>
                    <h4 class="text-xl sm:text-3xl font-extrabold text-[#C00000] mb-4 sm:mb-8 uppercase">PT Delta Eka Perkasa</h4>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 justify-center items-start">
                <div class="flex justify-center">
                    <img class="w-full max-w-[400px] sm:max-w-[800px] h-auto rounded" src="{{asset('assets/img/tentang/tentang1.jpg')}}" alt="">
                </div>
                <div>
                    <p class="text-base sm:text-2xl text-justify font-light">
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 justify-center items-start p-4 sm:p-16">
            <div class="flex flex-col justify-center items-start">
                <div class="px-0 sm:px-8 mb-4 sm:mb-0">
                    <h4 class="text-xl sm:text-3xl font-extrabold text-[#C00000] mb-8 sm:mb-24 uppercase">Visi & 
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
                <h4 class="text-xl sm:text-3xl font-extrabold text-[#C00000] mb-8 uppercase">Divisi</h4>
                <div class="flex flex-col sm:flex-row gap-8 sm:gap-16">
                    <div class="relative flex justify-center items-center w-full sm:w-[320px] h-[320px] sm:h-[460px] rounded overflow-hidden" style="background-image: url('{{ asset('assets/img/tentang/divisi1.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="relative z-10 flex flex-col items-start justify-end w-full h-full px-4 py-6 sm:py-0">
                            <p class="text-white text-xl sm:text-3xl font-bold mb-2 sm:mb-4 uppercase">Sales</p>
                            <a href="#sales" class="flex items-center justify-center text-base sm:text-2xl text-white font-medium rounded hover:text-[#C00000] transition-all duration-200 mb-4 sm:mb-6 gap-2 scroll-link">
                                Selengkapnya
                                @include('components.icons', ['name' => 'arrow-right-2', 'size' => 32])
                            </a>
                        </div>
                    </div>
                    <div class="relative flex justify-center items-center w-full sm:w-[320px] h-[320px] sm:h-[460px] rounded overflow-hidden mt-0 sm:mt-24" style="background-image: url('{{ asset('assets/img/tentang/divisi2.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="relative z-10 flex flex-col items-start justify-end w-full h-full px-4 py-6 sm:py-0">
                            <p class="text-white text-xl sm:text-3xl font-bold mb-2 sm:mb-4 uppercase">ICT</p>
                            <a href="#ict" class="flex items-center justify-center text-base sm:text-2xl text-white font-medium rounded hover:text-[#C00000] transition-all duration-200 mb-4 sm:mb-6 gap-2 scroll-link">
                                Selengkapnya
                                @include('components.icons', ['name' => 'arrow-right-2', 'size' => 32])
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col justify-center items-center px-4 sm:px-24 mt-8">
            <h4 class="text-xl sm:text-3xl font-extrabold text-[#C00000] uppercase mb-8 sm:mb-16 text-center">Struktur Organisasi</h4>
            <img class="w-full max-w-[400px] sm:max-w-[900px] h-auto rounded" src="{{asset('assets/img/tentang/struktur-organisasi.png')}}" alt="">
        </div>

        <div class="p-4 sm:p-16 pb-12 sm:pb-24 mt-8 sm:mt-16">
            <h4 id="sales" class="text-xl sm:text-3xl font-extrabold text-[#C00000] uppercase mb-4 sm:mb-8">Sales</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 justify-center items-start">
                <div class="flex justify-center">
                    <img class="w-full max-w-[400px] sm:max-w-[800px] h-auto rounded" src="{{asset('assets/img/tentang/sales.jpg')}}" alt="">
                </div>
                <div>
                    <p class="text-base sm:text-2xl text-justify font-light">
                        Divisi sales adalah bagian dari aktivitas penjualan produk, barang, dan layanan yang dilakukan 
                        penjual ke pembeli. Divisi ini bertanggung jawab untuk menjual produk atau jasa kepada pelanggan 
                        atau mitra bisnis. Tugas utama divisi sales adalah menerima konsultasi, melakukan penjualan produk, 
                        melakukan pertemuan dengan client, memberikan solusi sesuai dengan kebutuhan client, dan menyampaikan 
                        presentasi. Selain itu, divisi sales juga bertanggung jawab untuk mengelola hubungan pelanggan, mengembangkan 
                        peluang bisnis, dan menjaga reputasi perusahaan. Divisi sales juga harus memastikan kebutuhan administratif 
                        setiap jenis penjualan terpenuhi, baik untuk pelanggan tingkat akhir maupun pelanggan yang merupakan perusahaan 
                        lain atau vendor.
                    </p>
                </div>
            </div>
            <h4 id="ict" class="text-xl sm:text-3xl font-extrabold text-[#C00000] uppercase mt-8 sm:mt-16 mb-4 sm:mb-8">ICT (Information and Communication of Technology)</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 justify-center items-start">
                <div class="flex justify-center">
                    <img class="w-full max-w-[400px] sm:max-w-[800px] h-auto rounded" src="{{asset('assets/img/tentang/ict.jpg')}}" alt="">
                </div>
                <div>
                    <p class="text-base sm:text-2xl text-justify font-light">
                        Divisi Teknologi Informasi dan Komunikasi (TIK) bertanggung jawab mengelola pengembangan teknologi, sistem, dan 
                        infrastruktur teknologi informasi dan komunikasi. Fungsinya biasanya mencakup pengembangan, pemeliharaan, dan 
                        peninjauan strategi TIK, menegakkan standar dan prosedur, mengawasi dan menerapkan sistem informasi manajemen, 
                        memelihara infrastruktur perangkat keras dan perangkat lunak, memberikan dukungan teknis, mengelola pemrograman 
                        dan administrasi basis data, memastikan keamanan elektronik, dan meningkatkan kesadaran akan hal-hal baru. teknologi 
                        TIK. Unit TIK memainkan peran penting dalam mendukung kebutuhan teknologi. Unit Teknologi Informasi dan Komunikasi (TIK) 
                        bertanggung jawab mengelola pengembangan teknologi, sistem, dan infrastruktur teknologi informasi dan komunikasi.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('templates.footer')
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Select all scroll-link anchors
            document.querySelectorAll('a.scroll-link').forEach(function(anchor) {
                anchor.addEventListener('click', function(e) {
                    const href = anchor.getAttribute('href');
                    if (href && href.startsWith('#')) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            // Get navbar height (assumes .navbar class)
                            const navbar = document.querySelector('.navbar');
                            const offset = navbar ? navbar.offsetHeight : 0;
                            const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset - 16; // 16px extra space
                            window.scrollTo({
                                top: targetPosition,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
    {{-- script --}}
@endsection