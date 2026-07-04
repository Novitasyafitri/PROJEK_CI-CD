<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Kumpulan data fakta unik tumbuhan
    $tumbuhan = [
        [
            'nama' => 'Bunga Bangkai',
            'fakta' => 'Mengeluarkan bau busuk menyengat untuk menarik perhatian serangga penyerbuk.',
            'gambar' => 'https://images.unsplash.com/photo-1533038590840-1cde6e668a91?w=400'
        ],
        [
            'nama' => 'Kantong Semar',
            'fakta' => 'Tumbuhan karnivora yang menjebak serangga di kantongnya untuk mengambil nitrogen.',
            'gambar' => 'https://images.unsplash.com/photo-1525498128493-380d1990a112?w=400'
        ],
        [
            'nama' => 'Putri Malu',
            'fakta' => 'Daunnya akan langsung menguncup secara otomatis saat mendeteksi adanya sentuhan.',
            'gambar' => 'https://images.unsplash.com/photo-1463936575829-25148e1db1b8?w=400'
        ],
        [
            'nama' => 'Pohon Sequoia',
            'fakta' => 'Merupakan salah satu makhluk hidup tertua, terbesar, dan tertinggi di muka bumi.',
            'gambar' => 'https://images.unsplash.com/photo-1502082553048-f009c37129b9?w=400'
        ],
        // --- TAMBAHAN DATA BARU DI BAWAH INI ---
        [
            'nama' => 'Venus Flytrap',
            'fakta' => 'Mampu menutup daunnya dalam waktu sepersekian detik untuk menangkap lalat atau serangga kecil.',
            'gambar' => 'https://images.unsplash.com/photo-1628155930542-3c7a64e2c833?w=400'
        ],
        [
            'nama' => 'Rafflesia Arnoldii',
            'fakta' => 'Merupakan bunga tunggal terbesar di dunia dan tidak memiliki daun, akar, maupun batang sejati.',
            'gambar' => 'https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?w=400'
        ],
        [
            'nama' => 'Pohon Baobab',
            'fakta' => 'Sering disebut pohon kehidupan karena batangnya yang raksasa mampu menyimpan hingga puluhan ribu liter air.',
            'gambar' => 'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=400'
        ],
        [
            'nama' => 'Eucalyptus Pelangi',
            'fakta' => 'Memiliki batang dengan kulit yang mengelupas secara bertahap dan memunculkan gradasi warna-warni mirip pelangi.',
            'gambar' => 'https://images.unsplash.com/photo-1551462147-ff29053bfc14?w=400'
        ] // Jangan lupa tanda koma jika ingin menambah data lagi di bawahnya
    ];

    // Mengirim data $tumbuhan ke halaman welcome
    return view('welcome', compact('tumbuhan'));
});
