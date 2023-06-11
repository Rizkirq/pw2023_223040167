<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='6' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="iusa">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="rusia mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Rusia bakal mulai mengerahkan senjata nuklir taktisnya ke Belarus pada 7-8 Juli mendatang. Ini merupakan pertama kalinya nuklir dikerahkan di luar Rusia sejak jatuhnya Uni Soviet.
                Hal tersebut disampaikan oleh Presiden Rusia Vladimir Putin, Jumat (9/6).

                "Persiapan fasilitas yang relevan berakhir pada 7-8 Juli. Kami akan segera memulai kegiatan yang berkaitan dengan pengerahan senjata ini," ujar Putin dalam sebuah pernyataan, melansir Reuters
            </p>
            <p>Belarus telah mengizinkan Rusia untuk menempatkan senjata nuklir taktisnya di Minsk. Sebelumnya, Belarus juga telah menerima sistem rudal taktis Iskander-M. Disebutkan, Iskander memiliki jangkauan ledak hingga 500 kilometer.

                Belarus mengatakan pesawat Sukhoi-25 telah diadaptasi untuk membawa hulu ledak tersebut. Jet Sukhoi-25 memiliki jangkauan hingga 1.000 kilometer.
            </p>
            <p>Artinya, jika senjata diluncurkan dari pangkalan udara utama Belarus di luar Minsk, rudal itu berpotensi mencapai hampir seluruh Eropa Timur, termasuk di antaranya negara-negara anggota NATO.

                Rencana pengerahan senjata nuklir taktis ini sebetulnya telah dilaporkan sejak lama.

                Pada Maret lalu, Putin sempat berdalih bahwa rencana mengerahkan senjatanya ke Belarus adalah respons terhadap Amerika Serikat yang menempatkan senjata-senjata nuklirnya di sejumlah negara Eropa selama beberapa dekade.

                Menteri Pertahanan Rusia Sergei Shoigu juga pernah mengatakan bahwa Rusia meningkatkan kemampuan nuklir Belarus sebagai respons bergabungnya Finlandia dengan Nato.
            </p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>