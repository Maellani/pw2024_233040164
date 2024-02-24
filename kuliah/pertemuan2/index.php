<?php
$nama = 'Maelani';
$matkul = 'Pemograman Web'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "Hello, $nama"; ?>
    </h1>
    <p><?php echo $matkul; ?></p>
    <!-- echo "<i><h2>" . '"' . "$string saya $string, $string $string1 saya." . '"' . "</h2></i>" -->
    <p><?php echo '"' . "Hallo, nama saya $nama, saya sedang kuliah $matkul" . '"'; ?></p>
</body>
</html>
