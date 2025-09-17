@extends('templates.template')

@section('container')
    <div class="p-8">
        <h1 class="text-2xl font-bold mb-6 text-red-700">Daftar Pesan Kontak</h1>
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr class="text-left text-gray-700">
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Telepon</th>
                        <th class="px-4 py-2 border">Pesan</th>
                        <th class="px-4 py-2 border">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $i => $msg)
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-4 py-2 border">{{ $i + 1 }}</td>
                            <td class="px-4 py-2 border">{{ $msg->name }}</td>
                            <td class="px-4 py-2 border">{{ $msg->email }}</td>
                            <td class="px-4 py-2 border">{{ $msg->phone }}</td>
                            <td class="px-4 py-2 border">{{ $msg->message }}</td>
                            <td class="px-4 py-2 border">{{ $msg->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-gray-500">Belum ada pesan masuk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
