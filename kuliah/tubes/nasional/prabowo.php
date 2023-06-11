<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='17' ")
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
            <p> Subianto untuk membahas perihal proposal mediasi Ukraina dengan Rusia. "Secepatnya (bertemu), tetapi belum, belum ketemu," ujar Jokowi saat memberikan keterangan pers di Lanud Halim Perdanakusuma, Jakarta Timur pada Rabu (7/6/2023) pagi. Jokowi mengaku baru akan meminta penjelasan soal proposal tadi kepada Ketua Umum Partai Gerindra itu. Namun, ia menyampaikan bahwa proposal mediasi Ukraina dan Rusia yang disampaikan Menhan Prabowo Subianto di forum internasional merupakan inisiatif Prabowo sendiri.</p>
            <p>Adapun proposal perdamaian yang dimaksud disampaikan Prabowo pada forum IISSS Shangri-La Dialogue ke-20 di Singapura, konferensi keamanan antarnegara yang dihadiri para menteri dan delegasi dari 50 negara lebih. Dalam pidatonya, Prabowo mengemukakan sejumlah usul untuk menghentikan perang antara Rusia dan Ukraina. Usulan itu, pertama, gencatan senjata antara kedua kubu. Kedua, penarikan pasukan masing-masing negara dengan penerapan zona demiliterisasi dalam radius 15 kilometer dari titik gencatan senjata. Zona demiliterisasi ini, menurut Prabowo, mesti diamankan dan dipantau oleh pasukan penjaga perdamaian Perserikatan Bangsa-Bangsa (PBB)</p>
            <p>Ketiga, Prabowo mengusulkan agar PBB memfasilitasi referendum bagi warga di zona demiliterisasi untuk menentukan pilihan, apakah ingin bergabung dengan Ukraina atau Rusia. Belakangan, Kiev menolak proposal Prabowo karena dinilai lebih condong menguntungkan Rusia sebagai pihak yang pertama kali melakukan invasi. "Terdengar seperti usulan Rusia, bukan usulan Indonesia. Kami tidak butuh mediator seperti ini datang ke kami (dengan) rencana aneh ini," kata Menteri Pertahanan Ukraina Oleksii Reznikov, seperti dikutip dari AFP.</p>

            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>