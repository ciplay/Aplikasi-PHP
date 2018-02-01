<?php 
include 'config.php';
$id=$_GET['id_warga'];
mysql_query("delete from warga where id_warga='$id'");
header("location:warga.php");

?>