<?php
// ============================================
// TUTORIAL PHP BACKEND LENGKAP
// ============================================

echo "<h1>Tutorial PHP Backend</h1>";
echo "<hr>";

// ============================================
// 1. TIPE DATA
// ============================================
echo "<h2>1. TIPE DATA</h2>";

// String
$nama = "Budi Santoso";
echo "String: $nama<br>";

// Integer
$umur = 25;
echo "Integer: $umur<br>";

// Float/Double
$tinggi = 175.5;
echo "Float: $tinggi cm<br>";

// Boolean
$aktif = true;
echo "Boolean: " . ($aktif ? "true" : "false") . "<br>";

// Array
$hobi = ["Coding", "Gaming", "Reading"];
echo "Array: " . implode(", ", $hobi) . "<br>";

// Associative Array
$mahasiswa = [
    "nama" => "Siti Aminah",
    "nim" => "12345678",
    "jurusan" => "Informatika"
];
echo "Associative Array: " . $mahasiswa['nama'] . " - " . $mahasiswa['nim'] . "<br>";

// NULL
$data = null;
echo "NULL: " . var_export($data, true) . "<br>";

echo "<hr>";

// ============================================
// 2. PERCABANGAN IF, ELSEIF, ELSE
// ============================================
echo "<h2>2. PERCABANGAN IF, ELSEIF, ELSE</h2>";

$nilai = 85;

if ($nilai >= 90) {
    echo "Nilai: $nilai - Grade A (Excellent!)<br>";
} elseif ($nilai >= 80) {
    echo "Nilai: $nilai - Grade B (Good!)<br>";
} elseif ($nilai >= 70) {
    echo "Nilai: $nilai - Grade C (Average)<br>";
} elseif ($nilai >= 60) {
    echo "Nilai: $nilai - Grade D (Below Average)<br>";
} else {
    echo "Nilai: $nilai - Grade E (Failed)<br>";
}

echo "<hr>";

// ============================================
// 3. PERCABANGAN SWITCH
// ============================================
echo "<h2>3. PERCABANGAN SWITCH</h2>";

$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari: $hari - Jadwal: Matematika<br>";
        break;
    case "Selasa":
        echo "Hari: $hari - Jadwal: Bahasa Inggris<br>";
        break;
    case "Rabu":
        echo "Hari: $hari - Jadwal: Fisika<br>";
        break;
    case "Kamis":
        echo "Hari: $hari - Jadwal: Kimia<br>";
        break;
    case "Jumat":
        echo "Hari: $hari - Jadwal: Pemrograman<br>";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari: $hari - Libur!<br>";
        break;
    default:
        echo "Hari tidak valid<br>";
}

echo "<hr>";

// ============================================
// 4. PERULANGAN WHILE
// ============================================
echo "<h2>4. PERULANGAN WHILE</h2>";

$counter = 1;
echo "Hitung mundur dengan WHILE:<br>";
while ($counter <= 5) {
    echo "Iterasi ke-$counter<br>";
    $counter++;
}

echo "<hr>";

// ============================================
// 5. PERULANGAN DO WHILE
// ============================================
echo "<h2>5. PERULANGAN DO WHILE</h2>";

$angka = 10;
echo "Hitung mundur dengan DO WHILE:<br>";
do {
    echo "Angka: $angka<br>";
    $angka--;
} while ($angka > 5);

echo "<hr>";

// ============================================
// 6. PERULANGAN FOR
// ============================================
echo "<h2>6. PERULANGAN FOR</h2>";

echo "Tabel perkalian 5 dengan FOR:<br>";
for ($i = 1; $i <= 10; $i++) {
    $hasil = 5 * $i;
    echo "5 x $i = $hasil<br>";
}

echo "<hr>";

// ============================================
// 7. PERULANGAN FOREACH
// ============================================
echo "<h2>7. PERULANGAN FOREACH</h2>";

// Foreach dengan indexed array
$buah = ["Apel", "Mangga", "Jeruk", "Pisang"];
echo "Daftar buah dengan FOREACH:<br>";
foreach ($buah as $item) {
    echo "- $item<br>";
}

echo "<br>";

// Foreach dengan associative array
$siswa = [
    "nama" => "Ahmad",
    "kelas" => "12 IPA",
    "nilai" => 88
];
echo "Data siswa:<br>";
foreach ($siswa as $key => $value) {
    echo ucfirst($key) . ": $value<br>";
}

echo "<hr>";

// ============================================
// 8. FUNGSI DASAR
// ============================================
echo "<h2>8. FUNGSI DASAR</h2>";

function sapa($nama) {
    return "Halo, $nama! Selamat datang di kursus PHP.";
}

echo sapa("Dimas") . "<br>";

echo "<hr>";

// ============================================
// 9. FUNGSI DENGAN MULTIPLE ARGUMEN
// ============================================
echo "<h2>9. FUNGSI DENGAN MULTIPLE ARGUMEN</h2>";

function hitungLuasSegitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

$alas = 10;
$tinggiSegitiga = 8;
$luas = hitungLuasSegitiga($alas, $tinggiSegitiga);
echo "Luas segitiga (alas=$alas, tinggi=$tinggiSegitiga): $luas cm²<br>";

echo "<hr>";

// ============================================
// 10. FUNGSI DENGAN DEFAULT PARAMETER
// ============================================
echo "<h2>10. FUNGSI DENGAN DEFAULT PARAMETER</h2>";

