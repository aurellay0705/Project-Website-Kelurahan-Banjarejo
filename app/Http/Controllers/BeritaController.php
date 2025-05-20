<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        // Data berita statis (tanpa database)
        $beritas = [
            (object) [
                'judul' => 'Kejaksaan Negeri Kota mAdiun Gelar Penyuluhan Hukum Terkait Pembangunan PJU di Kelurahan Banjarejo',
                'lokasi' => 'Banjarejo',
                'tanggal' => '2025-05-05',
                'thumbnail' => 'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/05/IMG-20250505-WA0038.jpg', // Ganti dengan path gambar yang benar
                'tags' => collect(['Berita', 'Kunjungan Kejaksaan']) // Daftar tag berita
            ],
            (object) [
                'judul' => 'Persiapan Lomba Pelaksana Gotong Royong Terbaik Tingkat Jawa Timur di Kelurahan Banjarejo, Kecamatan Taman Kota Madiun',
                'lokasi' => 'Madiun',
                'tanggal' => '2025-05-03',
                'thumbnail' => 'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-05-at-08.58.20-6.jpeg', // Ganti dengan path gambar yang benar
                'tags' => collect(['Berita']) // Daftar tag berita
            ],
            (object) [
                'judul' => 'LINMAS Kelurahan Banjarejo Glear Pertemuan Rutin, Bahas Kesiapsiagaan dan Ketertiban Lingkungan',
                'lokasi' => 'Madiun',
                'tanggal' => '2025-04-24',
                'thumbnail' => 'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/04/BERITA-4.png', // Ganti dengan path gambar yang benar
                'tags' => collect(['Berita']) // Daftar tag berita
            ],
            (object) [
                'judul' => 'Lomba Verifikasi Bank Sampah Tingkat Kota Madiun Digelar di RW.09 Kelurahan Banjarejo',
                'lokasi' => 'Madiun',
                'tanggal' => '2025-04-22',
                'thumbnail' => 'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/04/BERITA-3.png', // Ganti dengan path gambar yang benar
                'tags' => collect(['Berita']) // Daftar tag berita
            ],
            (object) [
                'judul' => 'Kelurahan Banjarejo Kecamatan Taman Kota Madiun Mengucapkan Selamat Hari Karini 21 April 2025',
                'lokasi' => 'Madiun',
                'tanggal' => '2025-04-21',
                'thumbnail' => 'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/04/BERITA-2.png', // Ganti dengan path gambar yang benar
                'tags' => collect(['Berita']) // Daftar tag berita
            ],
            (object) [
                'judul' => 'Kelurahan Bnajarejo Wakili Kota Madiun di Ajang Lomba Gotong Royong Tingkat Provinsi Jawa Timur',
                'lokasi' => 'Madiun',
                'tanggal' => '2025-04-16',
                'thumbnail' => 'https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2025/04/BERITA-1.png', // Ganti dengan path gambar yang benar
                'tags' => collect(['Berita']) // Daftar tag berita
            ],
            // Tambahkan lebih banyak data berita sesuai kebutuhan
        ];

        // Kirim data berita ke view
        return view('berita', compact('beritas'));
    }
}
