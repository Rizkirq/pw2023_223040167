<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='2' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="donal">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="trump mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Donald Trump dikenai tujuh dakwaan di bawah Undang-Undang Spionase dalam penyelidikan dokumen rahasia negara yang diduga dibawanya ke kediaman pribadinya setelah tidak lagi menjabat sebagai presiden Amerika Serikat (AS). Hal tersebut dikonfirmasi pengacaranya Jim Trusty.

                Trump menulis di media sosialnya, Truth Social, dia telah diberitahu oleh Kementerian Kehakiman bahwa dia didakwa dan dipanggil untuk hadir di Gedung Pengadilan Federal Miami pada Selasa (13/6) sore</p>
            <p>
                HomeGlobalInternasional
                Didakwa 7 Pasal Undang-Undang Spionase, Donald Trump: Saya Tidak Bersalah
                Khairisa FeridaKhairisa Ferida
                Diperbarui 09 Jun 2023, 16:01 WIB
                Copy Link
                19
                Ekspresi Donald Trump Jalani Sidang Dakwaan di Pengadilan Manhattan
                Perbesar
                Trump disebut sempat mencoba menunda pembayaran uang tutup mulut senilai USD 130.000 (sekitar Rp 1,9 miliar) terhadap Stormy Daniels. Namun, Trump dan sekutunya menuding bahwa dakwaan ini bermotivasi politik. (Steven Hirsch/New York Post via AP, Pool)
                Liputan6.com, Washington - Donald Trump dikenai tujuh dakwaan di bawah Undang-Undang Spionase dalam penyelidikan dokumen rahasia negara yang diduga dibawanya ke kediaman pribadinya setelah tidak lagi menjabat sebagai presiden Amerika Serikat (AS). Hal tersebut dikonfirmasi pengacaranya Jim Trusty.

                Trump menulis di media sosialnya, Truth Social, dia telah diberitahu oleh Kementerian Kehakiman bahwa dia didakwa dan dipanggil untuk hadir di Gedung Pengadilan Federal Miami pada Selasa (13/6) sore.

                Enam+01:37VIDEO: Italia Selamatkan Lebih dari 1.400 Migran di Laut Ionia
                "Pemerintahan Joe Biden yang korup memberi tahu pengacara saya bahwa saya telah didakwa, tampaknya karena Boxes Hoax," tulis Trump seperti dilansir CNN, Jumat (9/6).
            <p>

                Trusty mengaku bahwa pihaknya menerima kabar dakwaan terhadap Trump melalui email dari Kementerian Kehakiman AS pada Kamis (8/6), namun belum melihatnya secara rinci. Dia menyebutkan, dakwaan di bawah Undang-Undang Spionase menggelikan.

                Hingga berita ini diturunkan, penasihat khusus Jack Smith yang menyelidiki kasus dokumen rahasia negara dan Kementerian Kehakiman AS belum membuat pernyataan publik.</p>
            <p>
                Ini adalah kedua kalinya Trump didakwa secara pidana tahun ini. Pada April 2023, jaksa wilayah Manhattan mendakwa Trump dengan 34 dakwaan pemalsuan catatan bisnis.

                Dakwaan kedua ini muncul di tengah perlombaan yang ketat antara sejumlah kandidat di Partai Republik untuk mendapatkan tiket sebagai calon presiden (capres) dalam Pilpres AS 2024. Sejauh ini, Trump merupakan kandidat terfavorit</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>