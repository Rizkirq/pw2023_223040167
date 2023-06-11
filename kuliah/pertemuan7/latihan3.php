<?php 
// array_associative
// array yang indec adalah string yang kita buat sendiri
$mahasiswa = [
              [
                'nama' =>'iki',
                'binatang' => '🐱‍👤',
                'makanan'=> ['🐱‍👓']
              ],

              [
               'nama' =>'maul',
               'binatang' => '🐱',
               'makanan'=> [ '🎂','❤']
              ], 

              [
               'nama' =>'kalo',
               'binatang' => '🐱‍🚀',
               'makanan'=> [ '🍿','🍤']
              ], 

              ['nama' =>'iki',
               'binatang' =>'🐱‍🐉', 
               'makanan'=> ['🎉']
              ],
              [
               'nama' =>'ksau',
               'binatang' =>[ '😎'],
               'makanan'=>  ['🥫']
              ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m )  {?>
    <ul>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Makanan Favorite : <?= $m['binatang']; ?></li>
        <li>Peliharaan :<?php foreach ($mhs ['makanan'] as $mkn) {
            echo $mkn;

        }?>
    </ul>
    <?php } ?>
</body>
</html>