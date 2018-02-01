<?php 

include 'config.php';
$nama=$_POST['nama_warga'];
$jenis=$_POST['jenis_iuran'];
$jumlah=$_POST['jumlah_bayar'];
$tgl=$_POST['tanggal_bayar'];
$rt=$_POST['rt'];
$denda=$_POST['denda'];

/*$dt=mysql_query("select * from bayar where nama_warga='$nama'");
$data=mysql_fetch_array($dt);
$sisa=$data['jumlah_bayar']-$jumlah;*/

mysql_query("insert into bayar values('','$nama','$jenis','$jumlah','$tgl','$rt','$denda')");

header("location:input_data_bayar.php");

?>