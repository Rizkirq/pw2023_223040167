<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='15' ")
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
            <p>Menteri Koordinator Bidang Kemaritiman dan Investasi Luhut Binsar Pandjaitan memberikan perkembangan proyek Kereta Cepat Jakarta-Bandung (KCJB). Proyek tersebut digarap oleh PT Kereta Cepat Indonesia China dan ditargetkan beroperasi pada Agustus 2023 bertepatan dengan Hari Ulang Tahun Kemerdekaan Indonesia (HUT RI) ke-78. “Jadi ini saya pikir enggak usah dengar banyak sana-sini, tadi mengenai negosiasi, mengenai bunga, semua under control,” ujar dia dalam rapat kerja bersama bersama Badan Anggaran Dewan Perwakilan Rakyat dikutip dari akun YouTube Banggar DPR RI, Sabtu, 10 Juni 2023.</p>
            <p>Menurut Luhut, proyek sepur kilat itu dikerjakan dengan detail. Dengan time work yang baik, kata dia, tidak ada yang tidak bisa diselesaikan. “Jadi jangan dari kita sendiri membuat berita hoax mengenai ini gagal, tidak ada masalah samapai hari ini, semua terkendali mengenai itu,” tutur Luhut. Sementara, Manager Corporate Communication Kereta Cepat Indonesia Cina (KCIC), Emir Monti, memastikan operasional kereta cepat Jakarta-Bandung atau KCJB akan sesuai jadwal. "Masih (sesuai) jadwal. Agustus masyarakat sudah bisa naik," kata Emir melalui pesan WhatsApp kepada Tempo, Kamis, 8 Juni 2023</p>
            <p>Akan tetapi, Emir tak menjawab pertanyaan Tempo ihwal kabar Kementerian Perhubungan (Kemenhub) dan tiga konsultan, yakni Mott Macdonald, PwC, dan Umbra, yang menolak rencana konsorsium memulai operasi komersial penuh proyek senilai US$ 7,3 miliar itu pada Agustus 2023. Kemenhub dan tiga konsultan tersebut menyarankan untuk dimulai pada Januari 2024.</p>
            <p>Emir hanya mengatakan pada tahap awal nanti bakal dilakukan soft launching KCJB. Masyarakat bisa mencoba menggunakan layanan ini dari Halim ke Padalarang. Termasuk mencoba integrasi KCJB dengan LRT Jabodebek yang menghubungkan Stasiun KCJB Halim ke semua Stasiun pelayanan LRT Jabodebek serta KA Feeder yang mengintegrasikan Stasiun KCJB Padalarang dengan Stasiun KAI Bandung dan Cimahi.</p>

            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>