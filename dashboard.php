<?php
session_start();
require 'koneksi.php'; // Hubungkan ke database

// Jika user belum login, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Ambil semua data produk dari database
$result = $conn->query("SELECT * FROM products ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Manajemen Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="header__top">
            <a href="index.php" class="header__logo-link">
                <img src="Assets/Logo.png" alt="Logo Nature's Son" class="header__logo">
            </a>
            <div class="header__branding">
                <h1 class="header__title">Sewa Alat Camping</h1>
                <p class="header__subtitle">Jelajahi Alam Bebas dengan Peralatan Terbaik</p>
            </div>
        </div>
        <nav class="nav">
            <button class="nav__toggle" aria-label="Buka navigasi">
                <span class="nav__toggle-bar"></span>
                <span class="nav__toggle-bar"></span>
                <span class="nav__toggle-bar"></span>
            </button>
            <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="index.php">Home</a></li>
                <li class="nav__item"><a class="nav__link" href="promo.php">Promo</a></li>
                <li class="nav__item"><a class="nav__link nav__link--active" href="dashboard.php">Dashboard</a></li>
                <li class="nav__item"><a class="nav__link" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main style="padding: 20px 40px;">
        <section class="intro">
            <h2 class="intro__title">Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p class="intro__text">Ini adalah halaman dashboard untuk mengelola produk sewa alat camping.</p>
        </section>

        <section class="product-management">
            <h3>Manajemen Produk</h3>
            <a href="tambah_produk.php" class="button button--primary" style="display:inline-block; width:auto; margin-bottom: 20px;">+ Tambah Produk Baru</a>
            
            <?php 
            if(isset($_GET['status'])){
                if($_GET['status'] == 'sukses_tambah') echo '<p class="message message--success">Produk berhasil ditambahkan!</p>';
                if($_GET['status'] == 'sukses_edit') echo '<p class="message message--success">Produk berhasil diperbarui!</p>';
                if($_GET['status'] == 'sukses_hapus') echo '<p class="message message--success">Produk berhasil dihapus!</p>';
                if($_GET['status'] == 'gagal') echo '<p class="message message--error">Terjadi kesalahan!</p>';
            }
            ?>

            <table class="crud-table">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga/hari</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><img src="<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['nama']); ?>"></td>
                            <td><?php echo htmlspecialchars($row['nama']); ?></td>
                            <td><?php echo htmlspecialchars($row['deskripsi']); ?></td>
                            <td>Rp <?php echo number_format($row['harga']); ?></td>
                            <td class="action-links">
                                <a href="edit_produk.php?id=<?php echo $row['id']; ?>" class="edit-link">Edit</a>
                                <a href="proses_crud.php?aksi=hapus&id=<?php echo $row['id']; ?>" class="delete-link" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">Belum ada produk. Silakan tambahkan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
    </main>
    
    <footer class="footer">
        <address class="footer__contact">
            <p>Hubungi Kami: 0812-5664-6640</p>
            <p>Email: 23dzakiii@gmail.com</p>
        </address>
        <p class="footer__copyright">&copy; 2025 Sewa Alat Camping. Semua hak cipta dilindungi.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
<?php $conn->close(); ?>