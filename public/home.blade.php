<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Banjarejo</title>

    <style>
        .bg-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5); /* layer hitam transparan */
            z-index: 0;
        }
    </style>

    <x-layout></x-layout>
</head>

<body class="bg-gray-100 font-sans">
    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-cover bg-center">
        <div class="bg-overlay"></div>
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 items-center relative z-10">
            <div class="text-white space-y-6">
                <h1 class="text-3xl md:text-5xl font-black uppercase">
                    Selamat Datang<br>
                    di Website Resmi<br>
                    Kelurahan Banjarejo<br>
                    Kecamatan Taman<br>
                    Kota Madiun
                </h1>
                <p class="text-base md:text-lg">
                    Banjarejo adalah sebuah kelurahan di wilayah Kecamatan Taman, Kota Madiun, Provinsi Jawa Timur. kode POS . 63137 terletak disebelah selatan dari kota madiun, disebelah timur masih ada area persawahan dan mayoritas menjadi petani dan petani penggarap. industri tahu terdapat didusun banjarwaru bergeser ke selatan di jalan koperasi terdapat ayam panggang banjarejo dan Tempat Pengolahan Kebun Kacang Kampung Mandiri “Adhikari”
                </p>
            </div>
            <div class="hidden md:flex justify-end item-center">
                <img class="p-10 max-w-sm" src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/White-with-Photo-Join-the-Club-Social-Media-2720-x-2720-piksel-6.png" alt="Ilustrasi">
            </div>
        </div>
    </section>

    <!-- Lagu & Layanan Section -->
    <section class="relative py-16 text-white bg-cover bg-center">
        <div class="bg-overlay"></div>
        <div class="container mx-auto text-center px-4 relative z-10">
            <h2 class="text-3xl font-bold mb-4">BANJAREJO OFFICIAL SONG</h2>
            <div class="flex justify-center mb-4">
                <audio controls class="rounded-full bg-white p-2 w-96">
                    <source src="/audio/banjarejo-song.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="flex justify-center mb-8">
                <div class="border-t border-dotted border-white w-3/4"></div>
            </div>
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

    <!-- Peta Interaktif -->
    <section class="relative py-16 text-white bg-cover bg-center">
        <div class="bg-overlay"></div>
        <div class="flex flex-col justify-center items-center h-full px-6 text-center relative z-10">
            <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/02/Biru-Kuning-Ilustrasi-Study-Tour-Spanduk.jpg" class="w-25 mb-4" 
            alt="Logo Kota Madiun"
            style="display: block; margin: 0 auto; width: 600px; height: auto; border-radius: 8px;">
            <a href="https://storymaps.arcgis.com/stories/0faea06104044fae9861581ea1364b06" class="mt-6 mb-6 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-full transition-all">
                🚀 Akses Peta Interaktif
            </a>
        </div>
    </section>

    <!-- Tugas dan Fungsi Instansi -->
    <section class="relative py-16 text-white bg-cover bg-center">
        <div class="bg-overlay"></div>

        <div class="max-w-4xl mx-auto text-center space-y-8 px-4 relative z-10">
            <div>
                <div class="inline-block bg-gray-900 text-white font-bold py-1 px-4 rounded">
                    TUGAS DAN FUNGSI INSTANSI
                </div>
            </div>

            <div>
                <h2 class="text-2xl font-extrabold mb-2">JAM PELAYANAN KELURAHAN BANJAREJO</h2>
                <p class="text-lg font-semibold">SENIN - KAMIS : 07.00 WIB S/D 15.30 WIB</p>
                <p class="text-lg font-semibold">JUM'AT : 06.30 WIB S/D 14.30 WIB</p>
            </div>

            <div class="border-t border-dotted border-white w-full max-w-xl mx-auto my-4"></div>

            <div>
                <h3 class="text-xl font-bold mb-2">PANDUAN JENIS DAN CARA PEMBUATAN ADMINISTRASI SURAT PELAYANAN</h3>
                <a href="#"
                   class="inline-flex items-center justify-center bg-white text-black font-bold px-8 py-2 rounded-full shadow hover:bg-green-600 hover:text-white transition w-full max-w-sm mx-auto">
                    KLIK DISINI
                </a>
            </div>

            <div class="border-t border-dotted border-white w-full max-w-xl mx-auto my-4"></div>

            <div>
                <h3 class="text-xl font-bold mb-2">HUBUNGI ADMIN PELAYANAN KELURAHAN BANJAREJO VIA WHATSAPP</h3>
                <a href="https://wa.me/628xxxxxxxxxx" target="_blank"
                   class="inline-flex items-center justify-center bg-white text-black font-bold px-8 py-2 rounded-full shadow hover:bg-green-600 hover:text-white transition w-full max-w-sm mx-auto">
                    <img src="https://img.icons8.com/ios-filled/24/000000/whatsapp.png" alt="WA" class="w-5 h-5 mr-2" />
                    CONTACT PERSON (WHATSAPP)
                </a>
            </div>

            <div class="border-t border-dotted border-white w-full max-w-xl mx-auto my-4"></div>

            <div>
                <a href="#"
                   class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-6 py-2 rounded-full inline-block">
                    OPEN DATA KOTA MADIUN
                </a>
            </div>
        </div>
    </section>

    <section class="relative py-16 text-white bg-cover bg-center">
        <div class="bg-overlay"></div>

    <h1 class="font-bold text-4xl text-center">PELAYANAN ONLINE PECEL TUMPANG</h1>
    <h2 class="font-bold text-2xl text-center">Pelayanan cepat langsung, hemat waktu dan gampang Kota Madiun</h2>

  <div class="banner" style="margin-top: 40px;">
  <a href="https://peceltumpang.madiunkota.go.id/" target="_blank">
    <img
      src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/Salinan-dari-Ragam-Statistik-Kelurahan-Banjarejo-2.png"
      alt="Banner Pecel Tumpang"
      style="display: block; margin: 0 auto; width: 600px; height: auto; border-radius: 8px;"
    >
  </a>
