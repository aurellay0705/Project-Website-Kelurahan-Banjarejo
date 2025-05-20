<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Banjarejo</title>
    
<x-layout></x-layout>

</head>
<body class="bg-gray-100 font-sans">

    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center">
        <div class="bg-overlay"></div> <!-- Layer hitam transparan -->

        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 items-center relative z-10">
            <!-- Text -->
            <div class="text-white space-y-6">
                <h1 class="text-3xl md:text-5xl font-black uppercase">
                    Selamat Datang<br>
                    di Website Resmi<br>
                    Kelurahan Banjarejo<br>
                    Kecamatan Taman<br>
                    Kota Madiun
                </h1>
                <p class="text-base md:text-lg">
                    Banjarejo adalah sebuah kelurahan di wilayah Kecamatan Taman, Kota Madiun, Provinsi Jawa Timur. Kode POS 63137. Terletak di sebelah selatan kota Madiun, di sebelah timur masih ada area persawahan dan mayoritas menjadi petani serta penggarap. Industri tahu terdapat di dusun Banjarwaru, dan di jalan Koperasi terdapat Ayam Panggang Banjarejo serta Tempat Pengolahan Kebun Kacang Kampung Mandiri “Adhikari”.
                </p>
            </div>

            <!-- Illustration Image -->
            <div class="hidden md:flex justify-end item-center">
                <img class="p-10 max-w-sm" src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/White-with-Photo-Join-the-Club-Social-Media-2720-x-2720-piksel-6.png" alt="Ilustrasi">
            </div>
        </div>
    </section>

    <!-- Lagu & Layanan Section -->
    <section class="relative py-16 text-white">
        <div class="bg-overlay"></div> <!-- Layer hitam transparan -->

        <div class="container mx-auto text-center px-4 relative z-10">
            <!-- Judul -->
            <h2 class="text-3xl font-bold mb-4">BANJAREJO OFFICIAL SONG</h2>

            <!-- Pemutar Lagu -->
            <div class="flex justify-center mb-4">
                <audio controls class="rounded-full bg-white p-2 w-96">
                    <source src="/audio/banjarejo-song.mp3" type="audio/mpeg">
                    Browser Anda tidak mendukung pemutar audio.
                </audio>
            </div>

            <!-- Garis putus-putus -->
            <div class="flex justify-center mb-8">
                <div class="border-t border-dotted border-white w-3/4"></div>
            </div>

            <!-- Deskripsi -->
            <p class="text-lg mb-8 font-semibold">
                DAPATKAN INFORMASI TERLENGKAP SEPUTAR WILAYAH KELURAHAN BANJAREJO
            </p>

            @php
                $images = [
                    'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/pecel-tumpang-1.png',
                    'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/pecel-tumpang-1.jpg',
                    'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/pecel-tumpang.png',
                    'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/pecel-tumpang-15.png',
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($images as $img)
                    <div class="bg-white text-[#0F132A] rounded-[50px] p-6 text-center shadow-lg relative">
                        <img src="{{ $img }}" alt="Gambar" class="mx-auto mb-4 w-full h-full object-cover rounded-[30px]">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-footer></x-footer>

</body>
</html>
