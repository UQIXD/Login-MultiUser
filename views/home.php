<h2>
    <small>Selamat Datang</small>
    </br>
    <?php echo $_SESSION['nama'] ?>
</h2>
</hr>

<div class="form-group">
    <label>Role</label>
    </br> <?php echo ucwords($_SESSION['role']) ?>
</div>

<?php
// cek role user
if ($_SESSION['role'] == 'admin') { // Jika Rolenya Admin
?>
    <div class="form-group">
        <label>Hak Akses</label>
        </br>
        <ol style="margin-left: -25px;">
            <li>
                Akses menu home. Aksi yang diperbolehkan : Read
            </li>
            <li>
                Akses menu berita. Aksi yang diperbolehkan : Create, Read, Update, Delete
            </li>
            <li>
                Akses menu pengguna. Aksi yang diperbolehkan : Create, Read, Update, Delete
            </li>
            <li>
                Akses menu Kontak. Aksi yang diperbolehkan : Read
            </li>
        </ol>
    </div>

<?php

} else { // Jika role-nya operator
?>
    <div class="form-group">
        <label>Hak Akses</label>
        <br />
        <ol style="margin-left: -25px;">
            <li>
                Akses menu home. Aksi yang diperbolehkan : Read
            </li>
            <li>
                Akses menu berita. Aksi yang diperbolehkan : Read, Update, Delete
            <li>
                Akses menu Kontak. Aksi yang diperbolehkan : Read
            </li>
        </ol>
    </div>
<?php
}
?>