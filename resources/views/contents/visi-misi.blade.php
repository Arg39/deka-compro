@php
    $visiTitle = $visiTitle ?? 'Visi';
    $visiContent = $visiContent ?? 'Menjadi mitra terkemuka dalam penyediaan solusi Teknologi Informasi, Jaringan Telekomunikasi, dan Layanan Industri untuk mendukung pertumbuhan berkelanjutan dan transformasi digital di Indonesia.';
    $visiIcon = $visiIcon ?? asset('assets/img/tentang/visi.png');
    $misiTitle = $misiTitle ?? 'Misi';
    $misiContent = $misiContent ?? 'Mengimplementasikan strategi bisnis dan operasional perusahaan yang berorientasi kepada pelanggan (customer-oriented). dapat beradaptasi dengan perubahan trend telekomunikasi dan industri yang berlangsung sangat cepat.';
    $misiIcon = $misiIcon ?? asset('assets/img/tentang/misi.png');
@endphp

{{-- Desktop & Tablet --}}
<div class="hidden md:flex flex-col md:flex-row justify-start items-start gap-8 w-full">
    <!-- VISI -->
    <div class="relative flex justify-center items-start" style="height: 600px; width: 350px;">
        <!-- Lingkaran di atas persegi panjang -->
        <div class="absolute left-1/2 -translate-x-1/2 z-20 flex flex-col items-center" style="width:300px; height:300px; top:-60px;">
            <div class="flex flex-col items-center justify-center" style="width:300px; height:300px; border:26px solid #C00000; border-radius:50%; background:white; opacity:1;">
                <img src="{{ $visiIcon }}" alt="Visi Icon" class="h-24 mb-2">
                <span class="text-2xl font-extrabold uppercase mt-2 text-[#C00000]">{{ $visiTitle }}</span>
            </div>
        </div>
        <!-- Persegi panjang rounded bawah, sedikit overlap dengan lingkaran -->
        <div class="absolute left-1/2 -translate-x-1/2 bg-white shadow-lg flex flex-col items-center z-10"
             style="width:300px; height:440px; top:90px; border-bottom-right-radius:100px; border-bottom-left-radius:100px; opacity:1;">
            <div class="pt-48 px-8 flex flex-col items-center">
                <p class="text-black text-center">
                    {{ $visiContent }}
                </p>
            </div>
        </div>
    </div>
    <!-- MISI -->
    <div class="relative flex justify-center items-start" style="height: 600px; width: 350px;">
        <!-- Lingkaran di atas persegi panjang -->
        <div class="absolute left-1/2 -translate-x-1/2 z-20 flex flex-col items-center" style="width:300px; height:300px; top:-60px;">
            <div class="flex flex-col items-center justify-center" style="width:300px; height:300px; border:26px solid #C00000; border-radius:50%; background:white; opacity:1;">
                <img src="{{ $misiIcon }}" alt="Misi Icon" class="h-24 mb-2">
                <span class="text-2xl font-extrabold uppercase mt-2 text-[#C00000]">{{ $misiTitle }}</span>
            </div>
        </div>
        <!-- Persegi panjang rounded bawah, sedikit overlap dengan lingkaran -->
        <div class="absolute left-1/2 -translate-x-1/2 bg-white shadow-lg flex flex-col items-center z-10"
             style="width:300px; height:440px; top:90px; border-bottom-right-radius:100px; border-bottom-left-radius:100px; opacity:1;">
            <div class="pt-48 px-8 flex flex-col items-center">
                <p class="text-black text-center">
                    {{ $misiContent }}
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Mobile --}}
<div class="hidden md:flex flex-col md:flex-row justify-start items-start gap-8 w-full">
    <!-- ...existing desktop/tablet code... -->
</div>

{{-- Mobile: Visi & Misi berdampingan --}}
<div class="flex flex-row md:hidden w-full justify-center gap-4">
    <!-- VISI Mobile -->
    <div class="relative flex justify-center items-start w-1/2 max-w-[180px]" style="min-height: 420px;">
        <!-- Lingkaran di atas persegi panjang -->
        <div class="absolute left-1/2 -translate-x-1/2 z-20 flex flex-col items-center" style="width:180px; height:180px; top:-36px;">
            <div class="flex flex-col items-center justify-center" style="width:180px; height:180px; border:14px solid #C00000; border-radius:50%; background:white; opacity:1;">
                <img src="{{ $visiIcon }}" alt="Visi Icon" class="h-12 mb-1">
                <span class="text-lg font-extrabold uppercase mt-1 text-[#C00000]">{{ $visiTitle }}</span>
            </div>
        </div>
        <!-- Persegi panjang rounded bawah, tinggi menyesuaikan isi -->
        <div class="absolute left-1/2 -translate-x-1/2 bg-white shadow-lg flex flex-col items-center z-10"
             style="width:180px; min-height:260px; top:54px; border-bottom-right-radius:60px; border-bottom-left-radius:60px; opacity:1;">
            <div class="pt-28 px-4 pb-4 flex flex-col items-center">
                <p class="text-black text-center text-sm break-words">
                    {{ $visiContent }}
                </p>
            </div>
        </div>
    </div>
    <!-- MISI Mobile -->
    <div class="relative flex justify-center items-start w-1/2 max-w-[180px]" style="min-height: 420px;">
        <!-- Lingkaran di atas persegi panjang -->
        <div class="absolute left-1/2 -translate-x-1/2 z-20 flex flex-col items-center" style="width:180px; height:180px; top:-36px;">
            <div class="flex flex-col items-center justify-center" style="width:180px; height:180px; border:14px solid #C00000; border-radius:50%; background:white; opacity:1;">
                <img src="{{ $misiIcon }}" alt="Misi Icon" class="h-12 mb-1">
                <span class="text-lg font-extrabold uppercase mt-1 text-[#C00000]">{{ $misiTitle }}</span>
            </div>
        </div>
        <!-- Persegi panjang rounded bawah, tinggi menyesuaikan isi -->
        <div class="absolute left-1/2 -translate-x-1/2 bg-white shadow-lg flex flex-col items-center z-10"
             style="width:180px; min-height:260px; top:54px; border-bottom-right-radius:60px; border-bottom-left-radius:60px; opacity:1;">
            <div class="pt-28 px-4 pb-4 flex flex-col items-center">
                <p class="text-black text-center text-sm break-words">
                    {{ $misiContent }}
                </p>
            </div>
        </div>
    </div>
</div>