</div>
    </section>

    <section class="relative py-16 text-white bg-cover bg-center">
        <div class="bg-overlay"></div>

    <h1 class="font-bold text-4xl text-center">Mini Book Statistik UMKM Kelurahan</h1>
    <h2 class="font-bold text-4xl text-center">Banjarejo Tahun 2024</h2>

<div style="display: flex; justify-content: center; margin-top: 2rem; margin-bottom: 2rem;">
  <div style="
    width: 600px;
    height: 350px; /* 4:3 aspect ratio dari 600px */
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  ">
    <iframe
      src="/Ragam%20Statistik%20Kelurahan%20Banjarejo.html"
      allowfullscreen
      style="width: 100%; height: 100%; border: none;"
    ></iframe>
  </div>
</div>

<div style="display: flex; justify-content: center; margin-top: 2rem; margin-bottom: 2rem;">
  <div style="
    width: 100%;
    max-width: 600px;
    height: 900px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    background: transparent;
  ">
    <iframe
      src="/Salinan%20dari%20Kompilasi%20Cerita%20Kuliner%20UMKM%20Banjarejo.html"
      allowfullscreen
      style="
        width: 100%;
        height: 100%;
        border: none;
        margin: 0;
        padding: 0;
        display: block;
        background: transparent;
      "
    ></iframe>
  </div>
</div>
    </section>

      <section class="relative min-h-screen flex items-center justify-center">
        <div class="bg-overlay"></div> <!-- Layer hitam transparan -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
        style="
        width: 100%;
        max-width: 600px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        background: transparent;
        ">
            <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/Purple-Illustrative-Social-Media-Management-Instagram-Post-6.png" class="w-full rounded-lg shadow-md">
            <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/Purple-Illustrative-Social-Media-Management-Instagram-Post-5.png" class="w-full rounded-lg shadow-md">
            <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/Purple-Illustrative-Social-Media-Management-Instagram-Post-4.png" class="w-full rounded-lg shadow-md">
            <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/Purple-Illustrative-Social-Media-Management-Instagram-Post-2-1.png" class="w-full rounded-lg shadow-md">
            <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/Purple-Illustrative-Social-Media-Management-Instagram-Post-1-1.png" class="w-full rounded-lg shadow-md">
            <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/Purple-Illustrative-Social-Media-Management-Instagram-Post-2.png" class="w-full rounded-lg shadow-md">
        </div>
</section>

 <section class="relative min-h-screen flex items-center justify-center">
        <div class="bg-overlay"></div> <!-- Layer hitam transparan -->
        <a href="https://e-sppt.madiunkota.go.id/pembayaran" target="_blank" rel="noopener noreferrer" >
            <img 
                src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/03/Blue-Illustrative-Time-is-Gold-Manage-it-Wisely-Poster.jpg" 
                alt="poster"
                style=" width: 100%; max-width: 600px;"
                class="rounded-xl shadow-2xl hover:scale-105 transition duration-300 w-full max-w-md mx-auto mb-10"
            >
        </a>
 </section>


    <x-footer></x-footer>
</body>
</html>
