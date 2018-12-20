<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


if(isset($_GET['id'])){
include 'koneksi.php';

$p = $_GET['id'];

  $del = mysqli_query($koneksi, "DELETE FROM submit WHERE id= '$p' ");
  if($del){
  	echo "<script>alert('Data Berhasil Dihapus');
    window.location='tabel.php'</script>";
  }
}?>
</body>
</html>