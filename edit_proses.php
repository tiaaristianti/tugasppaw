<!DOCTYPE html>
<html>
<head>
	<title>PROSES EDIT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php  

if(isset($_POST['proses'])){

	include 'koneksi.php';

	$id = $_POST['id']; 
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$web = $_POST['website'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];

	$query = mysqli_query($koneksi, "UPDATE submit SET Nama='$nama', email='$email', website='$web', Kelas='$kelas', alamat='$alamat' WHERE id='$id'");

	if($query){ 
		echo "<script>alert('Data Berhasil di Simpan');
		window.location='tabel.php'</script>";
	}
}?>

</body>
</html>
