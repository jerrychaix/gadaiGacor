<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>GACOR - Gadai Cepat Cair</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; text-align: center; }
        header { background: #2c3e50; color: white; padding: 40px; }
        .features { display: flex; justify-content: center; gap: 20px; padding: 40px; }
        .card { background: white; padding: 20px; border-radius: 8px; width: 250px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .btn { background: #e74c3c; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>GACOR (Gadai Cepat Cair)</h1>
        <p>Solusi Gadai Online Terpercaya, Cepat, dan Aman</p>
        <a href="login.php" class="btn">Login / Register</a>
    </header>

    <h2>Fitur Unggulan Kami</h2>
    <div class="features">
        <div class="card">
            <h3>🚗 Gadai Jemput</h3>
            <p>Barang gadai Anda akan kami jemput langsung ke rumah Anda.</p>
        </div>
        <div class="card">
            <h3>📦 Gadai Delivery</h3>
            <p>Pencairan cepat dan barang dikirimkan kembali dengan aman setelah lunas.</p>
        </div>
        <div class="card">
            <h3>💻 Gadai Jual Online</h3>
            <p>Pilihan alternatif langsung menjual barang secara online jika tidak ditebus.</p>
        </div>
    </div>
</body>
</html>