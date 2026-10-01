<?php
include '../functions.php';
session_start();
if(!isset($_SESSION['sesi']) || $_SESSION['role'] != 'admin') { header("Location: ../login.php"); exit(); }
$conn = connect();
$data_gadai = mysqli_query($conn, "SELECT transaksi_gadai.*, pengguna.nama FROM transaksi_gadai JOIN pengguna ON transaksi_gadai.user_id = pengguna.id");
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard Admin - GACOR</title></head>
<body style="padding: 20px;">
    <h2>Dashboard Admin - GACOR</h2>
    <a href="../logout.php">Logout</a>
    <hr>
    <h3>Daftar Pengajuan Gadai Masuk</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Nama Barang</th>
            <th>Estimasi</th>
            <th>Layanan Unik</th>
            <th>Status</th>
        </tr>
        <?php $no=1; foreach($data_gadai as $row): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nama_barang']; ?></td>
            <td>Rp <?= number_format($row['estimasi_nilai'], 0, ',', '.'); ?></td>
            <td><?= $row['layanan_unik']; ?></td>
            <td><?= $row['status_gadai']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>