<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
	<style>
table, th, td {
    border: 1px solid black;
}
button {
    background-color: #008CBA; /* BLUE */
    border: solid;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
	
</head>
<body>

	<center><h1>DATA MAHASISWA</h1>
	<br><br>
	<table>
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>EMAIL</th>
				<th style="width: 150px;">WEBSITE</th>
				<th>KELAS</th>
				<th style="width: 250px;">ALAMAT</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no 	= 1;
			include 'koneksi.php';
			$query = mysqli_query($koneksi, "SELECT * FROM submit");
			while ($data = mysqli_fetch_array($query))
			{
				echo '<tr>
				<td><center>'.$no.'</center></td>
				<td>'.$data['nama'].'</td>
				<td>'.$data['email'].'</td>
				<td> <a href="'.$data['website'].'" target="_blank" >'.$data['website'].'</a> </td>
				<td><center>'.$data['kelas'].'</center></td>
				<td>'.$data['alamat'].'</td>
				<td><a href="form_edit.php?id='.$data['id'].'"> EDIT </a> / <a href="hapus_proses.php?id='.$data['id'].'" onclick="return confirm(\'Apakah anda yakin ingin menghapusnya?\')" "</a>HAPUS</td>
			</tr>';
			$no++;
		}?>
	</tbody>
</table>
<center>

<button> <a href="form.html"> Masukkan data kembali </a> </button>
	
</center>
</center>

</body>
</html>
