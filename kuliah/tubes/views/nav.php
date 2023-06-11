<nav class="navbar sticky-top navbar-expand-lg bg-secondary navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-danger fw-semibold fst-italic ms-5 font" href="<?= $home; ?>">Kominfo <span class="text-white">Wakanda</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto me-4 fs-5">
        <li class="nav-item me-5 mt-1">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle butt" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan Public
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="layanan_public/kesehatan.php">Kesehatan</a></li>
              <li><a class="dropdown-item" href="layanan_public/pendidikan.php">Pendidikan dan Pembelajaran</a></li>
              <li>
                <a class="dropdown-item" href="https://samsatdigital.id/">Pajak Online</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://covid19.go.id/id">Informasi Covid-19</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item me-5 mt-1">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle butt" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              News
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="nasional/nasional.php">Nasional</a></li>
              <li><a class="dropdown-item" href="internasional/internasional.php">Internasional</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item me-5 mt-1">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle butt" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile Negara
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="ibu_kota/ikn.php">Ibu Kota</a></li>
              <li><a class="dropdown-item" href="ibu_kota/wisata_populer.php">Wisata Populer</a></li>
              <li>
                <a class="dropdown-item" href="https://dprd.bandung.go.id/">Tentang Wakanda</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item me-5 mt-1">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle butt" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Government
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://www.mpr.go.id/">MPR</a></li>
              <li><a class="dropdown-item" href="https://www.dpr.go.id/">DPR</a></li>
              <li>
                <a class="dropdown-item" href="https://dpd.go.id/">DPD</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://dprd.bandung.go.id/">DPRD</a>
              </li>
            </ul>
          </div>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link me-5">About</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>