<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan Menggunakan PHP | www.waliyyuddin.com</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD Dengan PHP dan MYSQL</h1>
        <h2>Menampilkan data dari Database</h2>
        <h3>WWW.WALIYYUDDIN.COM</h3>
    </div>
    <br/>

    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data Berhasil Di Input.";
        }elseif ($pesan == "update") {
            echo "Data Berhasil Di Update.";
        }elseif ($pesan == "hapus") {
            echo "Data Berhasil Di Hapus.";
        }
    }
    ?>

    <br/>
    <a href="input.php" class="tombol">+ Tambah Data Baru</a>

    <h3>Data User</h3>
    <table class="table" border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysqli = mysqli_query($con, "SELECT * FROM user")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysqli)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['pekerjaan']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>