<?php
include '../functions.php';
session_start();
if(!isset($_SESSION['sesi'])) { header("Location: ../login.php"); exit(); }

if(cek_data_post('btn_tambah') == "Ajukan") {
    tambah_gadai($_SESSION['sesi'], cek_data_post('nama_barang'), cek_data_post('estimasi'), cek_data_post('layanan'));
    echo "<script>alert('Pengajuan gadai berhasil dikirim!');</script>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard User - GACOR</title></head>
<body style="padding: 20px;">
    <h2>Dashboard User (Peminjam)</h2>
    <a href="../logout.php">Logout</a>
    <hr>
    <h3>Ajukan Gadai Baru</h3>
    <form method="POST">
        Nama Barang: <input type="text" name="nama_barang" required><br><br>
        Estimasi Nilai (Rp): <input type="number" name="estimasi" required><br><br>
        Pilih Layanan Unik: 
        <select name="layanan">
            <option value="Gadai Jemput">Gadai Jemput</option>
            <option value="Gadai Delivery">Gadai Delivery</option>
            <option value="Gadai Jual Online">Gadai Jual Online</option>
        </select><br><br>
        <input type="submit" name="btn_tambah" value="Ajukan">
    </form>
</body>
</html>