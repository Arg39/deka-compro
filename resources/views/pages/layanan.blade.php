@extends('templates.template')

@section('style')
    <style>
        html {
            scroll-behavior: smooth;
        }
        .tentang-bg {
            background-image: url('{{ asset('assets/img/layanan.jpg') }}');
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
            .layanan-section {
                padding: 1.5rem 0.5rem !important;
            }
            .layanan-img {
                width: 100% !important;
                height: 220px !important;
                max-width: 100vw !important;
                object-position: center 20% !important;
            }
            .layanan-title {
                font-size: 1.25rem !important;
                margin-bottom: 1rem !important;
            }
            .layanan-desc {
                font-size: 1rem !important;
                padding: 0 !important;
                margin-top: 1rem !important;
            }
            .layanan-flex {
                flex-direction: column !important;
                gap: 1.5rem !important;
            }
            .layanan-breadcrumb {
                font-size: 1rem !important;
                margin-top: 1rem !important;
            }
            .layanan-thanks-title {
                font-size: 1.25rem !important;
                margin-bottom: 1.5rem !important;
            }
            .layanan-thanks-desc {
                font-size: 1rem !important;
                padding: 0 !important;
            }
            .layanan-thanks-box {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
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
                    Layanan kami
                </h1>
                {{-- breadcrumb --}}
                <div class="layanan-breadcrumb flex flex-wrap items-center space-x-2 text-white mt-4 sm:mt-8 text-base sm:text-2xl">
                    <a href="{{ url('/') }}" class="font-normal text-base sm:text-2xl text-white hover:underline">Beranda</a>
                    <span class="text-[#C00000]">
                        @include('components.icons', ['name' => 'arrow-right', 'size' => 24])
                    </span>
                    <span class="font-normal text-base sm:text-2xl text-white">Layanan</span>
                </div>
            </div>
        </div>
    </div>

    <div class="h-fit bg-[#F3F0F1]">
        <div class="pt-8 sm:pt-24 flex flex-col justify-center items-center px-4 sm:px-0">
            <h5 class="text-2xl sm:text-3xl font-extrabold text-black mb-4 sm:mb-8 uppercase text-center">layanan <span class="text-[#C00000]">terbaik</span> kami</h5>
        </div>

        <div>
            <div class="layanan-section p-6 sm:p-24">
                <p class="layanan-title uppercase text-[#C00000] text-3xl font-bold mb-4">Layanan TI</p>
                <div class="layanan-flex flex flex-col sm:flex-row items-start justify-start gap-8 mt-4">
                    <img 
                        class="layanan-img w-full sm:w-[800px] h-auto sm:h-[520px] object-cover object-[center_10%] shadow-md" 
                        src="{{ asset('assets/img/layanan-kami/layanan-ti.jpg') }}" 
                        alt="Layanan TI"
                    >
                    <div class="layanan-desc mt-6 sm:mt-0 max-w-xl text-justify text-xl leading-relaxed">
                        <p>
                            Kami memberikan service untuk memenuhi atau me-modernisasi kebutuhan IT Sistem atau IT Infrastruktur yang bersifat berdiri sendiri ataupun yang bersifat integrasi.<br><br>
                            Infrastruktur berdiri sendiri yang dimaksud disini adalah infrastruktur yang dibangun tidak mempertimbangkan atau berkaitan dengan compability IT infrastruktur lainnya.<br><br>
                            Infrastruktur terintegrasi adalah infrastruktur yang dibangun dan dirancang untuk dapat melakukan interkoneksi dengan IT infrastruktur yang sudah ada atau yang akan di kembangkan kedepannya. Sistem infrastruktur yang terintegrasi ini bersifat IP basis.<br><br>
                            Jenis IT Services yang dapat kami berikan antara lain: Manajemen bandwidth internet dan intranet, Wifi / Hotspot, CCTV, Sistem Pengkabelan, Komputer, Printer, Access Control, PABX, Intercom dan sejenisnya.
                        </p>
                    </div>
                </div>
            </div>

            <div class="layanan-section p-6 sm:p-24">
                <p class="layanan-title uppercase text-[#C00000] text-3xl font-bold mb-4">Integrator Jaringan</p>
                <div class="layanan-flex flex flex-col sm:flex-row items-start justify-start gap-8 mt-4">
                    <img 
                        class="layanan-img w-full sm:w-[800px] h-auto sm:h-[520px] object-cover object-[center_10%] shadow-md" 
                        src="{{ asset('assets/img/layanan-kami/integrator-jaringan.jpg') }}" 
                        alt="Integrator Jaringan"
                    >
                    <div class="layanan-desc mt-6 sm:mt-0 max-w-xl text-justify text-xl leading-relaxed">
                        <p>
                            Merupakan “third party” Network Solution yang mengintegrasikan layanan penyedia backhaul internet / Metro Ethernet. Jenis Network Service yang dapat kami layani meliputi, Cable Network (Fiber Optic / LAN), Radio IP Point to point, Radio IP Point to Multipoint dan sejenisnya. <br><br>
                            Service ini bertujuan untuk membantu para customer untuk mengintegrasikan dan me-manage Network dan memberikan solusi bagi customer mempunyai site / lokasi yang berjauhan antara lokasi satu dengan lainya untuk mensupport site / lokasi yang blind spot agar terus dapat berkomunikasi dan terus produktif. <br><br>
                            Dengan service untuk setiap jenis jaringan, customer / organisasi besar dan kecil dapat memilih dari serangkaian titik akses dan port akses dengan fitur-fitur khusus, seperti jaringan mesh, cakupan radio fleksibel dan pemasangan instan. <br><br>
                            Dirancang untuk mengurangi biaya penyebaran dan pemeliharaan, Akses ini akan menjamin keamanan dan kinerja tanpa membuang buang waktu dengan pemecahan masalah konstan dan mengurangi biaya yang berkaitan dengan manajemen jaringan nirkabel dan kabel dengan berbagai arsitektur. <br><br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="layanan-section p-6 sm:p-24">
                <p class="layanan-title uppercase text-[#C00000] text-3xl font-bold mb-4">Pengembangan Sistem</p>
                <div class="layanan-flex flex flex-col sm:flex-row items-start justify-start gap-8 mt-4">
                    <img 
                        class="layanan-img w-full sm:w-[800px] h-auto sm:h-[520px] object-cover object-[center_10%] shadow-md" 
                        src="{{ asset('assets/img/layanan-kami/pengembangan-sistem.jpg') }}" 
                        alt="Pengembangan Sistem"
                    >
                    <div class="layanan-desc mt-6 sm:mt-0 max-w-xl text-justify text-xl leading-relaxed">
                        <p>
                            Dalam industri IT dan komunikasi yang berubah dengan cepat, Kami menyadari pentingnya memahami masalah yang dihadapi oleh klien kami. Melalui pemahaman yang lebih baik tentang masalah, dan pengetahuan yang lebih baik tentang proses bisnis, tim teknis kami yang berpengalaman akan mengusulkan solusi komprehensif untuk klien kami dengan kualitas maksimal yang dibungkus dengan biaya yang masuk akal. <br><br>
                            Untuk mencapai tujuan kami, kami memaksimalkan semua kesempatan untuk bekerja bersama dengan semua stakeholder, mitra, dan mitra outsourcing yang dapat dipercaya. <br><br>
                            Kami percaya bahwa langkah ini akan meningkatkan kinerja perusahaan kami untuk mencapai keunggulan. Kami percaya bahwa peningkatan pesat masyarakat teknologi dan informasi dalam beberapa tahun terakhir telah mendorong kami untuk memberikan solusi dan kontribusi terbaik dalam pengembangan Digital Transformation klien.
                        </p>
                    </div>
                </div>
            </div>

            @include('components.carousel-produk')

            <div class="w-full flex flex-col justify-center items-center mt-16 px-4 sm:px-12 md:px-24 mb-24">
                <div class="w-full flex flex-col items-center mb-8">
                    <h5 class="layanan-thanks-title text-2xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-8 leading-tight tracking-wide text-center">
                        Terimakasih atas Kepercayaannya
                    </h5>
                    <div class="layanan-thanks-box w-full px-0 sm:px-52 justify-center text-center">
                        <p class="layanan-thanks-desc text-2xl sm:text-2xl">Kami selalu memberikan apresiasi dan rasa terima kasih kepada rekan, mitra dan pelanggan setia kami yang telah mempercayakan jasa kepada kami.</p>
                    </div>
                </div>
                @include('components.carousel-client')
            </div>
        </div>
    </div>

    @include('templates.footer')
@endsection

@section('script')
    {{-- script --}}
@endsection