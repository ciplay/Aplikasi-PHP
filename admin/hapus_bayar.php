<?php 
include 'config.php';
$id=$_GET['id_warga'];
mysql_query("delete from bayar where id_warga='$id'");
header("location:input_data_bayar.php");

?>