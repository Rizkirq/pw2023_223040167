<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='10' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="kaesang">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="depo mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Putra Presiden Joko Widodo (Jokowi), Kaesang Pangarep, menyatakan siap menjadi Depok pertama. Sekjen Partai Gerindra Ahmad Muzani mengatakan hal tersebut menjadi kabar gembira untuk warga Depok.
                "Karena itu buat kami ini adalah kabar yang menyenangkan, menggembirakan dan menggairahkan bagi kehidupan masyarakat Kota Depok. Saya kira orang Depok sangat berharap hal itu bisa terjadi," kata Muzani kepada wartawan di GOR Otista, Jakarta Timur, Sabtu (10/6/2023).

                Muzani menilai Kaesang punya kemampuan untuk memimpin Kota Depok. Kaesang dinilai bisa membawa Depok lebih kreatif dan inovatif ke depannya.
            </p>
            <p>"Karena kota itu perlu sentuhan anak muda yang memiliki kreativitas dan inovasi yang lebih baik agar Kota Depok bisa lebih inovatif dan kreatif. Karena itu adalah kota di mana UMKM bertumbuh dengan baik, dan menjadi pusat ilmu karena berbagai macam perguruan tinggi ada di sana," tuturnya . "Sehingga perlu ada kepemimpinan Kota Depok yang lebih kreatif, imajinatif, dan menurut kami Mas Kaesang adalah orang yang memiliki kemampuan untuk itu," sambungnya.

                Muzani sendiri menegaskan Gerindra siap mendukung apabila Kaesang maju menjadi calon Wali Kota Depok. "Gerindra akan mendukung bila beliau akan maju menjadi calon Wali Kota Depok," ungkapnya</p>
            <p>Kaesang Pangarep diketahui buka suara soal dukungan terhadap dirinya menjadi calon Wali Kota Depok. Kaesang menyatakan siap menjadi Depok pertama.

                "Saya Kaesang Pangarep, saya sudah mendapatkan izin dan restu dari keluarga saya, insyaallah dengan ini saya siap untuk hadir menjadi Depok pertama," kata Kaesang dalam video di kanal YouTube Kaesang Pangarep by GK Hebat seperti dilihat detikcom.

                Kaesang meminta dukungan untuk dirinya. Dia mengakhiri video dengan salam 'Merdeka'.</p>

            <p>"Mohon dukungannya, merdeka!" ujar Kaesang.
            </p>

            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>