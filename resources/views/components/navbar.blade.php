<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Banjarejo</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- Alpine.js untuk toggle menu mobile -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans bg-gray-100 text-gray-900">

<nav class="bg-[#0F132A] text-white py-4 shadow-md" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center px-4">
        <!-- Tombol Hamburger (mobile only) -->
        <div class="md:hidden">
            <button @click="open = !open" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Menu Desktop -->
        <div class="hidden md:flex space-x-6 text-lg font-extrabold items-center">
            <a href="{{ url('/') }}"
               class="menu-item px-6 py-2 rounded-full transition
               {{ request()->is('/') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
                Home
            </a>
            <a href="{{ route('berita.index') }}"
            class="menu-item px-6 py-2 rounded-full transition
            {{ request()->is('berita') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
                Berita
            </a>

            <a href="{{ url('/publikasi') }}"
               class="menu-item px-6 py-2 rounded-full transition
               {{ request()->is('publikasi') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
                Publikasi
            </a>

            <a href="{{ url('/profile') }}"
               class="menu-item px-6 py-2 rounded-full transition
               {{ request()->is('profile') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
                Profile
            </a>

            <a href="{{ url('/pecelmadiun') }}"
               class="menu-item px-6 py-2 rounded-full transition
               {{ request()->is('pecelmadiun') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
                PECEL MADIUN
            </a>
        </div>
    </div>

    <!-- Menu Mobile -->
<div x-show="open" x-transition class="md:hidden mt-4 px-4 space-y-2">
    <a href="{{ url('/') }}"
       class="block px-4 py-2 rounded-full font-bold transition
       {{ request()->is('/') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
       Home
    </a>
    <a href="#berita"
       class="block px-4 py-2 rounded-full font-bold transition
       {{ request()->is('#berita') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
       Berita
    </a>
    <a href="#publikasi"
       class="block px-4 py-2 rounded-full font-bold transition
       {{ request()->is('#publikasi') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
       Publikasi
    </a>
    <a href="{{ url('/profile') }}"
       class="block px-4 py-2 rounded-full font-bold transition
       {{ request()->is('profile') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
       Profile
    </a>
    <a href="{{ url('/') }}"
       class="block px-4 py-2 rounded-full font-bold transition
       {{ request()->is('pecel') ? 'bg-white text-[#0F132A]' : 'text-white hover:bg-white hover:text-[#0F132A]' }}">
       PECEL MADIUN
    </a>
</div>
</nav>

<main>
    @yield('content')
</main>

</body>
</html>
