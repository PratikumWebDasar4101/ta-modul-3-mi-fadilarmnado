<?php
include 'koneksi.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <form class="" action="signup.php" method="post" enctype="multipart/form-data">
       <center>
       <h1>Sign Up</h1><br>
       <label>Nama User :&nbsp;</label><input type="text" name="nama"><br>
       <label>NIM :&nbsp;</label><input type="text" name="nim"><br>
       <label>Fakultas  :&nbsp;</label>
       <select id="fakultas" name="fakultas">
         <option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
         <option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
         <option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
         <option value="Fakultas Informatika">Fakultas Informatika</option>
       </select><br>
       <label>Jenis Kelamin :</label>
       <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
       <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan  <br>
       <label>file gambar :</label><input type="file" name="file_gbr"><br>
       <input type="submit" name="simpan" value="simpan">
     </center>
     </form>

   </body>
 </html>
<?php

if (isset($_POST['nim'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $fakultas = $_POST['fakultas'];
  $jenis_kelamin = $_POST['jenis_kelamin'];

  $nama_gbr = $_FILES['file_gbr']['name'];
  $tmp_gbr = $_FILES['file_gbr']['tmp_name'];
  $dir = "upload/";
  $tempat_gbr = $dir . $nama_gbr;
  $upload_gbr = move_uploaded_file($tmp_gbr,$tempat_gbr);
  if (!$upload_gbr) {
    die("gagal masukkan gambar");
  }

  $sql = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$fakultas', '$jenis_kelamin','$tempat_gbr')";
    $is_success = $conn->exec($sql);
    if($is_success){
      header('location: tampil_data.php');
    }
}
?>
