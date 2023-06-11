<?php 
$binatang = ['🐱‍👤','🐱‍🐉','🐱‍👓','🐱‍🚀','🐱‍🏍'];
$makanan = ['🎂','🍔','🍟','🌭','🍿']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php foreach ($binatang as $b ) { ?>
        <li><? = $b; ?></li>
        <?php} ?>
    </ul>
    <h2>Daftar Makanan</h2>
    <ul>
        <li></li>
    </ul>
</body>
</html>