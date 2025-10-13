<?php
// Konfigurasi database
$host = 'localhost';    // Biasanya 'localhost'
$user = 'root';         // User default XAMPP/Laragon
$pass = '';             // Password default kosong
$db   = 'db_camping';   // Nama database yang sudah dibuat

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengatur charset (opsional, tapi direkomendasikan)
$conn->set_charset('utf8');
?>