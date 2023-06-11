<?php
session_start();

require "../../functions.php";

$karyawan = query("SELECT * FROM karyawan");


if (isset($_POST["cari"])) {
    $karyawan = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: grid;
            grid-template-columns: 200px 1fr;
            grid-template-rows: auto 1fr auto;
            grid-template-areas:
                "header header"
                "sidebar content"
                "footer footer";
            min-height: 100vh;
        }

        .header {
            grid-area: header;
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .sidebar {
            grid-area: sidebar;
            background-color: #f1f1f1;
            padding: 10px;
        }

        .content {
            grid-area: content;
            padding: 10px;
        }

        .footer {
            grid-area: footer;
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 5px;
            background-color: #fff;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .add-user-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #337ab7;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .add-user-link:hover {
            background-color: #286090;
        }

        .search-form {
            display: flex;
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .search-form button {
            padding: 10px 20px;
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-form button:hover {
            background-color: #286090;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Dashboard Admin</h1>
        </div>

        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="admin.php">Beranda</a></li>
                <li><a href="user1.php">User</a></li>
                <li><a href="laporan.php">Laporan</a></li>
                <li><a href="../../logout/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Daftar User</h1>
            <a href="tambah.php" class="add-user-link">Tambah User</a>
            <br><br>

            <form class="search-form" action="" method="post">
                <input type="text" name="keyword" size="20" autofocus placeholder="Masukan Nama.." autocomplete="off">
                <button type="submit" name="cari">Cari!</button>
            </form>

            <br>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Gmail</th>
                    <th>Gambar</th>
                </tr>
                <?php $no = 1;
                foreach ($karyawan as $row) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('yakin?');">Hapus</a>
                        </td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['nik']; ?></td>
                        <td><?= $row['jenis_kelamin']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['gmail']; ?></td>
                        <td><img src="../../img/<?= $row['gambar']; ?>" width="50%"></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>

</html>