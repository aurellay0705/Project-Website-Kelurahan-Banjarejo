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

        <div class="max-w-6xl mx-auto text-center font-bold">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 mt-6 text-white">
                SELAMAT DATANG DI INOVASI<br>
                APLIKASI <span class="text-yellow-400">"PECEL MADIUN"</span>
            </h1>
    
            <div class="flex items-center justify-center gap-4 my-4">
                <div class="h-1 flex-1 bg-white opacity-70"></div>
                <div class="text-white font-semibold tracking-wide">• • • • • • • • • • • • • • •</div>
                <div class="h-1 flex-1 bg-white opacity-70"></div>
            </div>
    
            <h2 class="text-xl md:text-2xl font-bold mb-6">
                <span class="text-yellow-400">PELAYANAN</span> <span class="text-white">CEDAS</span> <span class="text-yellow-400">LITERASI</span> <span class="text-white"> MASYARAKAT </span> <span class="text-yellow-400">DIGITAL</span>
            </h2>
    
            <p class="text-justify max-w-4xl mx-auto text-sm md:text-base leading-relaxed mb-8 text-white">
                Aplikasi inovasi Kelurahan Banjarejo yang bernama <b>"Pecel Madiun"</b> 
                (<span class="text-yellow-400">Pelayanan Cerdas Literasi Masyarakat Digital Membangun</span>) merupakan sebuah platform baca digital 
                yang <span class="bg-yellow-300 text-black px-1">diluncurkan pada tahun 2022</span>. Aplikasi ini hadir sebagai hasil inovasi dari 
                <span class="bg-yellow-300 text-black px-1">pihak Kelurahan Banjarejo</span> dengan tujuan utama meningkatkan minat baca masyarakat, 
                sekaligus mendorong budaya membaca inklusif dan aksesibel.
            </p>
    
            <p class="text-justify max-w-4xl mx-auto text-sm md:text-base leading-relaxed mb-8 text-white">
                Pecel Madiun mengusung konsep pelayanan cerdas melalui teknologi digital untuk memberikan kemudahan kepada masyarakat 
                dalam mengakses berbagai jenis bacaan yang bermanfaat, mulai dari buku, artikel, hingga materi pembelajaran yang relevan. 
                Aplikasi ini memudahkan masyarakat mendapatkan pengetahuan secara lebih praktis, tanpa batasan tempat dan waktu.
            </p>
    
            <p class="text-justify max-w-4xl mx-auto text-sm md:text-base leading-relaxed mb-10 text-white">
                Tujuan utama aplikasi ini adalah untuk <span class="bg-yellow-300 text-black px-1">meningkatkan kualitas literasi</span> masyarakat, 
                <span class="bg-yellow-300 text-black px-1">menyebarkan informasi</span> yang bermanfaat, dan <span class="bg-yellow-300 text-black px-1">mengedukasi masyarakat</span> agar lebih paham pentingnya literasi digital di era modern.
            </p>
    
            <a href="#selengkapnya" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-6 rounded-full transition mb-20">
                Selengkapnya...
            </a>
        </div>
    
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-xs font-bold text-white mt-10">
            ©Copyright Kelurahan Banjarejo Since 2022
        </div>

    </section>
    

    <section class="relative min-h-screen flex items-center justify-center">
        <div class="bg-overlay"></div> <!-- Layer hitam transparan -->

    <div class="max-w-6xl mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 mt-6 text-white">
            <span class="text-yellow-400">GENRE BUKU</span>
        </h1>

        <div class="flex items-center justify-center gap-4 my-4">
            <div class="h-1 flex-1 bg-white opacity-70"></div>
            <div class="text-white font-semibold tracking-wide">• • • • • • • • • • • • • • •</div>
            <div class="h-1 flex-1 bg-white opacity-70"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-12 mb-10">
            <!-- FIKSI -->
            <div class="flex flex-col items-center text-center">
                <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/01/Desain-tanpa-judul.png" alt="Fiksi" class="w-30 h-30 mb-2">
                <h3 class="text-2xl font-bold mb-2 text-white">FIKSI</h3>
                <p class="text-sm leading-relaxed px-4 text-white font-bold">
                    Genre ini mencakup karya–karya yang <span class="text-yellow-300 font-semibold">bersifat imajinatif</span> dan <span class="text-yellow-300 font-semibold">tidak berdasarkan pada kejadian nyata</span>.
                    Di dalamnya termasuk subgenre seperti novel romantis, fiksi ilmiah, fantasi, horor, dan misteri. Buku fiksi mengajak pembaca untuk memasuki dunia yang diciptakan oleh penulis, sering kali menghadirkan
                    karakter-karakter, plot, dan setting yang <span class="text-yellow-300 font-semibold">penuh imajinasi</span>.
                </p>
            </div>

            <!-- NON-FIKSI -->
            <div class="flex flex-col items-center text-center">
                <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/01/Desain-tanpa-judul-1.png" alt="Non-Fiksi" class="w-30 h-30 mb-2">
                <h3 class="text-2xl font-bold mb-2 text-white">NON-FIKSI</h3>
                <p class="text-sm leading-relaxed px-4 text-white font-bold">
                    Buku <span class="text-yellow-300 font-semibold">non-fiksi</span> berisi informasi yang <span class="text-yellow-300 font-semibold">berdasarkan fakta dan kenyataan</span>.
                    Genre ini mencakup biografi, buku sejarah, sosiologi, psikologi, self-help, dan banyak lagi. Buku non-fiksi bertujuan untuk memberikan wawasan, pengetahuan, atau pemahaman tentang <span class="text-yellow-300 font-semibold">dunia nyata</span>.
                </p>
            </div>

            <!-- PENDIDIKAN -->
            <div class="flex flex-col items-center text-center">
                <img src="https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/01/Desain-tanpa-judul-3.png" alt="Pendidikan" class="w-30 h-30 mb-2">
                <h3 class="text-2xl font-bold mb-2 text-white">PENDIDIKAN</h3>
                <p class="text-sm leading-relaxed px-4 text-white font-bold">
                    Genre ini berfokus pada buku yang bertujuan untuk mengajarkan atau <span class="text-yellow-300 font-semibold">memberikan pengetahuan</span> baru kepada pembacanya.
                    Buku dalam genre ini meliputi buku teks, panduan, manual, serta buku–buku yang digunakan dalam konteks pembelajaran dan <span class="text-yellow-300 font-semibold">pengembangan keterampilan</span>.
                </p>
            </div>
        </div>
    </div>
    </section>
    
</body>
</html>