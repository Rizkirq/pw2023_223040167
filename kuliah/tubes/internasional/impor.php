<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='4' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="As">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="impor mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p> Amerika Serikat melarang impor dari pembuat printer Ninestar Corp dan sebuah perusahaan kimia China atas dugaan pelanggaran hak asasi manusia terkait warga minoritas Muslim Uighur.

                Ninestar, yang situs webnya menyatakan sebagai produsen printer laser terbesar keempat di dunia, dan Xingjang Zhongtai Chemical, dijauhkan dari rantai pasokan AS karena berpartisipasi dalam praktik bisnis yang menargetkan warga Uighur China dan kelompok teraniaya lainnya, kata Departemen Keamanan Dalam Negeri AS DHS, Jumat, 9 Juni 2023.</p>
            <p>Kedua perusahaan belum memberikan tanggapan atas larangan itu.


                Pakar PBB dan kelompok hak asasi memperkirakan bahwa lebih dari satu juta orang, terutama Uighur dan minoritas Muslim, ditahan di kamp-kamp di wilayah Xinjiang barat China dalam beberapa tahun terakhir, dengan banyak yang mengatakan bahwa mereka menjadi sasaran pelatihan dan pelecehan ideologis.

                China membantah semua tuduhan pelecehan itu.</p>
            <p>Ketua Komisi Eksekutif Kongres untuk China - anggota DPR Chris Smith dan Senator Jeff Merkley - mengatakan tindakan itu "penting karena menawarkan panduan yang jelas kepada perusahaan Amerika untuk pemetaan rantai pasokan".

                Namun mereka mengklaim bahwa barang dari perusahaan yang terlibat kerja paksa seperti "suku cadang mobil, panel surya, rayon, dan garmen" terus memasuki pasar AS.</p>
            <p>Senator Marco Rubio mengatakan "sementara pengumuman hari ini oleh DHS untuk menghukum lebih banyak aktor jahat disambut baik, itu hanya setetes air dan harus melangkah lebih jauh." Dia berargumen "pendekatan kasus per kasus pemerintahan Biden saat ini memberikan izin gratis kepada banyak perusahaan yang masih mendapat untung dari kerja paksa."</p>
            <p>DHS mengatakan tindakan tersebut diambil sebagai bagian dari Undang-Undang Perlindungan Kerja Paksa Uighur AS (UFLPA), yang ditandatangani menjadi undang-undang pada Desember 2021. Undang-undang tersebut melarang impor ke AS barang yang diproduksi di Xinjiang atau oleh perusahaan yang diidentifikasi di Entitas UFLPA, kecuali importir dapat membuktikan bahwa barang tersebut tidak diproduksi dengan kerja paksa.</p>
            <p>Dua puluh dua perusahaan sekarang masuk dalam daftar, dan DHS mengatakan telah memeriksa barang senilai lebih dari $1,3 miliar yang kemungkinan diproduksi dengan kerja paksa hampir setahun setelah UFLPA diterapkan.

                Ninestar dan delapan anak perusahaannya yang berbasis di Zhuhai, bersama dengan Xinjiang Zhongtai Chemical, ditambahkan ke dalam daftar karena bekerja sama dengan pemerintah Xinjiang untuk merekrut, mengangkut, mentransfer, menampung atau menerima tenaga kerja paksa warga etnis Uighur, Kazakh, Kyrgyz, atau anggota lainnya. kelompok teraniaya dari Xinjiang, menurut postingan tersebut.</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>