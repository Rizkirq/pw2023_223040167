<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='3' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="hutan">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="asii mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p> Kebakaran hutan Kanada terus meluas. Tak kurang hutan dan lahan seluas 4,4 juta hektare atau 44 ribu km persegi di Quebec yang mulai menyebar ke provinsi British Columbia, Jumat, 9 Juni 2023.

                Kanada mengalami awal terburuk musim karhutla, dengan 2.392 kebakaran sepanjang tahun ini di lahan seluas Jawa Barat ditambah Banten, demikian Pusat Kebakaran Hutan Antar Lembaga Kanada (CIFFC). Angka kebakaran ini kira-kira 15 kali rata-rata tahunan selama satu dasawarsa terakhir.</p>
            <p>CIFFC melaporkan 424 kebakaran aktif, 230 di antaranya di luar kendali. Kebakaran yang terjadi secara bersamaan di timur dan barat merupakan hal yang tidak biasa, menghabiskan sumber daya dan memicu kekhawatiran tentang konsekuensi perubahan iklim.


                Sekitar 2.500 orang warga komunitas Tumbler Ridge di timur laut British Columbia diminta men gungsi pada hari Kamis. Pejabat juga memperluas perintah evakuasi untuk kebakaran Donnie Creek, yang terbesar kedua di provinsi tersebut.</p>
            <p>Sebuah video yang didistribusikan oleh dinas pemadam kebakaran British Columbia menunjukkan jalan-jalan sepi di Tumbler Ridge, sementara hutan di dekatnya terbakar. Beberapa pengungsi mencari perlindungan di Dawson Creek, sebuah kota sekitar 120 km ke arah timur laut. "Ini menghancurkan, menyentuh hati menakutkan, mengetahui ini di awal musim," kata walikota Dawson Creek Darcy Dober kepada Canadian Broadcasting Corp.</p>
            <p>Di provinsi timur Quebec, menteri kehutanan Maite Blanchette Vezina mengatakan bahwa saat sumber daya tambahan tiba, pihak berwenang akan lebih mampu mengendalikan kebakaran. Ratusan petugas pemadam kebakaran dari seluruh dunia telah terbang ke Kanada.

                "Fase sprint ini sudah berakhir - sekarang kita berada dalam fase maraton. Jadi dalam beberapa hari dan minggu ke depan kita akan bekerja untuk menahan api aktif itu untuk mengendalikannya dan akhirnya memadamkannya," katanya dalam pengarahan.</p>
            <p>Hujan diperkirakan akan turun di Quebec dan Ontario yang berdekatan akhir pekan ini, tetapi itu mungkin tidak terlalu membantu, kata ahli meteorologi Lingkungan Kanada Gerald Cheng. "Saya mengingatkan semua orang untuk tidak terlalu berharap tentang hujan, karena itu disertai dengan risiko badai petir presipitasi bisa sangat terisolasi," katanya.</p>
            <p>Suhu di beberapa bagian British Columbia melonjak hingga lebih dari 30 derajat Celcius (86 Fahrenheit) minggu ini, hampir 10 C di atas rata-rata musiman. Sementara hujan diperkirakan terjadi pada akhir pekan, ada risiko sambaran petir.

                Di provinsi barat Alberta, lebih dari 3.500 orang tetap berada di bawah perintah evakuasi dan peringatan panas diberlakukan di sebagian besar wilayah tengah.

                Kualitas udara yang buruk diperkirakan akan bertahan di kota-kota termasuk Ottawa, Toronto, New York, dan Washington hingga Minggu ketika arah angin berubah.</p>
            <p>Sementara bandara di wilayah New York dilanda asap, perjalanan di Kanada tidak terpengaruh. "Saat ini, belum ada dampak besar yang dilaporkan terhadap operasi penerbangan komersial akibat kebakaran hutan," kata Hicham Ayoun, juru bicara Transport Canada.</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>