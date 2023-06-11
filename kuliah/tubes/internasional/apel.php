<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='1' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="donal">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="trump mt-3 ">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Apple dan Amazon.com harus menghadapi gugatan antimonopoli konsumen di pengadilan AS yang menuduh mereka berkonspirasi untuk menaikkan harga iPhone dan iPad di platform Amazon, demikian keputusan hakim federal di Seattle, Kamis, 8 Juni 2023.

                Dalam putusannya, Hakim Distrik AS John Coughenour menolak permohonan Apple dan Amazon untuk membatalkan gugatan perwakilan kelompok prospektif dengan berbagai pertimbangan hukum</p>
            <p>Coughenour mengatakan "validitas" pasar yang relevan, masalah utama dalam litigasi antimonopoli, adalah pertanyaan juri.


                Gugatan, yang diajukan pada bulan November, adalah di antara beberapa tindakan swasta dan pemerintah yang menantang praktik harga online Amazon. Putusan Coughenour berarti kasus tersebut akan berlanjut ke pengumpulan bukti dan proses praperadilan lainnya.

                Pengacara Apple dan Amazon serta perwakilan perusahaan belum mengeluarkan tanggapan atas keputusan hakim itu.</p>
            <p>Steve Berman, pengacara penggugat, menyebut putusan pengadilan sebagai "kemenangan besar bagi konsumen ponsel Apple dan iPad."

                Penggugat adalah penduduk AS yang membeli iPhone dan iPad baru di Amazon mulai Januari 2019. Mereka menentang perjanjian antara Apple dan Amazon yang mulai berlaku tahun itu membatasi jumlah pengecer kompetitif sehingga melanggar ketentuan antimonopoli.</p>
            <p>Pada tahun 2018, menurut gugatan tersebut, ada sekitar 600 reseller Apple pihak ketiga di Amazon. Apple setuju untuk memberi Amazon diskon pada produknya jika Amazon mengurangi jumlah pengecer Apple dari pasarnya, demikian tudingan dalam gugatan itu.</p>
            <p>Apple menyatakan, bahwa perjanjiannya dengan Amazon membatasi jumlah pengecer resmi untuk membantu meminimalkan barang Apple palsu yang dijual di platform e-niaga.

                Dalam pengajuan pengadilan, pengacara Apple menyebut perjanjian itu "biasa" dan mengatakan "Mahkamah Agung dan Sirkuit Kesembilan secara rutin mengakui bahwa perjanjian semacam itu bersifat prokompetitif dan sah."</p>
            <p>Hakim di Seattle mengatakan motivasi "penyeimbang" untuk kesepakatan antara Apple dan Amazon akan dibahas nanti dalam litigasi.

                Apple mencatat penjualan $94,8 miliar pada kuartal kedua, dan Amazon melaporkan $127,4 miliar dalam laporan pendapatan kuartalan terbarunya.</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>