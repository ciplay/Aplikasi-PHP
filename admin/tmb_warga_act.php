<?php 
include 'config.php';
$nama_warga=$_POST['nama_warga'];
$rt=$_POST['rt'];
$no_telepon=$_POST['no_telepon'];


mysql_query("insert into warga values('','$nama_warga','$rt','$no_telepon')");
header("location:warga.php");

 ?>