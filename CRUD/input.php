<!DOCTYPE html>
<html>
<head>
    <title>Menginput data</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD Dengan PHP dan MYSQL</h1>
        <h2>Menampilkan Data dari Database</h2>
        <h3>WWW.WALIYYUDDIN.COM</h3>
    </div>
    <br/>

    <a href="index.php">Lihat Semua Data</a>

    <br/>
    <h3>Tambah Data Baru</h3>
    <form action="input-aksi.php" method="POST">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>