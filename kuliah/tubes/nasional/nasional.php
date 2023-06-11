<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/nav.php"); ?>
<?php require("../views/header.php"); ?>
<style>
    .center-carousel {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .carousel {
        width: 65%;
        margin: 0 auto;
    }
</style>
<div id="carouselExampleCaptions" class="carousel slide mt-5">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://img.okezone.com/content/2023/05/22/51/2817736/catat-ini-jadwal-pertandingan-timnas-indonesia-vs-argentina-di-jakarta-6ryzmotixy.JPG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Jadwal Timnas Indonesia vs Argentina: Info Jadwal pertandingan, Stadion , Harga Tiket</h5>
                <a href="argentina.php">
                    <p>Selengkapnya!</p>
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://pict.sindonews.net/dyn/850/pena/news/2023/06/08/34/1121453/garagara-pakai-bahasa-mandarin-saat-rapat-dpr-semprot-para-bos-smelter-china-kkz.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Momen DPR Tegur Direktur Perusahaan China karena tak Pakai Bahasa Indonesia di Sidang</h5>
                <a href="china.php">
                    <p>Selengkapnya!</p>
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://asset.kompas.com/crops/vNMWQGykcXrlSjztaObRnHBrzH8=/0x0:0x0/750x500/data/photo/2023/05/27/6471d6e749c24.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Teriakan 'Ganjar Presiden' Warnai Peresmian Relawan Gapura Nusantara</h5>
                <a href="ganjar.php">
                    <p>Selengkapnya!</p>
                </a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="nasional d-flex ms-5">
    <div class="row mt-5">
        <div class="card" style="width: 18rem;">
            <img src="https://awsimages.detik.net.id/community/media/visual/2023/04/30/senyum-lebar-ganjar-pranowo-usai-didukung-pdip-ppp-jadi-capres-2_169.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Bakal calon presiden Ganjar Pranowo menghadiri Konsolidasi Partai Demokrasi Indonesia Perjuangan Jawa Barat di Kota Cirebon, Sabtu (3/6/2023). Dalam pertemuan itu, Ganjar meminta kader selalu mendengarkan suara rakyat...
                </p>
                <a href="gangan.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5 m-5">
        <div class="card" style="width: 18rem;">
            <img src="https://asset.kompas.com/crops/8lnxMU985m8neY6oWkFZOv9CcPc=/320x8:780x315/750x500/data/photo/2022/10/08/63415569399b4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Prabowo Temui Jokowi Jumat Sore, Istana: Menhan Dipanggil Pak Presiden...</p>
                <a href="prabowo.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="card" style="width: 18rem;">
            <img src="https://akcdn.detik.net.id/community/media/visual/2022/02/05/ahmad-muzani_169.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Kaesang Siap Jadi Depok Pertama, Gerindra: Kabar Gembira bagi Warga..</p>
                <a href="depok.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5 m-5">
        <div class="card" style="width: 18rem;">
            <img src="https://statik.tempo.co/data/2022/03/30/id_1099317/1099317_720.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Proyek Kereta Cepat Jakarta-Bandung, Luhut: Tak Usah Dengar Sana-sini, Semua Under Control...</p>
                <a href="kereta.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>
<div class="nasional d-flex ms-5">
    <div class="row mt-5">
        <div class="card" style="width: 18rem;">
            <img src="https://asset.kompas.com/crops/fLUo0rqvGKom8s_7p1u0XVj0mn8=/413x0:1600x791/750x500/data/photo/2023/06/10/6484178c00f78.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">DPR Setujui Pagu Indikatif Kemenpora, Dito Ariotedjo Sampaikan Terima Kasih</p>
                <a href="kemenpora.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5 m-5">
        <div class="card" style="width: 18rem;">
            <img src="https://asset.kompas.com/crops/EOxil_6zEm1xSqonQWyHnIiscJY=/0x0:0x0/750x500/data/photo/2023/06/09/64832b2ff270a.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pembunuhan Mahasiswi Ubaya, Korban dan Pelaku Disebut Punya Hubungan Asmara</p>
                <a href="mahasiswi.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="card" style="width: 18rem;">
            <img src="https://akcdn.detik.net.id/community/media/visual/2023/06/06/tawa-ceria-jokowi-mega-di-rakernas-pdip-8.jpeg?w=700&q=90" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Megawati: Saya Diberi Julukan Wanita Terkuat Dunia yang Tinggal Satu-satunya</p>
                <a href="bull.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5 m-5">
        <div class="card" style="width: 18rem;">
            <img src="https://asset.kompas.com/crops/KQlbpnJ7uabKUOAjieRitACt7ak=/448x158:984x515/1200x800/data/photo/2023/06/08/6481784bae004.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Polda Metro Bentuk Tim Khusus Buru Si Kembar Rihana-Rihani Tersangka Penipuan Preorder iPhone</p>
                <a href="kembar.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>

<?php require("../views/footer.php")
?>