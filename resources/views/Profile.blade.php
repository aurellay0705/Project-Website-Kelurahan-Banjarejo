<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <x-layout></x-layout>
</head>
<body>
    
    <x-navbar></x-navbar>

    <section class="relative min-h-screen flex items-center justify-center">
        <div class="bg-overlay"></div> <!-- Layer hitam transparan -->

    <!-- Konten -->
    <div class="relative z-10 px-6 max-w-5xl">
        <h1 class="text-center text-white md:text-5xl font-extrabold mb-4 mt-20">PROFIL KELURAHAN BANJAREJO</h1>
        
        <!-- Garis putih -->
        <div class="w-90 h-1 bg-white mx-auto mb-6"></div>

        <!-- Paragraf deskripsi -->
        <p class="text-base md:text-lg font-medium leading-relaxed text-justify text-white">
            Buku Profil Kelurahan Banjarejo menyajikan potret komprehensif mengenai kelurahan ini, mulai dari aspek geografis hingga sosial dan budaya. Buku ini menggambarkan karakteristik wilayah, termasuk batas-batas administratif, kondisi alam, serta fasilitas umum yang ada. Di dalamnya juga terdapat data penduduk, struktur pemerintahan, serta potensi ekonomi yang dimiliki oleh Kelurahan Banjarejo. Selain itu, profil ini menyoroti program-program pembangunan dan kegiatan masyarakat yang mencerminkan kekayaan budaya dan kehidupan sosial warga. Buku ini menjadi referensi penting bagi siapa pun yang ingin memahami lebih dalam tentang Kelurahan Banjarejo.
        </p>

        <!-- Panah bawah -->
        <div class="mt-10 animate-bounce  text-white">
            <svg class="mx-auto w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </div>

            <!-- Contoh penyematan iframe buku (jika tersedia online) -->
            <div class="mt-8 mb-10">
                <div class="aspect-[4/3] shadow-xl rounded-lg overflow-hidden">
                    <iframe src="https://www.canva.com/design/DAGTmc4mN4A/C0d9hwcKpxeDOJfNhkipOQ/view?embed"
                            allowfullscreen
                            class="w-full h-full border-none"></iframe>
                </div>
            </div>
        </div>

    </div>
    </section>
</body>
</html>