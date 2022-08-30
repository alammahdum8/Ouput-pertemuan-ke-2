<?php
echo "<h1>Latihan Fungsi</h1><hr>";

function hello($nama) {
    echo "Selamat Datang $nama Didunia Webmaster";
    echo "<br> Panggil Fungsi Dalam Fungsi<br>";
    echo "Hasil Perhitungan adalah :- ". hitung(10, 6, 11);
}
function hitung($nilai1, $nilai2, $nilai3) {
    $hasil = $nilai1 + $nilai2 + $nilai3;
    return $hasil;
}

echo "Bagian Pemanggil Fungsi<br>";
hello("Mahdum");
echo "<br>Panggil Fungsi Lagi<br>";
hello("Alam");
echo "<br> Panggil Fungsi Return<br>";
echo "Hasil Perhitungan adalah : " . hitung(5, 6, 7);

?>
