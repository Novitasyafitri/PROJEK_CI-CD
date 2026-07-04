<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Kumpulan data dengan jalur folder public/gambar yang benar
    $tumbuhan = [
        [
            'nama' => 'Bunga Bangkai',
            'fakta' => 'Mengeluarkan bau busuk menyengat untuk menarik perhatian serangga penyerbuk.',
            'gambar' => asset('gambar/bangkai.jpg') // Ditambahkan teks 'gambar/' di depannya
        ],
        [
            'nama' => 'Kantong Semar',
            'fakta' => 'Tumbuhan karnivora yang menjebak serangga di kantongnya untuk mengambil nitrogen.',
            'gambar' => asset('gambar/semar.jpg')
        ],
        [
            'nama' => 'Putri Malu',
            'fakta' => 'Daunnya akan langsung menguncup secara otomatis saat mendeteksi adanya sentuhan.',
            'gambar' => asset('gambar/putri.jpg')
        ],
        [
            'nama' => 'Pohon Sequoia',
            'fakta' => 'Merupakan salah satu makhluk hidup tertua, terbesar, dan tertinggi di muka bumi.',
            'gambar' => asset('gambar/sequoia.jpg')
        ],
        [
            'nama' => 'Venus Flytrap',
            'fakta' => 'Mampu menutup daunnya dalam waktu sepersekian detik untuk menangkap lalat atau serangga kecil.',
            'gambar' => asset('gambar/venus.jpg')
        ],
        [
            'nama' => 'Rafflesia Arnoldii',
            'fakta' => 'Merupakan bunga tunggal terbesar di dunia dan tidak memiliki daun, akar, maupun batang sejati.',
            'gambar' => asset('gambar/rafflesia.jpg')
        ],
        [
            'nama' => 'Pohon Baobab',
            'fakta' => 'Sering disebut pohon kehidupan karena batangnya yang raksasa mampu menyimpan hingga puluhan ribu liter air.',
            'gambar' => asset('gambar/baobab.jpg')
        ],
        [
            'nama' => 'Eucalyptus Pelangi',
            'fakta' => 'Memiliki batang dengan kulit yang mengelupas secara bertahap dan memunculkan gradasi warna-warni mirip pelangi.',
            'gambar' => asset('gambar/pelangi.jpg')
        ]
    ];

    return view('welcome', compact('tumbuhan'));
});
