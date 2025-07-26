<div class="relative rounded-lg shadow-lg overflow-hidden w-full max-w-[340px] sm:max-w-[400px] md:max-w-[440px] h-[420px] sm:h-[480px] md:h-[520px] flex flex-col">
    <!-- Background Image -->
    <div 
        class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ $image }}');"
        aria-label="{{ $title }}"
    ></div>
    <!-- Overlay for readability -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <!-- Inner shadow overlay -->
    <div class="absolute inset-0 pointer-events-none z-0"
        style="background: linear-gradient(to top, rgba(0,0,0,0.7) 20%, rgba(0,0,0,0) 100%);">
    </div>
    <!-- Content starts from 50% height downwards -->
    <div class="absolute left-0 right-0 top-1/2 bottom-0 z-10 flex flex-col items-start justify-start w-full h-auto px-4 sm:px-6 pb-4 sm:pb-6">
        <h6 class="text-lg sm:text-xl font-bold text-white mb-2 sm:mb-4">{{ $title }}</h6>
        <p class="text-white text-sm sm:text-base line-clamp-6 w-full">
            {{ $description }}
        </p>
        <div class="flex-grow"></div>
        <button class="flex items-center justify-center text-base sm:text-xl text-white font-medium rounded hover:text-[#C00000] transition-all duration-200 mb-6">
            Selengkapnya
            @include('components.icons', ['name' => 'arrow-right-2', 'size' => 24])
        </button>
    </div>
</div>