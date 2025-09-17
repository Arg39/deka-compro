@extends('templates.template')

@section('container')
    <div class="mx-auto bg-white p-8 rounded-lg shadow mt-8">
        <a href="{{ route('admin.blog.index') }}"
            class="flex flex-row items-center gap-2 w-fit px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mb-4">
            @include('components.icons', ['name' => 'arrow-left-2', 'size' => 20])
            Kembali</a>

        <h2 class="text-2xl font-bold text-red-700 mb-6">{{ $blog->title }}</h2>

        <div class="mb-6">
            <span class="block font-semibold mb-1">Gambar</span>
            @if ($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Gambar" class="rounded w-56 h-auto">
            @else
                <span class="text-gray-700">-</span>
            @endif
        </div>

        <div class="mb-4">
            <span class="block font-semibold mb-1">Kategori</span>
            <span class="text-gray-700">{{ ucfirst($blog->category) }}</span>
        </div>

        <div class="mb-4">
            <span class="block font-semibold mb-1">Tanggal</span>
            <span class="text-gray-700">{{ \Carbon\Carbon::parse($blog->tanggal_berita)->format('d-m-Y') }}</span>
        </div>

        <div class="mb-8">
            <span class="block font-semibold mb-1">Isi</span>
            <div class="text-gray-800 leading-relaxed">{{ $blog->content }}</div>
        </div>
    </div>
@endsection
