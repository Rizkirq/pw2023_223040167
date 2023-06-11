<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='8' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="bull">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="bant mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Ketum PDIP Megawati Soekarnoputri mengaku mengagumi sosok Laksamana Malahayati yang dinilai sebagai sosok perempuan kuat. Megawati kemudian bercerita dirinya mendapat julukan wanita terkuat di dunia.
                Hal itu disampaikan Megawati saat meresmikan kapal rumah sakit terapung Laksamana Malahayati di Dermaga Kade Inggom, Pelabuhan Tanjung Priok, Jakarta Utara, Sabtu (10/6/2023). Megawati mengatakan perempuan harus memiliki contoh untuk membangkitkan semangat.</p>
            <p>"Kadang-kadang saya sendiri heran wong contohnya sudah ada, contoh saya saja, apa yang kurang saya? Bukan membanggakan diri, menyombongkan lho ini contoh perempuan," kata Megawati. Megawati lalu mengaku pernah mendengar dirinya dijuluki sebagai wanita terkuat. Namun, dia tak menjelaskan detail siapa yang memberi julukan itu.

                "Saya dengar, saya diberi julukan wanita terkuat di dunia yang tinggal satu-satunya karena seperti Margaret Thatcher dan sebagainya sudah pass away. Apalagi di negara muslim terbesar. Saya terima kasih, bangga," ujar Megawati.</p>
            <p>Megawati kemudian mengaku heran dengan mental perempuan-perempuan yang dianggap lemah. Megawati pun menamai kapal rumah sakit terapung PDIP dengan sosok perempuan bernama Laksamana Malahayati yang perkasa.

                "Tapi maksud saya kaum perempuan Indonesia kenapa kok lembek gitu lho. Makanya saya kasih nama ini supaya nanti kalau keliling kalau ditanya apa namanya, Laksamana Malahayati, siapa dia?" kata dia.

                "Dia adalah perempuan perkasa, maunya saya ngomong begitu, biar diujung-ujung sana, remote area tuh rupayanya perempuan bisa ya megang kapal," imbuh dia.</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>