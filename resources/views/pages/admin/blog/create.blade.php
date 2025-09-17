@extends('templates.template')

@section('container')
    <div class="w-full bg-white p-8 rounded-lg shadow-md">
        <a href="{{ route('admin.blog.index') }}"
            class="flex flex-row items-center gap-2 w-fit px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mb-4">
            @include('components.icons', ['name' => 'arrow-left-2', 'size' => 20])
            Kembali</a>

        <h2 class="text-red-700 text-2xl font-bold mb-6">Tambah Blog Baru</h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="font-semibold mb-2 block">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required maxlength="255"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700 transition">
            </div>
            <div class="mb-4">
                <label for="content" class="font-semibold mb-2 block">Konten</label>
                <textarea name="content" id="content" rows="6" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700 transition">{{ old('content') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="tanggal_berita" class="font-semibold mb-2 block">Tanggal Berita</label>
                <input type="date" name="tanggal_berita" id="tanggal_berita" value="{{ old('tanggal_berita') }}" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700 transition">
            </div>
            <div class="mb-4">
                <label for="category" class="font-semibold mb-2 block">Kategori</label>
                <select name="category" id="category" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700 transition">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat }}" {{ old('category') == $cat ? 'selected' : '' }}>
                            {{ ucfirst($cat) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label for="image" class="font-semibold mb-2 block">Gambar (opsional)</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-red-700 transition">
            </div>
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.blog.index') }}"
                    class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">Batal</a>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Simpan</button>
            </div>
        </form>
    </div>
@endsection
