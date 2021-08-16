<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan Menggunakan PHP | www.waliyyuddin.com</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD Dengan PHP dan MYSQL</h1>
        <h2>Menampilkan data dari Database</h2>
        <h3>WWW.WALIYYUDDIN.COM</h3>
    </div>
    <br/>

    <a href="index.php">Lihat Semua Data</a>
    
    <br/>
    <h3>Edit Data</h3>

    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysqli = mysqli_query($con, "SELECT * FROM user WHERE id='$id'")or die(mysqli_error());
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysqli)) {
    ?>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>