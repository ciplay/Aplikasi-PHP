<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit </h3>
<a class="btn" href="input_data_bayar.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$nama=mysql_real_escape_string($_GET['nama_warga']);
$det=mysql_query("select * from tunggakan where nama_warga='$nama'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update_bayar.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_warga" value="<?php echo $d['id_warga'] ?>"></td>
			</tr>
			
			<tr>
				<td>Jenis Tunggakan</td>
				<td><select class="form-control" name="jenis_tunggakan">
							<<option>Sampah</option>
							<option>Keamanan</option>
							<option>Kematian</option>
							</select></td>
			</tr>
			
			<tr>
				<td>Nama Warga</td>
				<td><input type="text" class="form-control" name="nama_warga" value="<?php echo $d['nama_warga'] ?>"></td>
			</tr>
			
			<tr>
				<td>Tanggal Tunggakan</td>
				<td><input name="tanggal_tunggakan" type="text" class="form-control" id="tgl" placeholder="Pilih Tanggal" autocomplete="off" value="<?php echo $d['tanggal_tunggakan'] ?>"></td>
			</tr>
			
			<tr>
				<td>Denda</td>
				<td><select class="form-control" name="denda">
							<option>Tidak Denda</option>
							<option>Rp.2.000,-</option>
							<option>Rp.5.000,-</option>
							</select></td>
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
<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
		});
</script>
<?php include 'footer.php'; ?>