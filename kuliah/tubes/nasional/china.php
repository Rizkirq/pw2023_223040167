<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='9' ")
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
            <P>karena tak menggunakan bahasa Indonesia dalam sidang. Padahal, sesuai aturan, peserta sidang parlemen mesti menggunakan bahasa Indonesia.

                Kejadian ini berawal dari permintaan pimpinan Komisi VII agar setiap perwakilan perusahaan smelter mengenalkan dirinya masing-masing.</p>
            <p>Direktur Keuangan PT Obsidian Stainless Steel Hans lantas mendapat giliran itu. Saat berbicara kepada pimpinan dan anggota Komisi VII DPR RI, Hans mengaku tidak bisa berbahasa Indonesia. Ia memakain bahasa Inggris.

                "Good morning, sorry this is Hans, Finance Director of PT Obisidian Stainless Steel. Sorry, I can't speak Bahasa Indonesia. So I just introduce commonly briefly," ujar Hans saat rapat dengar pendapat dengan Komisi VII DPR RI, Kamis (8/6/2023).</p>
            <p>Belum selesai berbicara, pimpinan Komisi VII DPR, Eddy Soeparno, menimpali. "Jangan, no need, just introduce your self, nanti we will hear your presentation," kata politikus PAN itu. Namun, Eddy meningatkan agar semua peserta rapat di sidang ini menggunakan bahasa Indonesia. "But, there is no one on behalf of you can speak bahasa Indonesia? Is there any one who can speak bahasa Indonesia you brouht in?" tanya Edy kembali. </p>
            <p>Hans lalu menjawab dengan bahasa Inggris bahwa ia membawa translator, tapi dia duduk di lantai dua. "I have translator in second floor, sorry," katanya sambil tersenyum.

                Edy lalu mengingatkan kembali bahwa ini adalah rapat dengar pendapat di parlemen dan harus menggunakan bahasa Indonesia. Karena, hal itu sudah ada ketentuannya.

                "This is an official parliamentary hearing and all parliamentary hearings speak in Bahasa Indonesia. There is a rule. So you need to be represented by somebody who can speak in Bahasa Indonesia, and this must be formally done, and we will wait for your presentation," kata Edy mengingatkan. </p>
            <p>Dalam kesempatan itu, Eddy juga menegur sejumlah direksi perusahaan smelter nikel yang tak hadir dalam rapat dengar pendapat tersebut.

                Sekadar gambaran, PT Obsidian Stainless Steel merupakan anak perusahaan dari Xiangyo Group dan Delong Group yang berbasis di China. Perusahaan itu bergerak di bidang peleburan nikel dan pembuatan baja. </p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>