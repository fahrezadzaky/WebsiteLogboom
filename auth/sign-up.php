<?php
require '../function.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registration successful!'); window.location='login.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | LOGBOOM SATPOLPP</title>
    <!-- icon LOGBOOM -->
    <link rel="icon" href="../assets/dist/img/LOGBOOM.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="../assets/img/login-img.svg" class="img-fluid mb-3" alt="login image">
            </div>
            <div class="col-md-6" style="margin-top: -30px;">
                <p class="btn logo" href="../index.php">LOGBOOM </p>
                <img src="css/LOGBOOM.png" width="40" height="40">
                <p class="lead">Satuan Polisi Pamong Praja Kota Surabaya</p>
                <h4 class="signin-text mb-3">Sign Up</h4>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">Nomor Induk Pegawai (NIP)</label>
                        <input type="text" class="form-control" name="nip" id="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="nama" required>
                    </div>
                    <button class="btn btn-signin" value="register" name="register">Register</button>
                    <hr> 
                    <p>Sudah Punya akun? Masuk disini!</p>
                    <a href="login.php" class="btn btn-signup">Sign in</a>
                </form>
            </div>
        </div>
    </div>
<!-- JavaScript -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>