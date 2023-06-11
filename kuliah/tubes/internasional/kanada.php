<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='5' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="adana">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="kanada mt-3">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>Sejumlah aktivis dari Euthanasia Prevention Coalition (EPC) mengungkap setidaknya ada 13.500 kasus bantuan medis untuk bunuh diri di Kanada sepanjang 2022. Angka itu naik tajam dibanding setahun sebelumnya.

                Direktur EPC Alex Schadenberg mengungkap pada Daily Mail, Rabu, 7 Juni 2023, kalau angka rata-rata Euthanasia di Kanada meroket karena prosedurnya telah dipromosikan besar-besaran oleh MAiD dalam sistem medis Kanada. MAiD adalah bantuan medis untuk mengakhiri hidup.</p>
            <p>Setiap lembaga kesehatan besar memiliki tim MAiD yang akan menawarkan pada tiap orang yang memenuhi qualifikasi untuk (Euthanasia). Jika Anda bersedia membayar tim MAiD, maka mereka akan menjual apa yang ditawarkan,” kata Schadenberg.


                Pada tahun fiskal 2021, ada 10.064 kasus Euthanasia yang dilakukan oleh MAiD. Sedangkan dalam setahun terahir, jumlah itu mengalami kenaikan sampai 34 persen. EPC menyebut proyeksi itu diperoleh berdasarkan data dari empat provinsi di Kanada, yakni Alberta, Ontario, Quebec dan Nova Scotia. Otoritas kesehatan Kanada rencananya akan mempublikasi secara resmi angka warga yang memilih Euthanasia pada bulan depan.</p>
            <p>Menurut EPC, di Ontario ada 3.934 kasus Euthanasia yang dilakukan oleh MAiD pada 2022. Jumlah itu, naik dibanding 2021 yang tercatat sebanyak 3.102 kasus. Sedangkan di Provinsi Alberta kenaikan kasus Euthanasia sampai 41 persen dari 594 kasus menjadi 836 kasus. Adapun di Quebec, jumlah kasus naik dari 2.427 kasus menjadi 3.663 kasus. EPC mengatakan kematian yang ‘disetujui’ oleh negara, sekarang menjadi penyebab kematian tertinggi ketiga di Quebec setelah penyakit kanker dan serangan jantung. </p>
            <p>Daniel Zekveld, penasehat dari kelompok ARPA, mengatakan Kanada telah menciptakan sebuah rezim Euthanasia paling permisif di dunia, bahkan menawarkan prosedur suntik mati atau Euthanasia sebagai solusi mudah untuk mengakhiri penderitaan, bukannya memberikan perawatan yang akan menguatkan warga negaranya.</p>
            <p>Kelompok Dying With Dignity yang pro-Euthanasia berpendapat kalau MAiD didorong untuk mengakhiri penderitaan dan diskriminasi serta keinginan pribadi (untuk mengakhiri hidup). </p>

            </div>
    </div>
</div>
<?php require("../views/footer.php"); ?>