-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Jun 2023 pada 14.03
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfowakanda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `Isi_berita` varchar(2500) NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar`, `judul_berita`, `Isi_berita`, `id_category`) VALUES
(1, 'https://statik.tempo.co/data/2023/03/08/id_1187146/1187146_720.jpg', 'Apple dan Amazon Dituduh Berkonspirasi Menaikkan Harga iPhone, Ini Alasannya', '', 2),
(2, 'https://assets.editorial.aetnd.com/uploads/2016/11/donald-trump-gettyimages-687193180.jpg?width=768', 'Didakwa 7 Pasal Undang-Undang Spionase, Donald Trump: Saya Tidak Bersalah', '', 2),
(3, 'https://statik.tempo.co/data/2023/06/10/id_1210855/1210855_720.jpg', 'Kebakaran Hutan di Kanada Memburuk, Area Seluas Jawa Barat dan Banten Membara', '', 2),
(4, 'https://statik.tempo.co/data/2022/11/30/id_1161675/1161675_720.jpg', 'AS Larang Impor Printer Ninestar, DItuding Terlibat Kerja Paksa Muslim Uighur', '', 2),
(5, 'https://statik.tempo.co/data/2020/09/05/id_964882/964882_720.jpg', 'Jumlah Warga Kanada yang Lakukan Euthanasia Naik Jadi 13.500 Kasus', '', 2),
(6, 'https://akcdn.detik.net.id/visual/2023/02/21/vladimir-putin-pidato-di-kongres-federasi-rusia_169.jpeg?w=650&q=90', 'Rusia Bakal Kerahkan Senjata Nuklir ke Belarus Bulan Juli', '', 2),
(7, 'https://media.kompas.tv/library/image/content_article/article_img/20230522024059.jpg', 'Timnas Indonesia dipastikan bakal berhadapan dengan Argentina pada laga FIFA Matchday Juni 2023.', '', 1),
(8, 'https://akcdn.detik.net.id/community/media/visual/2023/06/06/tawa-ceria-jokowi-mega-di-rakernas-pdip-8.jpeg?w=700&q=90', 'Megawati: Saya Diberi Julukan Wanita Terkuat Dunia yang Tinggal Satu-satunya', '', 1),
(9, 'https://pict.sindonews.net/dyn/850/pena/news/2023/06/08/34/1121453/garagara-pakai-bahasa-mandarin-saat-rapat-dpr-semprot-para-bos-smelter-china-kkz.jpg', 'Pimpinan Komisi VII DPR RI menegur petinggi perusahaan smelter asal China', '', 1),
(10, 'https://akcdn.detik.net.id/visual/2022/07/13/sekjen-partai-gerindra-ahmad-muzani_169.jpeg?w=480&q=90', 'Kaesang Siap Jadi Depok Pertama, Gerindra: Kabar Gembira bagi Warga', '', 1),
(11, 'https://cdn.antaranews.com/cache/800x533/2023/05/06/ganjar-di-PDIP-Jatim.jpeg', 'Bakal calon presiden Ganjar Pranowo ', '', 1),
(12, 'https://asset.kompas.com/crops/vNMWQGykcXrlSjztaObRnHBrzH8=/0x0:0x0/750x500/data/photo/2023/05/27/6471d6e749c24.jpg', 'Sejumlah sukarelawan meneriakkan Ganjar Pronowo sebagai presiden', '', 1),
(13, 'https://asset.kompas.com/crops/KQlbpnJ7uabKUOAjieRitACt7ak=/448x158:984x515/1200x800/data/photo/2023/06/08/6481784bae004.png', 'Polda Metro Bentuk Tim Khusus Buru Si Kembar Rihana-Rihani Tersangka Penipuan Preorder iPhone', '', 1),
(14, 'https://asset.kompas.com/crops/fLUo0rqvGKom8s_7p1u0XVj0mn8=/413x0:1600x791/750x500/data/photo/2023/06/10/6484178c00f78.jpeg', 'DPR Setujui Pagu Indikatif Kemenpora, Dito Ariotedjo Sampaikan Terima Kasih', '', 1),
(15, 'https://statik.tempo.co/data/2022/03/30/id_1099317/1099317_720.jpg', 'Proyek Kereta Cepat Jakarta-Bandung, Luhut: Tak Usah Dengar Sana-sini, Semua Under Control', '', 1),
(16, 'https://asset.kompas.com/crops/EOxil_6zEm1xSqonQWyHnIiscJY=/0x0:0x0/750x500/data/photo/2023/06/09/64832b2ff270a.jpeg', 'Pemunuhan Mahasiswi Ubaya, Korban dan Pelaku Disebut Punya Hubungan Asmara', '', 1),
(17, 'https://asset.kompas.com/crops/8lnxMU985m8neY6oWkFZOv9CcPc=/320x8:780x315/750x500/data/photo/2022/10/08/63415569399b4.jpg', 'Jokowi mengatakan bahwa ia segera memanggil Menhan Prabowo Subianto', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int DEFAULT NULL,
  `periode` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` char(16) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `nik`, `jenis_kelamin`, `alamat`, `gmail`, `gambar`) VALUES
(1, 'Aldi Taher', '1234567891234567', 'Laki-Laki', 'Jl. Cemp. Putih Tim. No.12, RT.2/RW.7, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510', 'aldiTaher@gmail.com', 'aldi.jpg'),
(8, 'herdy', '1234873617283716', 'Laki-Laki', 'dawndadwadnadnwjd', 'herdy@gmail.com', 'wdwadaw'),
(9, 'sena gemp', '1928372617283718', 'Laki-Laki', 'sasawsawswsswswa', 'sena@gmail.com', 'adwawadwad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_category`
--

CREATE TABLE `nama_category` (
  `id_category` int NOT NULL,
  `jenis_category` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `nama_category`
--

INSERT INTO `nama_category` (`id_category`, `jenis_category`) VALUES
(1, 'nasional'),
(2, 'internasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `nik` char(16) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nik`, `birthdate`, `email`, `address`, `password`, `role`) VALUES
(1, 'ilman', '1237182718291738', '2023-06-01', 'wadawddwadawwd@gmail.com', 'kp.ciamis bojong soang', '$2y$10$flfK.FryZ53JC9F0052QluzQRhy6JxQ2qLrg0C3d.Nq2vnX7BYZK2', 'user'),
(3, 'rizki', '1234567890', '2002-01-01', 'rizki.223040167@mail.unpas.ac.id', 'kp.ciamis bojong soang', '$2y$10$lnP.0DAZ1wlcCT3Wk9sXLOyCMwIu5g3HyPX1LIxhBrkH21LdeYEf6', 'admin'),
(5, 'wereee', '1234567876543213', '2023-06-15', 'tui@gmail.com', 'kp.ciamis bojong soang', '$2y$10$w/qcVK1jsbbi873IZG9zXud8GZhRtp5fM11L5egF2JQLeWoc.zMwC', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_category` (`id_category`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nama_category`
--
ALTER TABLE `nama_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `nama_category` (`id_category`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
