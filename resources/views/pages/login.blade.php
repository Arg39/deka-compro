@extends('templates.template')

@php($showNavbar = false)

@section('container')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow">
            <h2 class="text-2xl font-bold text-center">Login</h2>
            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block mb-1 font-semibold">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring" required autofocus>
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-1 font-semibold">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring" required>
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-sm">Ingat saya</label>
                </div>
                <button type="submit" class="w-full py-2 font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">
                    Login
                </button>
            </form>
        </div>
    </div>
@endsection
