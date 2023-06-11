<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: ../../login/login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
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
            margin-left: 300px;
            margin-top: 200px;
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
                <li><a href="#">Beranda</a></li>
                <li><a href="user1.php">User</a></li>
                <li><a href="laporan.php">Laporan</a></li>
                <li><a href="../../logout/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde impedit ratione reprehenderit voluptatibus aliquid dolor rerum aut beatae aperiam, voluptatem obcaecati non tempore. Nemo est dolor quisquam provident corporis!</h2>
        </div>

        <div class="footer">
            &copy; 2023 Pemerintah Kota XYZ
        </div>
    </div>
</body>

</html>