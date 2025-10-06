<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Paket Camping - Petualangan Outdoor</title>
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
                <li class="nav__item"><a class="nav__link nav__link--active" href="promo.php">Promo</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav__item"><a class="nav__link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav__item"><a class="nav__link" href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="nav__item"><a class="nav__link" href="#kontak">Kontak</a></li>
                    <li class="nav__item"><a class="nav__link" href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section class="promo-page">
            <h2 class="promo-page__title">Paket Promo Spesial Untukmu!</h2>
            <p class="promo-page__subtitle">Pilih paket terbaik untuk petualanganmu dan dapatkan harga lebih hemat.</p>
            
            <div class="promo-page__container">
                <article class="promo-card">
                    <h3 class="promo-card__title">Paket Hemat Solo</h3>
                    <ul class="promo-card__list">
                        <li class="promo-card__item">✓ Tenda Dome (kap. 4)</li>
                        <li class="promo-card__item">✓ Sleeping Bag</li>
                        <li class="promo-card__item">✓ Matras Gulung</li>
                        <li class="promo-card__item">✓ Headlamp</li>
                    </ul>
                    <div class="promo-card__price-wrapper">
                        <p class="promo-card__price--original">Rp 90.000/hari</p>
                        <p class="promo-card__price--discount">Rp 75.000/hari</p>
                    </div>
                    <a href="#" class="button">Pesan Sekarang</a>
                </article>

                <article class="promo-card promo-card--featured">
                    <div class="promo-card__badge">Paling Populer</div>
                    <h3 class="promo-card__title">Paket Berdua Nyaman</h3>
                    <ul class="promo-card__list">
                        <li class="promo-card__item">✓ Tenda Dome (kap. 4)</li>
                        <li class="promo-card__item">✓ 2 Sleeping Bag</li>
                        <li class="promo-card__item">✓ 2 Matras Gulung</li>
                        <li class="promo-card__item">✓ Kompor & Cooking Set</li>
                        <li class="promo-card__item">✓ Flysheet</li>
                    </ul>
                    <div class="promo-card__price-wrapper">
                        <p class="promo-card__price--original">Rp 145.000/hari</p>
                        <p class="promo-card__price--discount">Rp 125.000/hari</p>
                    </div>
                    <a href="#" class="button button--primary">Pesan Sekarang</a>
                </article>

                <article class="promo-card">
                    <h3 class="promo-card__title">Paket Grup Lengkap (4 Orang)</h3>
                    <ul class="promo-card__list">
                        <li class="promo-card__item">✓ Tenda Dome (kap. 4)</li>
                        <li class="promo-card__item">✓ 4 Sleeping Bag</li>
                        <li class="promo-card__item">✓ 4 Matras Gulung</li>
                        <li class="promo-card__item">✓ Ransel Carrier</li>
                        <li class="promo-card__item">✓ Kompor & Cooking Set</li>
                        <li class="promo-card__item">✓ 2 Headlamp</li>
                    </ul>
                    <div class="promo-card__price-wrapper">
                        <p class="promo-card__price--original">Rp 240.000/hari</p>
                        <p class="promo-card__price--discount">Rp 210.000/hari</p>
                    </div>
                    <a href="#" class="button">Pesan Sekarang</a>
                </article>
            </div>
        </section>
    </main>

    <footer id="kontak" class="footer">
        <address class="footer__contact">
            <p>Hubungi Kami: 0812-5664-6640</p>
            <p>Email: 23dzakiii@gmail.com</p>
        </address>
        <p class="footer__copyright">&copy; 2025 Sewa Alat Camping. Semua hak cipta dilindungi.</p>
    </footer>
<script src="script.js"></script> 
</body>
</html>