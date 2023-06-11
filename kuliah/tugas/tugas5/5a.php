<?php 
$negara = [
    [
        "nama negara" => "Indonesia",
        "presiden" => "Joko widodo",
        "wakil presiden" => "Ma'ruf Amin",
        "total provinsi" => "38 Provinsi",
        "gambar" => "indonesia.jpeg"
    ],
    [
        "nama negara" => "Malaysia",
        "presiden" => "Petahana Anwar Ibrahim",
        "wakil presiden" => "Wan Azizah Wan Ismail",
        "total provinsi" => "13 negara",
        "gambar" => "malaysia.png"
    ],
    [
        "nama negara" => "Amerika Serikat",
        "presiden" => "Joe Biden",
        "wakil presiden" => "Kamala Harris",
        "total provinsi" => "50 Provinsi",
        "gambar" => "amerika.jpeg"
    ],
    [
        "nama negara" => "Rusia",
        "presiden" => "Vladimir Putin",
        "wakil presiden" => "Mikhail Vladimirovich Mishustin",
        "total provinsi" => "46 Provinsi",
        "gambar" => "rusia.png"
    ],
    [
        "nama negara" => "Arab Saudi",
        "presiden" => "JSalman bin Abdulaziz al-Saud",
        "wakil presiden" => "Mohammed bin Salman",
        "total provinsi" => "13 Provinsi",
        "gambar" => "arab.png"
    ],
    [
        "nama negara" => "Australia",
        "presiden" => "Charles III",
        "wakil presiden" => "Richard Marles",
        "total provinsi" => "16 Provinsi",
        "gambar" => "australia.jpeg"
    ],
    [
        "nama negara" => "Papua Nugini",
        "presiden" => "Charles III",
        "wakil presiden" => "James Marate",
        "total provinsi" => "22 Provinsi",
        "gambar" => "nugini.png"
    ],
    [
        "nama negara" => "Singapura",
        "presiden" => "Halimah binti Yacob ",
        "wakil presiden" => "Heeng Swee Keat",
        "total provinsi" => "5 Provinsi",
        "gambar" => "singapura.jpeg"
    ],
    [
        "nama negara" => "Jepang",
        "presiden" => " Naikaku sōri daijin",
        "wakil presiden" => "Hitoshi Ashida",
        "total provinsi" => "47 Provinsi",
        "gambar" => "jepang.jpeg"
    ],
    [
        "nama negara" => "India",
        "presiden" => "Draupadi Murmu",
        "wakil presiden" => "Muppavarapu Venkaiah Naidu ",
        "total provinsi" => "28 Provinsi",
        "gambar" => "india.jpeg"
    ]
    
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>
    <h1>Daftar Negara</h1>

    <?php foreach ($negara as $ngr) :?>
        <ul>
            <li>
                <img src="image/<?= $ngr["gambar"]; ?>">
            </li>
            <li>Nama Negara: <?= $ngr["nama negara"]; ?></li>
            <li>Presiden : <?= $ngr["presiden"]; ?></li>
            <li>Wakil Presiden : <?= $ngr["wakil presiden"]; ?></li>
            <li>Total Provinsi : <?= $ngr["total provinsi"]; ?></li>
        </ul>


    <?php endforeach; ?>
    
</body>
</html>