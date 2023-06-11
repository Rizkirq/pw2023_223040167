<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='13' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="rihana">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="kembar mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Polda Metro Jaya mengejar keberadaan si kembar Rihana-Rihani usai ditetapkan sebagai tersangka kasus penipuan dengan modus preorder iPhone. Direskrimum Polda Metro Jaya Kombes Hengki Haryadi berujar, pengejaran dilakukan oleh tim khusus yang dibuat Ditreskrimum Polda Metro Jaya. "Kami sudah buat tim khusus dan saat ini melakukan pengejaran terhadap kedua orang pelaku penipuan ini (Rihana-Rihani)," ucap Hengki, di Polda Metro Jaya, Jumat (9/6/2023). Hengki mengungkapkan soal penetapan Rihana-Rihani sebagai tersangka pada Jumat ini.</p>
            <p>Menurut dia, Rihana-Rihani memang tidak perlu dipanggil untuk menjadikan keduanya sebagai tersangka kasus penipuan. Adapun Rihana-Rihani sebelumnya memang belum pernah dipanggil kepolisian terkait dugaan kasus penipuan tersebut. Polda Metro Jaya, kata Hengki, hanya tinggal menangkap Rihana dan Rihani. "Kalau di Polda, (Rihana-Rihani) sudah (berstatus) tersangka," sebutnya. "Dan ini, (Rihana-Rihani) enggak usah dipanggil, langsung ditangkap," imbuh dia.</p>
            <p>Untuk diketahui, kasus dugaan penipuan yang dilakukan Rihana dan Rihani telah dilaporkan ke aparat kepolisian sejak kurun Juni-Oktober 2022. Para korban melapor ke berbagai tempat, mulai dari Polres Tangerang Selatan, Polres Metro Jakarta Selatan, hingga Polda Metro Jaya. Rihana dan Rihani dilaporkan ke polisi setelah diduga terlibat penipuan preorder iPhone hingga menyebabkan korban merugi Rp 35 miliar. Kini, keberadaan keduanya tak diketahui.</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>