<?php
$host = 'localhost'; //Nama Hostnya
$username = 'root'; //Username
$password = ''; //Password (Isi Jika menggunakan Password)
$database = 'mynotescode'; // Nama Databasenya
$base_url = 'http://localhost/login_role_php2/'; // Set Base URL Web

// Koneksi MySQL dengan PDO
$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
