<nav class="bg-black bg-opacity-60 h-20 shadow-sm fixed w-full top-0 left-0 z-30">
    <div class="container mx-auto px-4 h-full">
        <div x-data="{ open: false }" class="flex items-center justify-between h-full relative">
            <a href="#" class="flex items-center">
                <img src="{{ asset('assets/img/logo-deka.png') }}" alt="DEKA Logo" class="h-14">
            </a>
            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-16">
                <li>
                    <a href="#" class="font-semibold hover:text-[#C00000] text-xl leading-none tracking-normal text-center text-white">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="#" class="font-semibold hover:text-[#C00000] text-xl leading-none tracking-normal text-center text-white" >
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="#" class="font-semibold text-xl leading-none tracking-normal text-center text-white hover:text-[#C00000]">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#" class="font-semibold text-xl leading-none tracking-normal text-center text-white hover:text-[#C00000]">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="#" class="font-semibold text-xl leading-none tracking-normal text-center p-2 px-4 border border-[#C00000] bg-transparent hover:bg-[#C00000] hover:text-white text-[#C00000] rounded-lg transition duration-300 ease-in-out">
                        Hubungi Kami
                    </a>
                </li>
            </ul>
            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden text-white focus:outline-none z-20 relative" aria-label="Toggle menu" :aria-expanded="open">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'inline-flex': open, 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <!-- Mobile Menu -->
            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="absolute top-full left-0 w-full bg-black bg-opacity-90 md:hidden z-10"
                @click.away="open = false">
                <ul class="flex flex-col space-y-2 py-4 px-4">
                    <li><a href="#" class="block px-4 py-2 text-white hover:bg-blue-900 rounded">Beranda</a></li>
                    <li><a href="#" class="block px-4 py-2 text-white hover:bg-blue-900 rounded">Tentang Kami</a></li>
                    <li><a href="#" class="block px-4 py-2 text-white hover:bg-blue-900 rounded">Blog</a></li>
                    <li><a href="#" class="block px-4 py-2 text-white hover:bg-blue-900 rounded">Layanan</a></li>
                    <li><a href="#" class="block px-4 py-2 text-white hover:bg-blue-900 rounded">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>