<?php
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    function hitungLuasLingkaran($r) {
        echo "Jari-jari = $r cm. <br>";
        $i = ($r * $r) * 3.14;
        echo "Luas lingkaran = $i cm²";
    }

    hitungLuasLingkaran(10);

    echo "<hr />";
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungKelilingLingkaran($r) {
        echo "Jari-jari = $r cm. <br>";
        $j = 2 * 3.14 * $r;
        echo "Keliling lingkaran = $j cm";
    }

    hitungKelilingLingkaran(20);