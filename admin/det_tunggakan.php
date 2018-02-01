<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail</h3>
<a class="btn" href="warga.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php

$nama=mysql_real_escape_string($_GET['nama_warga']);
$det=mysql_query("select * from tunggakan where nama_warga='$nama'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Jenis Tunggakan</td>
			<td><?php echo $d['jenis_tunggakan'] ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $d['nama_warga'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Tunggakan</td>
			<td><?php echo $d['tanggal_tunggakan'] ?></td>
		</tr>
		<tr>
			<td>Denda</td>
			<td><?php echo $d['denda'] ?></td>
		</tr>
		
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>