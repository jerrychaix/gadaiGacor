<?php
include 'functions.php';
if(cek_data_post('btn_login') == "Login") {
    login(cek_data_post('username'), cek_data_post('password'));
}
?>
<!DOCTYPE html>
<html>
<head><title>Login - GACOR</title></head>
<body style="text-align:center; padding-top:50px;">
    <h2>Login GACOR</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="btn_login" value="Login">
    </form>
    <p>Belum punya akun? <a href="register.php">Register di sini</a></p>
</body>
</html>