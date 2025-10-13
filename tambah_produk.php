<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="login-page">
        <section class="login-container">
            <h2>Tambah Produk Baru</h2>
            <form action="proses_crud.php" method="POST" class="login-form">
                <input type="text" name="nama" placeholder="Nama Produk" required>
                <textarea name="deskripsi" placeholder="Deskripsi Produk" required class="form-textarea"></textarea>
                <input type="number" name="harga" placeholder="Harga Sewa per Hari" required>
                <input type="text" name="gambar" placeholder="Path Gambar (cth: Assets/nama_file.png)" required>
                <button type="submit" name="tambah" class="button button--primary">Tambah Produk</button>
                <a href="dashboard.php" style="display:block; margin-top:15px;">Batal</a>
            </form>
        </section>
    </main>
</body>
</html>