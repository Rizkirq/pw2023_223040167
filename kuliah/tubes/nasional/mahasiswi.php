<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='16' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="hand">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="kereta mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Angelina Natania (22), mahasiswi Universitas Surabaya (Ubaya) menjadi korban pembunuhan. Ia diduga dibunuh oleh Rochmat Bagus Apriyatna (41), warga Gunung Anyar Kidul, Surabaya, yang merupakan guru les musiknya. Kepala Kepolisian Resor Kota Besar (Kapolrestabes) Surabaya Kombes Pol Pasma Royce mengatakan, antara korban dan pelaku sudah saling kenal sejak 5 tahun lalu. Selain itu, keduanya memiliki hubungan asmara.</p>
            <p>Kasat Reskrim Polrestabes Surabaya, AKBP Mirzal Maulana mengatakan, pelaku pembunuhan mahasiswi Ubaya tersebut merupakan guru les musik korban. "Benar, pelaku merupakan guru les musik korban," kata Mirzal. Pelaku yang merupakan warga Surabaya itu membunuh korban lantaran sakit hati. Pelaku mencekik leher korban hingga tak bernyawa. "Berdasarkan keterangan dari tersangka, yang bersangkutan ini sakit hati lalu melakukan pembunuhan dengan mencekik korban," kata Mirzal.</p>
            <h5>Diduga hendak menguasai mobi</h5>
            <p>Sementara itu, Bambang, ayah korban menduga pelaku ingin menguasai harta anaknya. Bambang menampik bahwa ada hubungan asrama antara anaknya dengan pelaku pembunuh itu. "Saya sekedar mengingatkan, kabar yang beredar selama ini, simpang siur mengenai hubungan mereka ini, dikira ke arah asmara," kata Bambang di Mapolrestabes Surabaya, Jumat (9/6/2023). Bambang menyebut, pelaku sengaja mendekati putrinya untuk menguasai hartanya.</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>