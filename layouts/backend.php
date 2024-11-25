<?php
include "system/koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login + Hak Akses (PHP) </title>

    <!-- Load File CSS Bootstrap  -->
    <link href="<?php echo $base_url . 'css/bootstrap.min.css'; ?>" rel="stylesheet">

    <style>
        body {
            min-height: 2000px;
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <!-- Fixed Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbvar">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $base_url . 'index.php?page=home'; ?>">My Notes Code</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $base_url . 'index.php?page=home'; ?>">Home</a></li>
                    <li><a href="<?php echo $base_url . 'index.php?page=berita'; ?>">Berita</a></li>

                    <?php
                    // Cek Role User
                    if ($_SESSION['role'] == 'admin') { //Jika Role-nya admin
                    ?>
                        <li><a href="<?php echo $base_url . 'index.php?page=pengguna'; ?>">Pengguna</a></li>
                    <?php
                    }
                    ?>

                    <li><a href="<?php echo $base_url . 'index.php?page=kontak'; ?>">kontak</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo $base_url . 'system/logout.php'; ?>">Logout</a></li>
                </ul>
            </div> <!-- /.Nav -collapse-->
        </div>
    </nav>

    <div class="container">
        <?php include "config.php"; // Load File Config.php 
        ?>
    </div>
</body>

</html>