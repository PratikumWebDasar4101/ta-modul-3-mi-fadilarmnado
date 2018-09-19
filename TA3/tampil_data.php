<?php
include 'koneksi.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>home</title>
   </head>
   <body>
     <table border="1">
       <tr>
         <th>Nama</th>
         <th>NIM</th>
         <th>Fakultas</th>
         <th>jenis kelamin</th>
         <th>File Gambar</th>
       </tr>
       <?php
          $query = $conn -> prepare("SELECT * FROM mahasiswa");
          $query -> execute();
          while ($data = $query -> fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
          <td><?php echo $data['nim']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['fakultas']; ?></td>
          <td><?php echo $data['jenis_kelamin']; ?></td>
          <td><img src="<?php echo $data['file_gbr']; ?>" width="25%"></td>
        </tr>
      <?php } ?>
     </table>
   </body>
 </html>
