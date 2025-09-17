@extends('templates.template')

@section('container')
    <div class="p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-red-700">Daftar Blog</h1>
            <a href="{{ route('admin.blog.create') }}" class="px-4 py-2 bg-red-700 text-white rounded hover:bg-red-800">
                Tambah Blog
            </a>
        </div>

        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr class="text-left text-gray-700">
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Judul</th>
                        <th class="px-4 py-2 border">Isi</th>
                        <th class="px-4 py-2 border">Tanggal</th>
                        <th class="px-4 py-2 border">Kategori</th>
                        <th class="px-4 py-2 border">Gambar</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $i => $blog)
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-4 py-2 border">{{ $i + 1 }}</td>
                            <td class="px-4 py-2 border">{{ $blog->title }}</td>
                            <td class="px-4 py-2 border">{{ \Illuminate\Support\Str::limit($blog->content, 80) }}</td>
                            <td class="px-4 py-2 border">{{ \Carbon\Carbon::parse($blog->tanggal_berita)->format('d-m-Y') }}
                            </td>
                            <td class="px-4 py-2 border">{{ ucfirst($blog->category) }}</td>
                            <td class="px-4 py-2 border">
                                @if ($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Gambar" class="w-20 rounded">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex flex-col gap-2">
                                    <a href="{{ route('admin.blog.show', $blog->id) }}"
                                        class="w-fit px-3 py-1 rounded bg-green-600 text-white hover:bg-green-700 text-sm">View</a>
                                    <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                        class="w-fit px-3 py-1 rounded bg-blue-600 text-white hover:bg-blue-700 text-sm">Edit</a>
                                    <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin hapus blog ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 rounded bg-red-600 text-white hover:bg-red-700 text-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-gray-500">Belum ada blog.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
