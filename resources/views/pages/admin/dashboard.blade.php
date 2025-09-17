@extends('templates.template')

@php($showSidebar = true)

@section('container')
    <div class="p-8">
        <h1 class="text-2xl text-red-700 font-bold mb-6">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-lg font-semibold mb-2 text-gray-700">Banyak Pesan dari Pengguna</div>
                <div class="text-3xl font-bold text-gray-900">{{ $messagesCount }}</div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-lg font-semibold mb-2 text-gray-700">Banyak Blog yang telah dibuat</div>
                <div class="text-3xl font-bold text-gray-900">{{ $blogsCount }}</div>
            </div>
        </div>
    </div>
@endsection
