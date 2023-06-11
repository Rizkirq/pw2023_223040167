<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: ../../login/login.php");
    exit;
}

require '../../functions.php';

$id = $_GET["id"];

$krywn = query("SELECT * FROM karyawan WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'user1.php';
        </script>
        ";
    } else {
        echo "
       <script>
        alert('data gagal diubah!');
        document.location.href = 'user1.php';
        </script>
       ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        form li {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Ubah Data User</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $krywn["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $krywn["gambar"]; ?>">

            <ul>
                <li>
                    <label class="form-label" for="nama">Nama:</label>
                    <input class="form-control" type="text" name="nama" id="nama" required value="<?= $krywn["nama"]; ?>">
                </li>
                <li>
                    <label class="form-label" for="nik">NIK:</label>
                    <input class="form-control" type="text" name="nik" id="nik" required value="<?= $krywn["nik"]; ?>">
                </li>
                <li>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <!-- <input type="text" name="jenis_kelamin" id="jenis_kelamin" required> -->
                    <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>

                </li>
                <li>
                    <label class="form-label" for="alamat">Alamat:</label>
                    <input class="form-control" type="text" name="alamat" id="alamat" required value="<?= $krywn["alamat"]; ?>">
                </li>
                <li>
                    <label class="form-label" for="gmail">Gmail:</label>
                    <input class="form-control" type="text" name="gmail" id="gmail" required value="<?= $krywn["gmail"]; ?>">
                </li>
                <li>
                    <label class="form-label" for="gambar">Foto:</label> <br>
                    <img src="../../img/<?= $krywn['gambar']; ?>" width="100" alt=""> <br>
                    <input class="form-control" type="file" name="gambar" id="gambar" required>
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data User</button>
                </li>
            </ul>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>