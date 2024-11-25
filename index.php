<?php
session_start(); //Start Sessionnya

// Kita Cek apakah user sudah login atau belum
// Cek-nya  dengan cara cek apakah terdapat session username atau tidak
if (isset($_SESSION['username'])) { // Jika session username ada berarti dia sudah login
    include "layouts/backend.php"; // kita panggil template backend
} else { //jika user belum login 
    include "layouts/login.php"; // kita panggil template login
}
