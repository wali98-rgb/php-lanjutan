<!DOCTYPE html>
<html>
<head>
    <title>Membuat Captchs dengan menggunakan PHP | www.waliyyuddin.com</title>
    <link rel="stylesheet" href="style.css" style="text/css">
</head>
<body>
    <h1>Cara membuat CAPTCHA dengan PHP | www.waliyyuddin.com</h1>
    <div class="kotak">
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "salah") {
                echo "<p>Captcha tidal sesuai.</p>";
            }
        }
        ?>

        <p>Isi Captcha Dengan Benar</p>
        <form action="periksa_captcha.php" method="post">
            <table align="center">
                <tr>
                    <td>Captcha</td>
                    <td><img src="captcha.php" alt="gambar" ></td>
                </tr>
                <td>Isikan Captcha</td>
                <td><input name="nilaiCaptcha"></td>
                <tr>
                    <td><input type="submit" value="Cek Captcha"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>