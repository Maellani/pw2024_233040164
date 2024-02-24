<?php
$namadepan = 'Maelani';
$namabelakang = 'Ningrum';

for ($x = 1; $x < 100; $x++) {
    if ($x % 3 == 0 && $x % 5 == 0) {
        echo $namadepan . " " . $namabelakang;
    }
    else if ($x % 3 == 0) {
        echo $namadepan;
    }
    else if ($x % 5 == 0) {
        echo $namabelakang;
    }
    else {
        echo $x;
    };
    echo "<br>";
}
?>