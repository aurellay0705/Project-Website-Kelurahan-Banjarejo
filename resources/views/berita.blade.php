<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-layout></x-layout>
</head>
<body>

    <x-navbar></x-navbar>

<section class="relative min-h-screen flex items-center justify-center">
    <div class="bg-overlay"></div> <!-- Layer hitam transparan -->

    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6 mt-6 text-white">Kategori: Berita</h1>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($beritas as $berita)
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <img src="{{ $berita->thumbnail }}" alt="{{ $berita->judul }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex gap-2 mb-2">
                        @foreach($berita->tags as $tag)
                            <span class="text-xs bg-red-600 text-white px-2 py-1 rounded">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <h2 class="font-bold text-lg mb-2  hover:underline cursor-pointer">{{ $berita->judul }}</h2>
                    <p class="text-sm text-gray-600">{{ $berita->lokasi }}, {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('j F Y') }}</p>
                </div>
            </div>
            @endforeach
        </div>
        

        <!-- Jika kamu ingin menambahkan pagination, bisa menggunakan kode seperti ini -->
        <div class="mt-6">
            <!-- Pagination, jika diperlukan -->
        </div>
    </div>
</section>

</body>
</html>


