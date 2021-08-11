<!DOCTYPE html>
<html>
<head>
	<title>Cara Membuat dan Menghapus Folder Dengan PHP | WWW.WALIYYUDDIN.COM</title>
</head>
<body>
	<h1>Cara Membuat dan Menghapus Folder Dengan PHP | WWW.WALIYYUDDIN.COM</h1>
	<?php 
	function hai(){
		echo "Folder berhasil di buat";
	}

	function dadah(){
		echo "Folder Berhassil Di Hapus";
	}
	
	// create folder
	// mkdir("dugul",hai());

	// delete folder
	rmdir("dugul",dadah());

	?>
</body>
</html>