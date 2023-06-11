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
            <img src="https://assets.editorial.aetnd.com/uploads/2016/11/donald-trump-gettyimages-687193180.jpg?width=768" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Didakwa 7 Pasal Undang-Undang Spionase, Donald Trump: Saya Tidak Bersalah</h5>
                <a href="donal.php">
                    <p>Selengkapnya!</p>
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://statik.tempo.co/data/2023/03/08/id_1187146/1187146_720.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="color:black;">Apple dan Amazon Dituduh Berkonspirasi Menaikkan Harga iPhone, Ini Alasannya</h5>
                <a href="apel.php">
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
            <img src="https://akcdn.detik.net.id/visual/2023/02/21/vladimir-putin-pidato-di-kongres-federasi-rusia_169.jpeg?w=650&q=90" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Rusia Bakal Kerahkan Senjata Nuklir ke Belarus Bulan Juli
                </p>
                <a href="rusia.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5 m-5">
        <div class="card" style="width: 18rem;">
            <img src="https://statik.tempo.co/data/2020/09/05/id_964882/964882_720.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Jumlah Warga Kanada yang Lakukan Euthanasia Naik Jadi 13.500 Kasus</p>
                <a href="kanada.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="card" style="width: 18rem;">
            <img src="https://statik.tempo.co/data/2023/06/10/id_1210855/1210855_720.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Kebakaran Hutan di Kanada Memburuk, Area Seluas Jawa Barat dan Banten Membara</p>
                <a href="hutan.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="row mt-5 m-5">
        <div class="card" style="width: 18rem;">
            <img src="https://statik.tempo.co/data/2022/11/30/id_1161675/1161675_720.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">AS Larang Impor Printer Ninestar, DItuding Terlibat Kerja Paksa Muslim Uighur</p>
                <a href="impor.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>
<?php require("../views/footer.php")
?>