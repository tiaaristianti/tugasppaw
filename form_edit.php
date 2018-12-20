<html>
<head>
  <center><title>Belajar Form PHP dengan HTML</title></center>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
<!--   <style>
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
  </style> -->
  </head>
<body>


  <?php
  include 'koneksi.php';
  $id = $_GET['id'];
  $show = mysqli_query($koneksi, "SELECT * FROM submit WHERE id='$id'");
  if(mysqli_num_rows($show) == 0){
    echo '<script>window.history.back()</script>';
  }else{
  $data = mysqli_fetch_assoc($show);
}
?>
    <center><h3>Belajar membuat Form HTML - PHP</h3></center>
    <div class="kotak_submit">
      <p class="tulisan_submit">Silahkan edit form dibawah</p>
    <form action="edit_proses.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
      <br>
      <span align="justify">
      <br>
      <center><label> Nama : </label>
      <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
      <br />
      <br>
      <label> E-mail : </label>  
       <input type="text" name="email" value="<?php echo $data['email']; ?>">
      <br />
      <br>
      <label> Website : </label>  
      <input type="text" name="website" value="<?php echo $data['website']; ?>">
      <br />
      <br>
      <label> Kelas : </label>  
      <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>">
      <br />
      <br>
      <label> Alamat : </label>  
      <textarea name="alamat"> <?php echo $data['alamat']; ?> </textarea>
      <br />
      <br>
      <input type="submit" name="proses" value="Simpan Perubahan">
      </center>
      <br />
    </span>
    </form>
  </div>
  </div>
</body>
</html>

