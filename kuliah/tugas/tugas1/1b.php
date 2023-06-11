<?php 
$angka = 67;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Aku adalah angka <b>$angka</b><br>";
        $angka = $angka * 5;
        echo "Jika aku dikali 5, maka aku sekarang menjadi <b>" . $angka . "</b><br>";
        $angka = $angka / 2;
        echo "JIka aku dibagi 2, maka aku sekarang menjadi <b>" . $angka . "</b><br>";
        $angka = $angka + 75;
        echo "JIka aku ditambah 75, maka aku sekarang menjadi <b>" . $angka . "</b><br>";
        $angka = $angka - 20;
        echo "JIka aku dikurang 20, maka aku sekarang menjadi <b>" . $angka . "</b><br>";
    ?>
</body>
</html>