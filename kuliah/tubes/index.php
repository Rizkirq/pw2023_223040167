<?php $style = 'style.css';
$home = "index.php"; ?>
<?php require("views/header.php"); ?>
<?php require("views/nav.php"); ?>
<div class="jumbotron" id="home">
  <h1>
    welcome to a government <br />
    without corruption
  </h1>
  <div class="mixxx">
    <a href="login/login.php" class="btn btn-danger me-2 mixi"><i class="bi bi-person-fill me-1"></i>Login</a>
    <a href="regist/register.php" class="btn btn-danger me-2 mixi">Register</a>
  </div>
</div>
<div class="container" id="news">
  <div class="row mt-5">
    <div class="col-lg-4">
      <div class="card" style="width: 18rem">
        <img src="https://beritaalternatif.com/wp-content/uploads/2022/07/SOEKARNO-1.jpg" class="card-img-top" alt="Soekarno" />
        <div class="card-body">
          <h5 class="card-title">Dr. Ir. H. Soekarno</h5>
          <p class="card-text">
            Ir. Soekarno atau yang biasa dipanggil Bung Karno yang lahir di
            Surabaya, Jawa Timur pada tanggal 6 Juni 1901 dari pasangan
            Raden Soekemi Sosrodihardjo dengan Ida Ayu Nyoman Rai...
          </p>
          <a href="news/presiden1.php" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card" style="width: 18rem">
        <img src="https://mmc.tirto.id/image/2016/08/04/TIRTO-soeharto.JPG" class="card-img-top" alt="soeharto" />
        <div class="card-body">
          <h5 class="card-title">H. M. Soeharto</h5>
          <p class="card-text">
            Soeharto atau yang biasa dikenal oleh masyarakat Indonesia
            adalah Presiden Republik Indonesia yang kedua. Soeharto
            merupakan Presiden yang paling lama menjabat yaitu 32 tahun...
          </p>
          <a href="news/soeharto.php" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card" style="width: 18rem">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsQFc0C4SLywAWModV3gdiGL6GDeIDhM3LBj31L4XB7xcKy5iWB64SHidP2l484Qf_x04&usqp=CAU" class="card-img-top" alt="AbdurrahmanWahid" />
        <div class="card-body">
          <h5 class="card-title">
            Prof. Dr.-ing. Ir. H. Bacharuddin Jusuf Habibie, FREng.
          </h5>
          <p class="card-text">
            BJ Habibie merupakan presiden ketiga Republik Indonesia yang
            diangkat setelah Presiden Soeharto mundur...
          </p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row mt-5">
    <div class="col-lg-4">
      <div class="card" style="width: 18rem">
        <img src="https://mmc.tirto.id/image/2016/06/01/AbdurrahmanWahid_ratio-16x9.JPG" class="card-img-top" alt="AbdurrahmanWahid" />
        <div class="card-body">
          <h5 class="card-title">Dr. K.H Abdurrahman Wahid</h5>
          <p class="card-text">
            iapa yang tidak kenal dengan sosok Gus Dur presiden RI ke-4 ini.
            Sosok luar biasa dan merupakan sosok yang menginspirasi.
            Terkenal dengan kata-katanya “Gitu aja kok repot”. Untuk
            mengenang beliau...
          </p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card" style="width: 18rem">
        <img src="https://thumb.tvonenews.com/thumbnail/2023/04/30/644e737309bdb-megawati-soekarnoputr_1265_711.jpg" class="card-img-top" alt="megawati" />
        <div class="card-body">
          <h5 class="card-title">
            Prof. Dr. Hj. Diah Permata Megawati Setiawati Soekarnoputri
          </h5>
          <p class="card-text">
            Megawati Soekarnoputri merupakan salah satu tokoh di Indonesia
            dan juga anak kedua dari Presiden Pertama Indonesia Ir
            Soekarno...
          </p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card" style="width: 18rem">
        <img src="https://arc.or.id/wp-content/uploads/2018/08/susilo-bambang-yudhoyono.jpg" class="card-img-top" alt="susilo-bambang-yudhoyono" />
        <div class="card-body">
          <h5 class="card-title">
            Prof. Dr. Dr. H. Susilo Bambang Yudhoyono, M.A.,
          </h5>
          <p class="card-text">
            Susilo Bambang Yudhoyono lahir di Pacitan, Jawa Timur, pada 9
            September 1949. Ia adalah anak tunggal dari pasangan R Soekotjo
            dan Sitti Habibah. Darah militer menurun dari ayah SBY yang...
          </p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" id="government">
  <div class="row">
    <div class="col-lg text-center mt-5 lop rounded-circle">
      <img src="img/work.jpg" class="rounded-circle" />
      <h2>AYO KERJA!</h2>
      <div class="pe">
        <img src="img/DPR_RI_insignia.png" class="rounded-circle" />
      </div>
      <div class="to">
        <img src="img/mpr.png" class="rounded-circle" />
      </div>
      <div class="meep">
        <img src="img/dpd.png" class="rounded-circle" />
      </div>
      <div class="kole">
        <img src="img/dprd.png" class="rounded-circle" />
      </div>
    </div>
  </div>
</div>
<?php require("views/footer.php"); ?>