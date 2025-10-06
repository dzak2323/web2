<?php
session_start();

// Jika user belum login, redirect ke halaman login
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
    <title>Dashboard - Sewa Alat Camping</title>
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
            <p class="intro__text">Ini adalah halaman dashboard Anda. Dari sini Anda dapat mengelola pesanan atau melihat riwayat sewa di masa mendatang.</p>
            <a href="index.php#produk" class="button button--primary" style="display: inline-block; width: auto; margin-top: 15px;">Lihat Produk</a>
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