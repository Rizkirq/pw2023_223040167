<?php
session_start();
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}
require '../functions.php';

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    // cek email
    if (mysqli_num_rows($result) == 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set sesion
            $_SESSION["login"] = true;
            $_SESSION['role'] = $row['role'];

            if ($_SESSION['role'] == 'admin') {
                header("Location: ../dashboard/admin/admin.php");
                exit;
            }
            if ($_SESSION['role'] == 'user') {
                header("Location: ../index.php");
                exit;
            }

            // header("location: ../dashboard/admin/admin.php");
            // exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="../img/wakanda.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="logo w-50 " style="margin-left: 340px;">
            <img src="../img/wakanda.png" alt="Logo">
        </div>
        <h2>Login</h2>
        <?php if (isset($error)) : ?>
            <p style="color : red; font-style: italic;">email / password salah</p>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3 remember-me">
                        <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Remember
                        </label>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" name="login" class="btn btn-secondary justify-content-center">Login</button>
                    </div>
                    <div class="mb-3 forgot-password">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="mb-3 register-link">
                        <p>Don't have an account? <a href="../regist/register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>