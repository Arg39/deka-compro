<div class="relative rounded-lg shadow-lg overflow-hidden w-full max-w-[460px] h-[240px] flex flex-col">
    <div 
        class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ $image }}');"
        aria-label="{{ $title }}"
    ></div>
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="absolute left-0 right-0 top-0 bottom-0 z-10 flex flex-col w-full h-full p-6">
        <div class="mb-8">
            @if(isset($icon))
                <span class="inline-flex items-center justify-center w-8 h-8 text-[#F3C22E]">
                    {!! $icon !!}
                </span>
            @endif
        </div>
        <h6 class="text-lg font-bold text-white mb-4 uppercase">{{ $title }}</h6>
        <p class="text-white text-base line-clamp-5 w-full">
            {{ $description }}
        </p>
    </div>
</div>