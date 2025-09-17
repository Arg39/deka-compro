@php
    use Illuminate\Support\Str;
@endphp

<div class="mb-8">
    <div class="bg-cover bg-center blog-img w-full h-96 sm:h-96 h-56 sm:w-full w-full"
        style="background-image: url('{{ asset('storage/' . $blog->image) }}');">
        <div class="w-full h-full flex items-end">
            <p class="p-2 px-4 bg-[#C00000] text-white font-bold text-sm sm:text-base">{{ $blog->category }}</p>
        </div>
    </div>

    <p class="mt-4 text-lg sm:text-lg text-base font-bold blog-title">{{ $blog->title }}</p>
    <p class="mt-2 text-gray-600 line-clamp-3 blog-desc text-sm sm:text-base">{{ $blog->content }}</p>

    <button onclick="location.href='{{ url('/blog/' . $blog->id) }}'"
        class="mt-4 flex items-center gap-2 text-gray-600 hover:text-[#C00000] font-semibold selengkapnya-btn text-sm sm:text-base"
        data-id="{{ $blog->id }}">
        Selengkapnya
        @include('components.icons', ['name' => 'arrow-right-2', 'size' => 24])
    </button>
</div>
