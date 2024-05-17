<?php

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040164');
return $conn;
}

function query($query)
{

// Koneksi ke database
$conn = koneksi();

// Query ke tabel mahasiswa
$result = mysqli_query($conn, $query);


// Menyiapkan data mahasiswa
$rows = [];
while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

return $rows;
}



