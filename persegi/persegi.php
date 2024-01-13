<?php
// Fungsi untuk menghitung luas persegi
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

// Variabel sisi persegi (contoh: 5)
$sisiPersegi = 5;

// Memanggil fungsi untuk menghitung luas persegi
$luasPersegi = hitungLuasPersegi($sisiPersegi);

// Menampilkan hasil
echo "Sisi Persegi: $sisiPersegi <br>";
echo "Luas Persegi: $luasPersegi";
?>
