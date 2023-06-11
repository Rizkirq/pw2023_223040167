<?php require("../functions.php");
$apel = query("SELECT * FROM berita WHERE id_berita='7' ")
?>
<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/header.php"); ?>
<?php require("../views/nav.php"); ?>
<div class="container">
    <div class="newww">
        <?php foreach ($apel as $apel) : ?>
            <img src="<?= $apel['gambar']; ?>" class="card-img-top" alt="...">
            <div class="argent mt-5">
                <h3><?= $apel['judul_berita']; ?></h3>
            <?php endforeach; ?>
            <p>pada laga FIFA Matchday Juni 2023. Pertandingan tersebut rencananya dimainkan di Jakarta pada 19 Juni 2023 yang akan datang.

                Argentina dilaporkan banjir tawaran laga uji coba usai menjadi juara Piala Dunia 2023. Khusus pada FIFA Matchday edisi Juni 2023, La Celeste punya rencana untuk melakoni tur ke Asia.</p>
            <p>Pada akhirnya, Indonesia menjadi salah satu negara yang dipilih Argentina untuk menjadi lawan pada FIFA Matchday edisi Juni 2023. Satu lawan lain yang akan dihadapi adalah Australia.

                Timnas Indonesia bisa dibilang sangat beruntung mendapat kesempatan ini. Pasalnya, Argentina saat ini berstatus juara Piala Dunia 2022, menempati peringkat 1 dunia, dan memiliki megabintang dalam diri Lionel Messi.</p>
            <h3>Jadwal Pertandingan</h3>
            <p>Sesuai dengan pengumuman dari Federasi Sepak Bola Argentina, rencananya mereka akan menggelar dua laga dalam periode FIFA Matchday Juni nanti.

                Laga pertama yang bakal dilakoni Lionel Messi cs adalah menghadapi Australia. Duel ini bakal dihelat di Workers' Stadium, Beijing, China pada Kamis, 15 Juni 2023.</p>
            <p> Selanjutnya, Argentina akan terbang ke Jakarta dan bakal meladeni tantangan Timnas Indonesia pada Senin, 19 Juni 2023.

                Sementara itu, Ketua PSSI Erick Thohir pada Rabu (24/5/2023) secara resmi mengumumkan kedatangan Timnas Argentina ke Jakarta.

                "Saya apresiasi sama sahabat saya dari Argentina, bahwa Argentina juga ingin hadir di Indonesia untuk turut membangun sepak bola di sini," buka Erick Thohir.</p>
            <h3>Stadion Venue Pertandingan</h3>
            <p>Dalam pengumuman mereka, Argentina menyebut bahwa tim asuhan Lionel Scaloni akan menghadapi Timnas Indonesia di ibu kota Jakarta.

                Pengumuman ini pun dikonfirmasi oleh Erick Thohir. Laga ini dikonfimasi akan dihelat di Stadion Utama Gelora Bung Karno (SUGBK), Jakarta.</p>
            <p>Dalam pengumuman mereka, Argentina menyebut bahwa tim asuhan Lionel Scaloni akan menghadapi Timnas Indonesia di ibu kota Jakarta.

                Pengumuman ini pun dikonfirmasi oleh Erick Thohir. Laga ini dikonfimasi akan dihelat di Stadion Utama Gelora Bung Karno (SUGBK), Jakarta.</p>
            <h3>Informasi Harga Tiket Timnas Indonesia vs Argentina</h3>
            <p>Total tiket yang dijual sekitar 60 ribu lembar. 60 ribu tiket itu akan dibagi dalam empat kategori. Berikut adalah harga setiap kategori:

                <br> - Cat 3: Rp.600 Ribu
                <br> - Cat 2: Rp.1,2 Juta
                <br> - Cat 1: Rp.2,5 Juta
                <br> - VIP (Barat& Timur): Rp.4,25 Juta
            </p>
            <p>Tiket dijual selama tiga hari, yakni 5 hingga 7 Juni 2023. Hanya dalam hitungan menit, tiket untuk semua kategori yang dijual setiap harinya langsung habis tak tersisa.</p>
            <p><i>https://www.bola.net/</i></p>
            </div>

    </div>
</div>