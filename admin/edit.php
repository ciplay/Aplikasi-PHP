<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit </h3>
<a class="btn" href="warga.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id=mysql_real_escape_string($_GET['id_warga']);
$det=mysql_query("select * from warga where id_warga='$id'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_warga" value="<?php echo $d['id_warga'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Warga</td>
				<td><input type="text" class="form-control" name="nama_warga" value="<?php echo $d['nama_warga'] ?>"></td>
			</tr>
			<tr>
				<td>RT</td>
				<td><input type="text" class="form-control" name="rt" value="<?php echo $d['rt'] ?>"></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="text" class="form-control" name="no_telepon" value="<?php echo $d['no_telepon'] ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>