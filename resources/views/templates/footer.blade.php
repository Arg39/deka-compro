@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

@endpush

<div class="w-full flex flex-col">
    <div style="width: 100%; height: 560px; background: url('{{ asset('assets/img/footer/footer.jpg') }}') center center / cover no-repeat; display: flex; align-items: center; justify-content: center;">
        <div class="w-full flex flex-col items-center justify-center">
            <h5 class="text-2xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-8 leading-tight tracking-wide text-center">
                Terimakasih atas Kepercayaannya
            </h5>
            <p class="text-white text-xl text-center">Hubungi kami untuk berkesempatan mendapatkan penawaran 
                <br> menarik dari kami. Kami juga membuka kerjasama kepada 
                <br> Anda yang ingin menjadi partner kami
            </p>
            <button class="mt-16 px-6 py-3 border-4 border-[#C00000] text-[#C00000] text-xl font-semibold rounded-lg hover:bg-[#C00000] hover:text-white transition duration-300">
                Hubungi Kami
            </button>
        </div>
    </div>
    <div class="bg-[#252525] text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-10">
                
                <div class="lg:col-span-3 flex flex-col gap-4">
              <a href="#" class="flex items-center">
                <img src="{{ asset('assets/img/logo-deka.png') }}" alt="Logo" class="max-w-[250px] h-auto">
              </a>
              <p class="text-md max-w-xl leading-loose text-justify text-gray-300">
                Delta Eka Perkasa adalah badan usaha yang bergerak di bidang Jasa Layanan Teknologi Informasi, Jaringan Telekomunikasi untuk kebutuhan Industri Telekomunikasi / Digital, Manufacturing, Plantation, Exploration & Mining di Indonesia. 
              </p>
              <div class="flex space-x-3">
                <a href="#" class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center hover:scale-110 transition">
                  <i class="fab fa-facebook-f text-white text-sm"></i>
                </a>
                <a href="#" class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center hover:scale-110 transition">
                  <i class="fab fa-twitter text-white text-sm"></i>
                </a>
                <a href="#" class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center hover:scale-110 transition">
                  <i class="fab fa-instagram text-white text-sm"></i>
                </a>
                <a href="#" class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center hover:scale-110 transition">
                  <i class="fab fa-youtube text-white text-sm"></i>
                </a>
              </div>
            </div>
      
            <div>
              <h3 class="text-lg font-semibold mb-4 uppercase">Tautan</h3>
              <ul class="space-y-2">
                <li><a href="#" class="flex items-center gap-2 hover:text-red-500"><span class="text-red-500">▶</span> Beranda</a></li>
                <li><a href="#" class="flex items-center gap-2 hover:text-red-500"><span class="text-red-500">▶</span> Kursus</a></li>
                <li><a href="#" class="flex items-center gap-2 hover:text-red-500"><span class="text-red-500">▶</span> Tentang Kami</a></li>
                <li><a href="#" class="flex items-center gap-2 hover:text-red-500"><span class="text-red-500">▶</span> Kontak</a></li>
              </ul>
            </div>
      
            <div>
              <h3 class="text-lg font-semibold mb-4 uppercase">Kontak</h3>
              <div class="flex flex-col space-y-3 text-sm text-gray-300">
                <p class="flex items-center gap-2"><i class="fas fa-phone text-red-500"></i> +62 812-3456-7890</p>
                <p class="flex items-center gap-2"><i class="fas fa-envelope text-red-500"></i> info@example.com</p>
                <p class="flex items-center gap-2"><i class="fas fa-map-marker-alt text-red-500"></i> Jl. Mawar No. 123, Jakarta</p>
              </div>
            </div>
      
            <div>
              <h3 class="text-lg font-semibold mb-4 uppercase">Jam Buka</h3>
              <div class="flex flex-col space-y-3 text-sm text-gray-300">
                <p class="flex items-center gap-2"><i class="fas fa-clock text-red-500"></i> Senin - Sabtu (09.00 - 22.00 WITA)</p>
              </div>
            </div>
          </div>
      
          <div class="text-center mt-10 text-sm text-gray-400 pt-4">
            Hak Cipta © 2023 • Semua hak dilindungi undang-undang.
          </div>
        </div>
      </div>
      
</div>