<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Delta Eka Perkasa</title>
    @vite('resources/css/app.css')
    @yield('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('logoutModal', {
                open: false,
                show() {
                    this.open = true
                },
                hide() {
                    this.open = false
                }
            });
            Alpine.store('sidebar', {
                open: false,
                show() {
                    this.open = true
                },
                hide() {
                    this.open = false
                }
            });
        });
    </script>
</head>

<body class="relative" x-data>
    @php
        $showSidebar = $showSidebar ?? false;
        $showNavbar = $showNavbar ?? true;
    @endphp

    {{-- Header mobile khusus admin --}}
    @if ($showSidebar)
        <div class="flex items-center justify-between px-4 py-2 border-b bg-white md:hidden">
            {{-- Admin: tombol buka sidebar --}}
            <button @click="$store.sidebar.show()" class="text-gray-700 focus:outline-none">
                @include('components.icons', ['name' => 'navigation', 'size' => 24])
            </button>
            <span class="font-bold text-lg">PT Delta Eka Perkasa</span>
        </div>
    @endif

    {{-- Navbar untuk public --}}
    @if ($showNavbar && !$showSidebar)
        @include('templates.navbar')
    @endif

    <div class="min-h-screen flex relative">
        {{-- Sidebar desktop --}}
        @if ($showSidebar)
            <div class="hidden md:block md:fixed md:top-0 md:left-0 md:h-full md:w-64 z-40">
                @include('templates.sidebar')
            </div>

            {{-- Sidebar mobile overlay --}}
            <div x-show="$store.sidebar.open" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 md:hidden" style="display: none;">
                <div class="absolute inset-0 bg-black bg-opacity-40" @click="$store.sidebar.hide()"></div>
                <div class="absolute left-0 top-0 h-full w-64">
                    @include('templates.sidebar')
                </div>
            </div>
        @endif

        {{-- Konten utama --}}
        <div class="flex-1 w-full @if ($showSidebar) md:ml-64 @endif">
            @yield('container')
        </div>
    </div>

    {{-- Logout Modal --}}
    <div x-show="$store.logoutModal.open" x-transition
        class="fixed inset-0 z-[60] flex items-center justify-center bg-black bg-opacity-40" style="display: none;">
        <div class="bg-white rounded-lg shadow-lg p-6 w-80">
            <h2 class="text-lg font-semibold mb-4">Konfirmasi Logout</h2>
            <p class="mb-6">Apakah Anda yakin ingin logout?</p>
            <div class="flex justify-end space-x-2">
                <button @click="$store.logoutModal.hide()"
                    class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Batal</button>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Logout</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Scroll to top --}}
    <div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 100 })" class="fixed bottom-6 right-6 z-[70]">
        <button x-show="show" x-transition @click="window.scrollTo({ top: 0, behavior: 'smooth' })" type="button"
            class="bg-black opacity-40 text-white rounded-full p-3 shadow-lg hover:bg-neutral-700 focus:outline-none"
            aria-label="Scroll to top">
            @include('components.icons', ['name' => 'arrow-up', 'size' => 24])
        </button>
    </div>

    {{-- Script Section --}}
    @yield('script')
</body>

</html>
