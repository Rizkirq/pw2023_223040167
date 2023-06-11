<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='12' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="ganjar">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="ganja mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p> saat calon presiden (capres) usungan PDI Perjuangan ini menghadiri peresmian sukarelawan Gapura Nusantara di Kelapa Gading Timur, Jakarta Utara, Sabtu (10/6).
                Ganjar tiba di Ballroom Kelapa Gading sekitar pukul 08.24 WIB. Ia mengenakan kemeja hitam dan celana hitam. Saat tiba di lokasi, ia menyapa sejumlah relawan yang menyambut.</p>
            <p>"Ganjar Presiden," kata salah satu relawan. Bakal calon presiden (Bacapres) ini lalu menyapa sukarelawan lain yang duduk di ruangan. Acara yang berlangsung hari ini (10/6) dihadiri sekitar 1.000 sukarelawan dari berbagai daerah, seperti Bandung, Malang, dan Lampung. Mereka terdiri dari purnawirawan, selebriti, hingga kalangan milenial.</p>
            <p>Menurut ketua panitia acara, Gapura merupakan relawan alumni dari berbagai perguruan tinggi seluruh Indonesia.

                Selain hadir di acara ini, Ganjar juga bakal mengunjungi tiga kota. Namun, dia tak memberikan rincian lebih lanjut, kota mana saja yang bakal dihadiri termasuk detail agenda. PDIP mengusung Ganjar menjadi bacapres partai tersebut pada April lalu. Sejauh ini, ia telah mengantongi dukungan dari empat partai politik.

                Partai itu di antaranya PDIP dan PPP selaku partai parlemen, serta Partai Hanura dan Perindo yang merupakan partai non parlemen.</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>