<!DOCTYPE html>
<html>
<head>
	<title>PROSES TAMBAH</title>
</head>
<body>

	<?php  
	include 'koneksi.php';

	$b = $_POST['nama'];
	$c = $_POST['email'];
	$d = $_POST['website'];
	$e = $_POST['kelas'];
	$f = $_POST['alamat'];

	$g = mysqli_query($koneksi, "INSERT INTO submit(nama, email, website, kelas, alamat) VALUES('$b','$c', '$d', '$e', '$f');");

	if($g){ 
		echo "<script>alert('Apakah anda ingin melanjutkan?');
		window.location='tabel.php'</script>";
	}?>
	
</body>
</html>