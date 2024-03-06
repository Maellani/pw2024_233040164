<?php

// 1.Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Maelani", 4.0, false];

// 2.Mencetak isi Array
// Mencetak 1 elemen pada array, menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// digunakan khusus untuk debugging
//var_dump() atau print_r()
var_dump($hari);
echo"<br>";
print_r($bulan);
echo"<br>";
var_dump($mahasiswa);
echo"<br>";
print_r($mahasiswa);
echo "<hr>";

// 3.Memanipulasi isi Array
// Menambah isi array
// di akhir array: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei", "Juni");
print_r($bulan);
echo "<br>";

// di awal array: array_unshift()
array_unshift($mahasiswa, "033664");
print_r($mahasiswa);
echo"<hr>";

// Menghapus isi array
// di akhir: array_pop()
// di awal: array_shift()
array_pop($hari);
print_r($hari);
echo"<br>";
array_shift($bulan);
print_r($bulan);



?>