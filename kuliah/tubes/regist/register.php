<?php
require '../functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                    alert('user baru berhasil ditambahkan!');
                </script>
                ";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
    <link rel="icon" href="../img/wakanda.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../img/wakanda.png" alt="Logo">
        </div>
        <h2>Registration</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" placeholder="Enter your NIK" required>
            </div>
            <div class="form-group">
                <label for="birthdate">Date of Birth</label>
                <input type="date" name="birthdate" id="birthdate" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" name="password2" id="confirm-password" placeholder="Confirm your password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="register">Register</button>
            </div>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>

</html>