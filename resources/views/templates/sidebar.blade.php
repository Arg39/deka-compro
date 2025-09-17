<aside
    class="w-64 bg-white border-r min-h-screen flex flex-col h-full
        fixed top-0 left-0 z-50
        md:z-40 md:relative md:flex md:h-auto md:min-h-screen">
    <div class="px-6 py-4 border-b flex items-center justify-between">
        <span class="text-xl font-bold text-gray-800">Admin Panel</span>
        <!-- Close button for mobile -->
        <button @click="$store.sidebar.hide()" class="md:hidden text-gray-600 hover:text-gray-800 focus:outline-none">
            <i class="fa fa-times fa-lg"></i>
        </button>
    </div>
    <nav class="flex-1 px-4 py-4 space-y-2 overflow-y-auto">
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium">
            <i class="fa fa-home mr-2"></i> Dashboard
        </a>
        <a href="{{ route('admin.message') }}"
            class="flex items-center px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium">
            <i class="fa fa-message mr-2"></i> Pesan Masuk
        </a>
        <a href="{{ route('admin.blog.index') }}"
            class="flex items-center px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium">
            <i class="fa fa-blog mr-2"></i> Blog
        </a>
        <button type="button"
            class="flex items-center px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium w-full text-left"
            @click="$store.logoutModal.show();">
            <i class="fa fa-sign-out-alt mr-2"></i> Logout
        </button>
    </nav>
</aside>
