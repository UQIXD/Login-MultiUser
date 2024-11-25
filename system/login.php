<?php
session_start(); // Start Session

include "koneksi.php"; // Load File koneksi.php

$username = $_POST['username']; // Ambil Value username dari form
$password = $_POST['password']; // Ambil Value password dari form

// Query untuk mencari data pengguna berdasarkan username
$sql = $pdo->prepare("SELECT * FROM user WHERE username = :a");
$sql->bindParam(':a', $username);
$sql->execute();

$data = $sql->fetch(); // Ambil data dari hasil query

if ($data) { // Jika username ditemukan
    $hashedPassword = $data['password']; // Ambil password dari database
    
    // Cek apakah password input sama dengan password hashed (MD5) atau password biasa
    if ($hashedPassword === md5($password)) {
        // Jika password cocok
        $_SESSION['username'] = $data['username']; // Set Session username
        $_SESSION['nama'] = $data['nama']; // Set Session nama
        $_SESSION['role'] = $data['role']; // Set Session role
        
        header("location: " . $base_url . "index.php?page=home"); // Redirect ke halaman home
        exit;
    } else {
        // Jika password salah
        setcookie("message", "Maaf, Password salah", time() + 3600, '/');
        header("location: " . $base_url . "index.php");
        exit;
    }
} else {
    // Jika username tidak ditemukan
    setcookie("message", "Maaf, Username tidak ditemukan", time() + 3600, '/');
    header("location: " . $base_url . "index.php");
    exit;
}
?>
