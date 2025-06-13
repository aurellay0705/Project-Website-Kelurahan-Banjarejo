# Project-Website-Kelurahan-Banjarejo

##  Dokumentasi Website Kelurahan Banjarejo
Website ini merupakan platform resmi Kelurahan Banjarejo, Kecamatan Taman, Kota Madiun. Tujuannya adalah untuk menyampaikan informasi kepada masyarakat secara cepat, transparan, dan edukatif. Website ini memuat informasi seperti berita, publikasi resmi, profil pemerintahan, serta inovasi digital lokal seperti aplikasi Pecel Madiun.

## 📂 Struktur Navigasi

Navigasi utama website terdiri dari beberapa menu berikut:

| Menu           | Deskripsi                                                                 |
|----------------|--------------------------------------------------------------------------|
| **Home**       | Halaman utama berisi sambutan dan deskripsi singkat tentang Kelurahan.   |
| **Berita**     | Menampilkan berita terbaru, populer, dan trending dari wilayah kelurahan.|
| **Publikasi**  | Berisi dokumen resmi, laporan kegiatan, dan informasi publik lainnya.    |
| **Profil**     | Menyediakan informasi struktur organisasi dan visi-misi Kelurahan.       |
| **Pecel Madiun** | Menjelaskan aplikasi inovasi literasi digital masyarakat.               |

## 💻 Teknologi yang Digunakan

- Tailwind CSS  
- Laravel 11
- PHP 8.4.3
- Blade Template Engine
- **Visual Assets**: Logo, ilustrasi karakter, ikon digital  
- **Responsiveness**: Desain mobile-first, mendukung berbagai resolusi layar

## Tujuan Proyek
- Melakukan migrasi dari WordPress ke Laravel
- Memberikan kontrol penuh terhadap fitur dan tampilan website

## Cara Install & Menjalankan Project
```bash 
# Clone repo
git clone https://github.com/monichaochaa/Project-Website-Kelurahan.git
cd website-kelurahan-taman (sesuai nama proyek yang disimpan)

# Install dependencies
composer install

# Copy .env dan atur database
cp .env.example .env
php artisan key:generate

# Jalankan migrasi database (jika sudah dibuat)
php artisan migrate

# Jalankan server lokal
php artisan serve
```
## Catatan
- Pastikan .env sudah diatur untuk koneksi database
- Gunakan php artisan migrate:fresh --seed jika ingin reset database dengan data awal

