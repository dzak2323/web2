<?php
session_start();
require 'koneksi.php';

// Memastikan hanya admin yang bisa akses
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Logika untuk Tambah Produk
if (isset($_POST['tambah'])) {
    $nama = $conn->real_escape_string($_POST['nama']);
    $deskripsi = $conn->real_escape_string($_POST['deskripsi']);
    $harga = (int)$_POST['harga'];
    $gambar = $conn->real_escape_string($_POST['gambar']);

    $sql = "INSERT INTO products (nama, deskripsi, harga, gambar) VALUES ('$nama', '$deskripsi', '$harga', '$gambar')";
    
    if ($conn->query($sql)) {
        header('Location: dashboard.php?status=sukses_tambah');
    } else {
        header('Location: dashboard.php?status=gagal');
    }
}

// Logika untuk Edit Produk
if (isset($_POST['edit'])) {
    $id = (int)$_POST['id'];
    $nama = $conn->real_escape_string($_POST['nama']);
    $deskripsi = $conn->real_escape_string($_POST['deskripsi']);
    $harga = (int)$_POST['harga'];
    $gambar = $conn->real_escape_string($_POST['gambar']);

    $sql = "UPDATE products SET nama='$nama', deskripsi='$deskripsi', harga='$harga', gambar='$gambar' WHERE id=$id";

    if ($conn->query($sql)) {
        header('Location: dashboard.php?status=sukses_edit');
    } else {
        header('Location: dashboard.php?status=gagal');
    }
}

// Logika untuk Hapus Produk
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM products WHERE id=$id";

    if ($conn->query($sql)) {
        header('Location: dashboard.php?status=sukses_hapus');
    } else {
        header('Location: dashboard.php?status=gagal');
    }
}
?>