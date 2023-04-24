<?php
  //koneksi ke database
  $konek = mysqli_connect("localhost", "root", "", "websensor");
  
  //baca data yang dikirim oleh wemos
  $v_tagid = $_GET["tagid"];
  
    $date = date('Y-m-d H:i:s');

  mysqli_query($konek, "INSERT INTO rfidtrx (tagid, tagname, vdate, vtime) 
    VALUES ('$v_tagid', 'john', '$date', NOW())");

?>

