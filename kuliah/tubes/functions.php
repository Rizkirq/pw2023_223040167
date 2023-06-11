<?php
$conn = mysqli_connect("localhost", "root", "", "kominfowakanda");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}




function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nik = htmlspecialchars($data["nik"]);
    $jk = htmlspecialchars($data["jenis_kelamin"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $gmail = htmlspecialchars($data["gmail"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO karyawan VALUES (null, '$nama', '$nik', '$jk', '$alamat', '$gmail', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if ($error == 4) {
        echo "<script>
        alert('Isi gambar terlebih dahulu!');
        </script>";
        return false;
    }

    //cek upload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('bukan gambar!');
        </script>";
        return false;
    }

    //ukuran terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar  !');
        </script>";
        return false;
    }

    //gambar siap di upload
    //genereate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}





function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nik = htmlspecialchars($data["nik"]);
    $jk = $data["jenis_kelamin"];
    $alamat = htmlspecialchars($data["alamat"]);
    $gmail = htmlspecialchars($data["gmail"]);
    $gambarLama = $data['gambarLama'];

    if ($_FILES['gambar']['error'] == 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }



    $query = "UPDATE karyawan SET
                nama = '$nama',
                nik = '$nik',
                jenis_kelamin = '$jk',
                alamat = '$alamat',
                gmail = '$gmail',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM karyawan
                WHERE
                nama LIKE '%$keyword%' OR
                nik LIKE '%$keyword%' OR 
                gmail LIKE '%$keyword%'
                ";

    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $nik = $data['nik'];
    $birth = $data['birthdate'];
    $email = $data['email'];
    $address = $data['address'];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $role = 'user';

    $result = mysqli_query($conn, "SELECT username  FROM user WHERE
                username = '$username'");
    //cek username

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah digunakan!');
        </script>";

        return  false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
    }

    //enckripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$nik', '$birth', '$email', '$address', '$password', '$role')");

    // tambahkan user baru ke database
    return mysqli_affected_rows($conn);
}