function buatProfil($nama, $umur = 18, $kota = "Jakarta") {
    return "Nama: $nama, Umur: $umur tahun, Kota: $kota";
}

echo buatProfil("Rina") . "<br>";
echo buatProfil("Budi", 25) . "<br>";
echo buatProfil("Sari", 22, "Surabaya") . "<br>";

echo "<hr>";

// ============================================
// 11. FUNGSI DENGAN RETURN VALUE
// ============================================
echo "<h2>11. FUNGSI DENGAN RETURN VALUE</h2>";

function cekGanjilGenap($angka) {
    if ($angka % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}

$bilangan = 17;
echo "Angka $bilangan adalah: " . cekGanjilGenap($bilangan) . "<br>";

$bilangan2 = 24;
echo "Angka $bilangan2 adalah: " . cekGanjilGenap($bilangan2) . "<br>";

echo "<hr>";

    // ============================================
    // 12. PASS BY REFERENCE
    // ============================================
    echo "<h2>12. PASS BY REFERENCE</h2>";

    // Pass by value (default)
    function tambahNilai($angka) {
        $angka += 10;
        echo "Dalam fungsi (by value): $angka<br>";
    }

    $nilai1 = 50;
    echo "Sebelum fungsi: $nilai1<br>";
    tambahNilai($nilai1);
    echo "Setelah fungsi: $nilai1<br>";
    echo "<br>";

    // Pass by reference (menggunakan &)
    function tambahNilaiReference(&$angka) {
        $angka += 10;
        echo "Dalam fungsi (by reference): $angka<br>";
    }

    $nilai2 = 50;
    echo "Sebelum fungsi: $nilai2<br>";
    tambahNilaiReference($nilai2);
    echo "Setelah fungsi: $nilai2<br>";

    echo "<hr>";

    // ============================================
    // 13. FUNGSI DENGAN ARRAY SEBAGAI PARAMETER
    // ============================================
    echo "<h2>13. FUNGSI DENGAN ARRAY PARAMETER</h2>";

    function hitungRataRata($nilaiArray) {
        $total = 0;
        $jumlah = count($nilaiArray);
        
        foreach ($nilaiArray as $nilai) {
            $total += $nilai;
        }
        
        return $total / $jumlah;
    }

    $nilaiUjian = [85, 90, 78, 92, 88];
    $rataRata = hitungRataRata($nilaiUjian);
    echo "Nilai ujian: " . implode(", ", $nilaiUjian) . "<br>";
    echo "Rata-rata: " . round($rataRata, 2) . "<br>";

    echo "<hr>";

    // ============================================
    // 14. CONTOH KASUS NYATA: SISTEM PERPUSTAKAAN
    // ============================================
    echo "<h2>14. CONTOH KASUS: SISTEM PERPUSTAKAAN</h2>";

    // Data buku
    $perpustakaan = [
        [
            "judul" => "Belajar PHP",
            "penulis" => "John Doe",
            "tahun" => 2023,
            "tersedia" => true
        ],
        [
            "judul" => "Mastering MySQL",
            "penulis" => "Jane Smith",
            "tahun" => 2022,
            "tersedia" => false
        ],
        [
            "judul" => "Web Development",
            "penulis" => "Bob Johnson",
            "tahun" => 2024,
            "tersedia" => true
        ]
    ];

    // Fungsi untuk menampilkan buku
    function tampilkanBuku($buku) {
        $status = $buku['tersedia'] ? "Tersedia" : "Dipinjam";
        echo "📚 {$buku['judul']} - {$buku['penulis']} ({$buku['tahun']}) - Status: $status<br>";
    }

    // Fungsi untuk mencari buku berdasarkan judul
    function cariBuku($perpustakaan, $keyword) {
        $hasil = [];
        
        foreach ($perpustakaan as $buku) {
            if (stripos($buku['judul'], $keyword) !== false) {
                $hasil[] = $buku;
            }
        }
        
        return $hasil;
    }

    // Fungsi untuk meminjam buku (by reference)
    function pinjamBuku(&$buku, $namaPeminjam) {
        if ($buku['tersedia']) {
            $buku['tersedia'] = false;
            return "✅ Buku '{$buku['judul']}' berhasil dipinjam oleh $namaPeminjam";
        } else {
            return "❌ Maaf, buku '{$buku['judul']}' sedang dipinjam";
        }
    }

    echo "Daftar semua buku:<br>";
    foreach ($perpustakaan as $buku) {
        tampilkanBuku($buku);
    }

    echo "<br>Mencari buku dengan keyword 'PHP':<br>";
    $hasilCari = cariBuku($perpustakaan, "PHP");
    if (count($hasilCari) > 0) {
        foreach ($hasilCari as $buku) {
            tampilkanBuku($buku);
        }
    } else {
        echo "Tidak ada buku ditemukan<br>";
    }

    echo "<br>Proses peminjaman:<br>";
    echo pinjamBuku($perpustakaan[0], "Andi") . "<br>";
    echo pinjamBuku($perpustakaan[1], "Budi") . "<br>";

    echo "<br>Status setelah peminjaman:<br>";
    foreach ($perpustakaan as $buku) {
        tampilkanBuku($buku);
    }

    echo "<hr>";
    echo "<h3>✅ Tutorial Selesai!</h3>";
?>
