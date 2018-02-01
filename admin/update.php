<?php 
include 'config.php';
$id=$_POST['id_warga'];
$nama_warga=$_POST['nama_warga'];
$rt=$_POST['rt'];
$no_telepon=$_POST['no_telepon'];

mysql_query("update warga set nama_warga='$nama_warga', rt='$rt', no_telepon='$no_telepon' where id_warga='$id'");
header("location:warga.php");

?>