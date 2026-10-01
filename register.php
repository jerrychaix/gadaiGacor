<?php
include 'functions.php';
if(cek_data_post('btn_reg') == "Register") {
    register(
        cek_data_post('nama'),
        cek_data_post('email'),
        cek_data_post('username'),
        cek_data_post('password'),
        "Pendaftaran Berhasil, Silakan Login!",
        "login.php"
    );
}
?>
<!DOCTYPE html>
<html>
<head><title>Register - GACOR</title></head>
<body style="text-align:center; padding-top:50px;">
    <h2>Register Akun GACOR</h2>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Lengkap" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="btn_reg" value="Register">
    </form>
    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>
</html>