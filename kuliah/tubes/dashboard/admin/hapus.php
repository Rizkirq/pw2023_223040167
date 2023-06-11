<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: ../../login/login.php");
    exit;
}


require '../../functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'user1.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'user1.php';
    </script>
    ";
}
