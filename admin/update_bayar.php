<?php 
include 'config.php';
$id=$_POST['id_warga'];
$nama_warga=$_POST['nama_warga'];
$jenis_iuran=$_POST['jenis_iuran'];
$jumlah_bayar=$_POST['jumlah_bayar'];
$tanggal_bayar=$_POST['tanggal_bayar'];
$rt=$_POST['rt'];
$denda=$_POST['denda'];

mysql_query("update bayar set nama_warga='$nama_warga', jenis_iuran='$jenis_iuran', jumlah_bayar='$jumlah_bayar', tanggal_bayar='$tanggal_bayar', rt='$rt', denda='$denda' where id_warga='$id'");
header("location:input_data_bayar.php");

?>