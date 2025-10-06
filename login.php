<?php
session_start();

// Jika user sudah login, redirect ke dashboard
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sewa Alat Camping</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Gaya spesifik untuk halaman login bisa disimpan di sini atau dipindah ke style.css */
        .login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh; /* Membuat konten di tengah secara vertikal */
            padding: 40px 20px;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .login-container h2 {
            color: #2E7D32;
            margin-bottom: 20px;
        }
        .login-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* Pastikan padding tidak menambah lebar */
        }
        .login-form .button {
            width: 100%;
            box-sizing: border-box;
        }
        .message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            text-align: left;
        }
        .message--error {
            background-color: #ffcdd2;
            color: #c62828;
        }
        .message--success {
            background-color: #c8e6c9;
            color: #2e7d32;
        }
    </style>
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
    </header>

    <main class="login-page">
        <section class="login-container">
            <h2>Login Akun</h2>

            <?php
            // Menampilkan pesan error dari query string
            if (isset($_GET['error'])) {
                echo '<p class="message message--error">Username atau password salah!</p>';
            }

            // Menampilkan pesan logout berhasil dari query string
            if (isset($_GET['logout'])) {
                echo '<p class="message message--success">Anda berhasil logout.</p>';
            }
            ?>

            <form action="auth.php" method="POST" class="login-form">
                <input type="text" name="username" placeholder="Username (coba: admin)" required>
                <input type="password" name="password" placeholder="Password (coba: password123)" required>
                <button type="submit" class="button button--primary">Login</button>
            </form>
        </section>
    </main>

    <footer class="footer">
         <address class="footer__contact">
            <p>Hubungi Kami: 0812-5664-6640</p>
            <p>Email: 23dzakiii@gmail.com</p>
        </address>
        <p class="footer__copyright">&copy; 2025 Sewa Alat Camping. Semua hak cipta dilindungi.</p>
    </footer>

</body>
</html>