@extends('templates.template')

@section('container')
    <div class="w-full bg-white p-8 rounded-lg shadow-md">
        <a href="{{ route('admin.blog.index') }}"
            class="flex flex-row items-center gap-2 w-fit px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mb-4">
            @include('components.icons', ['name' => 'arrow-left-2', 'size' => 20])
            Kembali</a>

        <h2 class="text-red-700 text-2xl font-bold mb-6">Edit Blog</h2>

        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="font-semibold mb-2 block">Judul</label>
                <input type="text" name="title" value="{{ old('title', $blog->title) }}" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700">
            </div>
            <div class="mb-4">
                <label class="font-semibold mb-2 block">Isi</label>
                <textarea name="content" rows="6" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700">{{ old('content', $blog->content) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="font-semibold mb-2 block">Tanggal</label>
                <input type="date" name="tanggal_berita" value="{{ old('tanggal_berita', $blog->tanggal_berita) }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700">
            </div>
            <div class="mb-4">
                <label class="font-semibold mb-2 block">Kategori</label>
                <select name="category" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700">
                    <option value="" disabled>Pilih kategori</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat }}" {{ $blog->category == $cat ? 'selected' : '' }}>
                            {{ ucfirst($cat) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="font-semibold mb-2 block">Gambar</label>
                <input type="file" name="image"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700">
                @if ($blog->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Gambar" width="120" class="rounded">
                    </div>
                @endif
            </div>
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.blog.index') }}"
                    class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
@endsection
