<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : '';

if (isset($_SESSION['username'])) { //jika sudah login
    if ($_SESSION['role'] == 'admin') { // Jika user yang login adalah admin
        //berikut halamat yang dapat diakses
        switch ($page) {
            case 'login': //$page == login (jika isi dari $page adalah home)
                include "views/login.php"; // load file login.php yg ada di folder views
                break;

            case 'home': //$page == home (jika isi dari $page adalah home)
                include "views/home.php"; // load file home.php yg ada di folder views
                break;

            case 'berita': //$page == berita (jika isi dari $page adalah home)
                include "views/berita.php"; // load file berita.php yg ada di folder views
                break;

            case 'pengguna': //$page == pengguna (jika isi dari $page adalah pengguna)
                include "views/pengguna.php"; // load file pengguna.php yg ada di folder views
                break;

            case 'kontak': //$page == kontak (jika isi dari $page adalah kontak)
                include "views/kontak.php"; // load file kontak.php yg ada di folder views
                break;

                // case 'case_selanjutnya':
                // include "views/case_selanjutnya.php";
                // break;

                // case 'case_selanjutnya':
                // include "views/case_selanjutnya.php";
                // break;

                // case 'case_selanjutnya':
                // include "views/case_selanjutnya.php";
                //break;

            default: // ini untuk set default jika isi dari $page tidak ada
                // set halaman 404 Not Found
                header("HTTP/1.0 404 Not Found");
                echo "<h1>404 Not Found</h1>";
                echo "The Page that you have requested could not be found.";
                exit();
        }
    } else { // jika user yang login adalah operator 
        // berikut halaman yang bisa diakses
        switch ($page) {
            case 'login': // $page == login (jika isi dari $page adalah home)
                include "views/login.php"; // load file login.php yang ada di folder views
                break;

            case 'home': // $page == home (jika isi dari $page adalah home)
                include "views/home.php"; // load file home.php yang ada di folder views
                break;

            case 'berita': // $page == berita (jika isi dari $page adalah berita)
                include "views/berita.php"; // load file berita.php yang ada di folder views
                break;

            case 'kontak': // $page == kontak (jika isi dari $page adalah kontak)
                include "views/kontak.php"; // load file kontak.php yang ada di folder views
                break;

                // case 'case_selanjutnya':
                // include "views/case_selanjutnya.php";
                // break;

                // case 'case_selanjutnya':
                // include "views/case_selanjutnya.php";
                // break;

                // case 'case_selanjutnya':
                // include "views/case_selanjutnya.php";
                //break;

            default: // ini untuk set default jika isi dari $page tidak ada
                // set halaman 404 Not Found
                header("HTTP/1.0 404 Not Found");
                echo "<h1>404 Not Found</h1>";
                echo "The Page that you have requested could not be found.";
                exit();
        }
    }
} else // Jika Belum Login
    include "views/login.php"; // Set Default Halamannya adalah "login"
