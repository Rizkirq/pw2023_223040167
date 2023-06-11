<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='14' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="kemenpor">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="dpr mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Menteri Pemuda dan Olahraga Republik Indonesia (Menpora RI) Dito Ariotedjo mengikuti rapat kerja bersama Komisi X DPR RI di Ruang Rapat Komisi X DPR RI, Gedung Nusantara I, Kompleks Parlemen, Senayan, Jakarta, Jumat (9/6/2023). Pertemuan itu membahas Rencana Kerja dan Anggaran Kementerian Negara/Lembaga (RKA-K/L) dan Rencana Kerja Pemerintah (RKP) Kemenpora Tahun 2024. Rapat kerja ini dipimpin Ketua Komisi X DPR Syaiful Huda. </p>
            <p>Dalam rapat kerja tersebut, Komisi X DPR RI menyetujui pagu anggaran indikatif Kemenpora RI pada RAPBN TA 2024 sebesar Rp 2.019.137.744.000. Atas persetujuan ini, Menpora Dito menyampaikan terima kasih kepada Komisi X DPR RI. “Terima kasih kepada pimpinan dan anggota Komisi X DPR RI yang sudah mempercayai Kementerian Pemuda dan Olahraga. Kami ucapkan terima kasih. Amanah ini akan dikerjakan dengan sebaik-baiknya,” kata Dito Ariotedjo.</p>
            <p>Dito Ariotedjo mengatakan bahwa Kemenpora akan terus menerapkan tranparansi dan akuntabel. “Pasti kami mengedepankan akuntabel dan transparansi dengan sebaik-baiknya,” ujarnya lagi. Dito dalam pemaparan awalnya mengatakan, ada beberapa program pemuda tangguh. Di antaranya membangun sarana prasarana Prestasi Hub. Sarana itu dapat diakses individu/komunitas/organisasi kepemudaan dengan berbagai kegiatan peningkatan keterampilan dan perluasan jaringan di Aceh, Makassar, dan IKN. </p>
            <p>“Kemudian juga ada komunitas fest, pesta prestasi, Indonesian dream, muda berusaha, dan collab rangers,” ujar Dito. Selain itu, ada juga sejumlah program olahraga maju seperti sport industry summit, merdeka belajar kuliah merdeka, liga tarkam, dan membangun sport science institue di IKN, UNCEN, UI, dan UNSRI. </p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>