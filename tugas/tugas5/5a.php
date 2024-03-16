<?php
$mahasiswa = [
    [
        "nama" => "Maelani Ningrum",
        "npm" => "233040164",
        "email" => "maelani@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto1.jpeg"
    ],
    [
        "nama" => "Amaliyah Nur Haida Jum'ati",
        "npm" => "233040082",
        "email" => "amaliyah@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto2.jpeg"
    ],
    [
        "nama" => "Dwi Yulianti",
        "npm" => "233040081",
        "email" => "dwi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto3.jpeg"
    ],
    [
        "nama" => "Desi Hafita Ashri",
        "npm" => "233040165",
        "email" => "desi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto4.jpeg"
    ],
    [
        "nama" => "Dian Astri",
        "npm" => "233040085",
        "email" => "@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto5.jpeg"
    ],
    [
        "nama" => "Firda Faridatul Fajriyanti",
        "npm" => "233040098",
        "email" => "firda@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto6.jpeg"
    ],
    [
        "nama" => "Icha Aprilia Putri",
        "npm" => "233040108",
        "email" => "icha@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto7.jpeg"
    ],
    [
        "nama" => "Meta Cantika Dewi",
        "npm" => "233040100",
        "email" => "meta@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto8.jpeg"
    ],
    [
        "nama" => "Silma Tsania Nurrasy",
        "npm" => "233040107",
        "email" => "silma@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto9.jpeg"
    ],
    [
        "nama" => "Anggur Vitis Vinifera",
        "npm" => "233040999",
        "email" => "anggur@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto10.jpeg"
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
    img {
        width: 100px;
        height: 100px;
    }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>"> </li>
            <li>Nama : <?= $mhs["nama"]; ?> </li>
            <li>Npm : <?= $mhs["npm"]; ?> </li>
            <li>Email : <?= $mhs["email"]; ?> </li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?> </li>
        </ul>
        <?php endforeach; ?>
</body>
</html>