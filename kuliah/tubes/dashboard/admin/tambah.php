<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: ../../login/login.php");
    exit;
}


require '../../functions.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'user1.php';
        </script>
        ";
    } else {
        echo "
       <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'user1.php';
        </script>
       ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah User</title>
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
        <h1>Tambah User</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label class="form-label" for="nama">Nama:</label>
                    <input class="form-control" type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label class="form-label" for="nik">NIK:</label>
                    <input class="form-control" type="text" name="nik" id="nik" required>
                </li>
                <li>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <!-- <input type="text" name="jenis_kelamin" id="jenis_kelamin" required> -->
                    <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>

                </li>
                <li>
                    <label class="form-label" for="alamat">Alamat:</label>
                    <input class="form-control" type="text" name="alamat" id="alamat" required>
                </li>
                <li>
                    <label class="form-label" for="gmail">Gmail:</label>
                    <input class="form-control" type="text" name="gmail" id="gmail" required>
                </li>
                <li>
                    <label class="form-label" for="gambar">Foto:</label>
                    <input class="form-control" type="file" name="gambar" id="gambar" required>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah User</button>
                </li>
            </ul>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>