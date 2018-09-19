<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "db_ta3";

  try {
    $conn = new PDO("mysql:host={$host};dbname={$db}",$user,$pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    print "koneksi bermasalah :" . $e ->getMessage()."<br>";
    die();
  }
 ?>
