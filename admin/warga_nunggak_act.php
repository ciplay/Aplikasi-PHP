<?php 

include 'config.php';
$nama=$_POST['nama_warga'];
$jenis=$_POST['jenis_tunggakan'];
$tgl=$_POST['tanggal_tunggakan'];
$denda=$_POST['denda'];

/*$dt=mysql_query("select * from bayar where nama_warga='$nama'");
$data=mysql_fetch_array($dt);
$sisa=$data['jumlah_bayar']-$jumlah;*/

mysql_query("insert into tunggakan values('$nama','$jenis','$tgl','$denda')");

header("location:tunggakan.php");

?>