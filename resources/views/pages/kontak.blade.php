@extends('templates.template')

@section('style')
    <style>
        html {
            scroll-behavior: smooth;
        }

        .tentang-bg {
            background-image: url('{{ asset('assets/img/kontak.jpg') }}');
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
            .kontak-section {
                padding: 1.5rem 0.5rem !important;
            }

            .kontak-img {
                width: 100% !important;
                height: 220px !important;
                max-width: 100vw !important;
                object-position: center 20% !important;
            }

            .kontak-title {
                font-size: 1.25rem !important;
                margin-bottom: 1rem !important;
            }

            .kontak-desc {
                font-size: 1rem !important;
                padding: 0 !important;
                margin-top: 1rem !important;
            }

            .kontak-flex {
                flex-direction: column !important;
                gap: 1.5rem !important;
            }

            .kontak-breadcrumb {
                font-size: 1rem !important;
                margin-top: 1rem !important;
            }

            .kontak-thanks-title {
                font-size: 1.25rem !important;
                margin-bottom: 1.5rem !important;
            }

            .kontak-thanks-desc {
                font-size: 1rem !important;
                padding: 0 !important;
            }

            .kontak-thanks-box {
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
                    Hubungi kami
                </h1>
                {{-- breadcrumb --}}
                <div
                    class="kontak-breadcrumb flex flex-wrap items-center space-x-2 text-white mt-4 sm:mt-8 text-base sm:text-2xl">
                    <a href="{{ url('/') }}"
                        class="font-normal text-base sm:text-2xl text-white hover:underline">Beranda</a>
                    <span class="text-[#C00000]">
                        @include('components.icons', ['name' => 'arrow-right', 'size' => 24])
                    </span>
                    <span class="font-normal text-base sm:text-2xl text-white">Hubungi Kami</span>
                </div>
            </div>
        </div>
    </div>

    <div class="h-fit bg-[#F3F0F1]">
        <div class="pt-8 sm:pt-24 flex flex-col justify-center items-center px-4 sm:px-0">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#C00000] mb-4 sm:mb-8 uppercase text-center">Tim Delta Siap
                Membantu</h2>
        </div>

        <div class="p-4 sm:p-16">
            <h2 class="text-lg font-extrabold text-[#C00000] mb-4 uppercase text-start">Kirim Pesan</h2>
            <div class="w-full bg-[#F3F0F1] flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                    <h3 class="text-2xl font-extrabold text-black mb-4 uppercase text-start">HUBUNGI KAMI UNTUK MENDAPATKAN
                        INFORMASI LEBIH LENGKAP
                    </h3>
                    <p class="text-base text-black mb-4 font-bold text-start">
                        <span class="text-[#C00000]">
                            Waktu Pelayanan:
                        </span>
                        Senin - Sabtu (09:00 - 22:00 WITA)
                    </p>
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-row items-center gap-2">
                            <div class="text-[#C00000]">
                                @include('components.icons', ['name' => 'map', 'size' => 64])
                            </div>
                            <div>
                                <p class="text-[#C00000] font-bold">Alamat</p>
                                <p>Perum Pelangi Metro Residence Blok F No. 11 Batu Ampar Balikpapan</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <div class="text-[#C00000]">
                                @include('components.icons', ['name' => 'phone', 'size' => 64])
                            </div>
                            <div>
                                <p class="text-[#C00000] font-bold">Telepon</p>
                                <a href="https://wa.me/628115469933" target="_blank"
                                    rel="noopener noreferrer">+62-811-5469-933</a>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <div class="text-[#C00000]">
                                @include('components.icons', ['name' => 'email-newsletter', 'size' => 64])
                            </div>
                            <div>
                                <p class="text-[#C00000] font-bold">E-mail</p>
                                <a href="mailto:admin@deltaeka.id" target="_blank"
                                    rel="noopener noreferrer">admin@deltaeka.id</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex flex-row items-center gap-2">
                        <h5 class="text-lg text-[#C00000] font-bold">Media Sosial:</h5>
                        <div class="flex flex-row items-center gap-2">
                            <div class=" w-8 h-8 rounded-full flex justify-center items-center bg-[#C00000] text-white">
                                @include('components.icons', ['name' => 'whatsapp', 'size' => 20])
                            </div>
                            <div class=" w-8 h-8 rounded-full flex justify-center items-center bg-[#C00000] text-white">
                                @include('components.icons', ['name' => 'x-twitter', 'size' => 16])
                            </div>
                            <div class=" w-8 h-8 rounded-full flex justify-center items-center bg-[#C00000] text-white">
                                @include('components.icons', ['name' => 'facebook', 'size' => 20])
                            </div>
                            <div class=" w-8 h-8 rounded-full flex justify-center items-center bg-[#C00000] text-white">
                                @include('components.icons', ['name' => 'instagram', 'size' => 20])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 ">
                    {{-- Notification --}}
                    @if (session('success'))
                        <div class="notif-success flex items-center gap-3 p-4 mb-4 rounded-lg bg-green-100 border border-green-400 text-green-800 shadow transition-opacity duration-300 animate-fade-in"
                            role="alert">
                            <span class="inline-block">
                                @include('components.icons', ['name' => 'check-circle', 'size' => 24])
                            </span>
                            <span class="flex-1">{{ session('success') }}</span>
                            <button type="button" onclick="this.parentElement.style.display='none'"
                                class="ml-2 text-green-700 hover:text-green-900 focus:outline-none">
                                &times;
                            </button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="notif-error flex items-center gap-3 p-4 mb-4 rounded-lg bg-red-100 border border-red-400 text-red-800 shadow transition-opacity duration-300 animate-fade-in"
                            role="alert">
                            <span class="inline-block">
                                @include('components.icons', ['name' => 'close-circle', 'size' => 24])
                            </span>
                            <span class="flex-1">{{ session('error') }}</span>
                            <button type="button" onclick="this.parentElement.style.display='none'"
                                class="ml-2 text-red-700 hover:text-red-900 focus:outline-none">
                                &times;
                            </button>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="notif-error flex items-start gap-3 p-4 mb-4 rounded-lg bg-red-100 border border-red-400 text-red-800 shadow transition-opacity duration-300 animate-fade-in"
                            role="alert">
                            <span class="inline-block mt-1">
                                @include('components.icons', ['name' => 'info-circle', 'size' => 24])
                            </span>
                            <div class="flex-1">
                                <span class="font-semibold">Data tidak valid. Mohon cek kembali:</span>
                                <ul class="mb-0 pl-4 list-disc">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <button type="button" onclick="this.parentElement.style.display='none'"
                                class="ml-2 text-red-700 hover:text-red-900 focus:outline-none">
                                &times;
                            </button>
                        </div>
                    @endif

                    <style>
                        @keyframes fade-in {
                            from {
                                opacity: 0;
                                transform: translateY(-10px);
                            }

                            to {
                                opacity: 1;
                                transform: translateY(0);
                            }
                        }

                        .animate-fade-in {
                            animation: fade-in 0.4s;
                        }
                    </style>

                    <form class="w-full flex flex-col gap-4" method="POST" action="{{ route('kontak.store') }}">
                        @csrf
                        <input class="w-full bg-[#F3F0F1] p-4 sm:p-8 border border-[#C00000]" type="text" name="name"
                            placeholder="nama lengkap" id="name">
                        <input class="w-full bg-[#F3F0F1] p-4 sm:p-8 border border-[#C00000]" type="email" name="email"
                            placeholder="Alamat E-mail" id="email">
                        <input class="w-full bg-[#F3F0F1] p-4 sm:p-8 border border-[#C00000]" type="tel" name="phone"
                            placeholder="Nomor Telepon" id="phone">
                        <textarea class="w-full bg-[#F3F0F1] p-4 sm:p-8 border border-[#C00000] min-h-[160px] resize-none" name="message"
                            placeholder="Masukkan Pesan" id="message" rows="5"></textarea>
                        <button class="w-fit">
                            <div
                                class="bg-[#F3F0F1] gap-2 border border-[#C00000] text-[#C00000] hover:bg-[#C00000] hover:text-white font-bold p-2 flex items-center justify-center transition-colors duration-300">
                                Kirim Pesan
                                @include('components.icons', ['name' => 'arrow-right-2', 'size' => 24])
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-[#F3F0F1] flex justify-center">
        <div class="w-full flex flex-col items-center mt-16 mb-24 px-4 sm:px-0">
            <h5
                class="text-xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-8 sm:mb-16 leading-tight tracking-wide text-center">
                Lokasi Kami
            </h5>
            <div class="w-full">
                <iframe class="w-full h-[300px] sm:h-[450px]"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1178.8802264769415!2d116.86054610906668!3d-1.223643222179101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1462215e4c245%3A0xdd261999d820c9f6!2sPerumahan%20Pelangi%20Metro%20Residence%20Blok%20E!5e0!3m2!1sen!2sid!4v1753367909639!5m2!1sen!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    @include('templates.footer')
@endsection

@section('script')
    {{-- Toastify CDN --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script>
        @if (session('success'))
            Toastify({
                text: "{{ session('success') }}",
                duration: 4000,
                gravity: "top",
                position: "right",
                backgroundColor: "#4BB543",
            }).showToast();
        @endif

        @if (session('error'))
            Toastify({
                text: "{{ session('error') }}",
                duration: 4000,
                gravity: "top",
                position: "right",
                backgroundColor: "#C00000",
            }).showToast();
        @endif

        @if ($errors->any())
            Toastify({
                text: "Data tidak valid. Mohon cek kembali.",
                duration: 4000,
                gravity: "top",
                position: "right",
                backgroundColor: "#C00000",
            }).showToast();
        @endif
    </script>
@endsection
