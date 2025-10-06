<?php
session_start();

// Data login yang "benar" (untuk contoh)
$correct_username = 'admin';
$correct_password = 'password123';

// Memeriksa apakah data dikirim via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi username dan password
    if ($username === $correct_username && $password === $correct_password) {
        // Jika benar, simpan username di session dan redirect ke dashboard
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        // Jika salah, redirect kembali ke login dengan pesan error
        header('Location: login.php?error=1');
        exit();
    }
} else {
    // Jika halaman diakses langsung, redirect ke login
    header('Location: login.php');
    exit();
}
?>