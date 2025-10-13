<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$id = (int)$_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id = $id");
if ($result->num_rows == 0) {
    header('Location: dashboard.php');
    exit();
}
$product = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="login-page">
        <section class="login-container">
            <h2>Edit Produk</h2>
            <form action="proses_crud.php" method="POST" class="login-form">
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                <input type="text" name="nama" placeholder="Nama Produk" value="<?php echo htmlspecialchars($product['nama']); ?>" required>
                <textarea name="deskripsi" placeholder="Deskripsi Produk" required class="form-textarea"><?php echo htmlspecialchars($product['deskripsi']); ?></textarea>
                <input type="number" name="harga" placeholder="Harga Sewa per Hari" value="<?php echo $product['harga']; ?>" required>
                <input type="text" name="gambar" placeholder="Path Gambar" value="<?php echo htmlspecialchars($product['gambar']); ?>" required>
                <button type="submit" name="edit" class="button button--primary">Simpan Perubahan</button>
                <a href="dashboard.php" style="display:block; margin-top:15px;">Batal</a>
            </form>
        </section>
    </main>
</body>
</html>
<?php $conn->close(); ?>