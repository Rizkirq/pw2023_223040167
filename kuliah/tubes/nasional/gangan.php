<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='11' ")
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
            <p>menghadiri Konsolidasi Partai Demokrasi Indonesia Perjuangan Jawa Barat di Kota Cirebon, Sabtu (3/6/2023). Dalam pertemuan itu, Ganjar meminta kader selalu mendengarkan suara rakyat</p>
            <p>Konsolidasi bersama lebih dari seribu kader itu berlangsung di Stadion Bima, Kota Cirebon. Selain Ganjar, turut hadir Ketua DPP PDI-P Bidang Kemaritiman Rokhmin Dahuri, Ketua DPD PDI-P Jabar Ono Surono, serta sejumlah bupati dan wali kota yang juga kader PDI-P di pantura Jabar.

                Mereka adalah Wali Kota Cirebon Nashrudin Azis, Bupati Cirebon Imron Rosyadi, dan Bupati Majalengka Karna Sobahi.</p>
            <p>Selain itu, ada Bupati Kuningan Acep Purnama, Bupati Indramayu Nina Agustina, serta kader dari Kabupaten Subang dan Sumedang. Sejumlah anggota DPR dari PDI-P juga turut serta. Di sela-sela pidatonya, Ganjar berbincang bersama dua remaja putri yang sempat menari dan membacakan teks Pancasila. Gubernur Jawa Tengah itu menanyakan harapan kedua anak itu. Salah satunya ingin menjadi wanita polisi, sedangkan seorang lainnya berharap mendapat beasiswa kuliah.</p>
            <p>”Sekadar obrolan tadi mengingatkan kita bagaimana kita mendengarkan suara yang ada di bawah. Bagaimana kita mendengarkan anak-anak generasi Z,” ucap Ganjar.

                Ia mencontohkan, remaja putri yang sudah menari sejak usia 5 tahun itu membutuhkan ruang publik untuk berkreasi. ”Terbayang enggak kalau negara memberikan fasilitas untuk berkesenian, bermusik, atau riset? Kalau kita bisa memfasilitasi itu, luar biasa,” ujar Ganjar. Ia pun meminta seluruh kader di wilayah pantura Jabar menjadi agen untuk mendekati dan mendengar masyarakat.</p>
            <p>Pihaknya juga akan mengecek kepastian posko partai di tingkat daerah hingga ranting. Sesuai arahan Ketua Umum PDI-P Megawati Soekarnoputri, kader diminta membangun posko pemenangan menjelang Pemilihan Presiden 2024. Posko itu pun diharapkan mendengar suara rakyat.

                ”Saya akan jadi ’selonong boy’ untuk masuk (posko) tanpa permisi. Saya akan minta data posko di partai. Kita ingin rasakan denyut dan taktik (pemenangan). Sebenarnya, suara harus didengarkan dari bawah,” kata Ganjar yang telah tiga kali berkunjung ke Jabar, setelah Bandung dan Bogor.</p>
            <p>Ganjar, yang sempat lari pagi dan makan nasi Jamblang di Cirebon, mengingatkan agar kader PDI-P di pantura memenangi pilpres dan pemilihan legislatif agar pembangunan di pantura terus berlanjut sehingga warga sejahtera.

                ”Kalau tidak menang, mimpi itu tidak terwujud,” ujarnya.</p>
            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>