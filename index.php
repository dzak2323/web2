<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature's son</title>
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
                <li class="nav__item"><a class="nav__link nav__link--active" href="index.php">Home</a></li>
                <li class="nav__item"><a class="nav__link" href="promo.php">Promo</a></li>
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
        <section class="intro">
            <h2 class="intro__title">Nature's Son menyediakan berbagai kebutuhan camping anda</h2>
            <p class="intro__text">Mulai dari tenda, sleeping bag, hingga alat masak, semua tersedia dengan kualitas terjamin untuk petualangan Anda.</p>
        </section>

        <section id="produk" class="product-showcase">
            <h2 class="product-showcase__title">Produk Pilihan Kami</h2>
            <div class="product-showcase__container">
                <article class="card">
                    <img class="card__image" src="Assets/dome_bagus.png" alt="Tenda dome merk Starlight">
                    <h3 class="card__title">Tenda Dome</h3>
                    <p class="card__description">Tenda untuk 4 orang, tahan air, dan mudah dipasang.</p>
                    <p class="card__price">Rp 50.000/hari</p>
                </article>
                <article class="card">
                    <img class="card__image" src="Assets/sleepingBag'.png" alt="Sleeping bag merk Sleepwell">
                    <h3 class="card__title">Sleeping Bag</h3>
                    <p class="card__description">Hangat dan nyaman untuk malam yang dingin di pegunungan.</p>
                    <p class="card__price">Rp 20.000/hari</p>
                </article>
                <article class="card">
                    <img class="card__image" src="Assets/komporPortabel.png" alt="Kompor portabel merk Komporinaja">
                    <h3 class="card__title">Kompor Portabel</h3>
                    <p class="card__description">Ringan dan efisien untuk memasak di alam bebas.</p>
                    <p class="card__price">Rp 15.000/hari</p>
                </article>
                <article class="card">
                    <img class="card__image" src="Assets/Headlamp.png" alt="Headlamp merk Lumines">
                    <h3 class="card__title">Headlamp</h3>
                    <p class="card__description">Penerangan tambahan saat malam hari atau di tempat yang gelap.</p>
                    <p class="card__price">Rp 10.000/hari</p>
                </article>
                <article class="card">
                    <img class="card__image" src="Assets/MatrasAngin.png" alt="Matras Angin merk Cozyss">
                    <h3 class="card__title">matras Angin</h3>
                    <p class="card__description">Alas Sleeping bag, jika dirasa sleeping bag masih kurang nyaman</p>
                    <p class="card__price">Rp 15.000/hari</p>
                </article>
                <article class="card">
                    <img class="card__image" src="Assets/TasRansel.png" alt="Tas ransel 60L merek EGE">
                    <h3 class="card__title">Tas Ransel 60L</h3>
                    <p class="card__description">Tas ransel 60L dengan bahan anti air siap dibawa ke manapun.</p>
                    <p class="card__price">Rp 10.000/hari</p>
                </article>
                <article class="card">
                    <img class="card__image" src="Assets/Flysheet.png" alt="Flysheet/Terpal berukuran 5x8">
                    <h3 class="card__title">Flysheet/Terpal</h3>
                    <p class="card__description">Flysheet untuk segala keperluan luar tenda anda.</p>
                    <p class="card__price">Rp 12.000/hari</p>
                </article>
                <article class="card">
                    <img class="card__image" src="Assets/Nesting.png" alt="Tas ransel 60L merek EGE">
                    <h3 class="card__title">Nesting/Cooking Set</h3>
                    <p class="card__description">Satu set alat masak yang hemat tempat di ransel anda.</p>
                    <p class="card__price">Rp 15.000/hari</p>
                </article>
            </div>
        </section>

        <section id="promo" class="promo-box promo-box--highlight">
            <h2 class="promo-box__title">Promo Khusus Bulan Ini!</h2>
            <p class="promo-box__text">Dapatkan diskon 10% untuk penyewaan paket tenda dan sleeping bag selama akhir pekan.</p>
            <p class="promo-box__cta">Hubungi kami sekarang untuk informasi lebih lanjut!</p>
        </section>

        <aside class="tips-box">
            <h3 class="tips-box__title">Tips Camping Aman</h3>
            <p class="tips-box__text">Selalu periksa prakiraan cuaca sebelum berangkat. Bawa pakaian yang sesuai, siapkan P3K, dan pastikan Anda menyewa alat dari kami untuk kualitas terbaik.</p>
        </aside>
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