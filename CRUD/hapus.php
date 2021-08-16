<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM user WHERE id='$id'")or die(mysqli_error());

header("location:index.php?pesan=hapus");
?>