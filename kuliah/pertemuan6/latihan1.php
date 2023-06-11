<?php 
$mahasiswa = ['ikii', 'ik', 'as', 'as', "hs"]
$binatang  = ['🍿', '🍔', '🍟', '🌭', '🍔'] 
$makanan   = ['🐱‍👤', '🐱‍👓', '🐱‍👤', '🐱‍👤', '🐱‍👓']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $q => $m )  {?>
    <ul>
        <li>Nama : <?= $m[$q]; ?></li>
        <li>Makanan Favorite : <?= $binatang[$q]; ?></li>
        <li>Peliharaan :<?= $makanan[$q]; ?> </li>
    </ul>
    <?php } ?>
</body>
</html>