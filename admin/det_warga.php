<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail</h3>
<a class="btn" href="warga.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php

$id=mysql_real_escape_string($_GET['id_warga']);
$det=mysql_query("select * from warga where id_warga='$id'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Nama</td>
			<td><?php echo $d['nama_warga'] ?></td>
		</tr>
		<tr>
			<td>RT</td>
			<td><?php echo $d['rt'] ?></td>
		</tr>
		<tr>
			<td>No. Telepon</td>
			<td><?php echo $d['no_telepon'] ?></td>
		</tr>
		
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>