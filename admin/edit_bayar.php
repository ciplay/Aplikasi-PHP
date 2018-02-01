<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit </h3>
<a class="btn" href="input_data_bayar.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id=mysql_real_escape_string($_GET['id_warga']);
$det=mysql_query("select * from bayar where id_warga='$id'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update_bayar.php" method="post">
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
				<td>Jenis Iuran</td>
				<td><select class="form-control" name="jenis_iuran">
							<option>Sampah</option>
							<option>Keamanan</option>
							<option>Kematian</option>
							</select></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td><select class="form-control" name="jumlah_bayar">
							<option>Rp 2.000,-</option>
							<option>Rp 5.000,-</option>
							<option>Rp 10.000,-</option>
							</select></td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><input name="tanggal_bayar" type="text" class="form-control" id="tgl" placeholder="Pilih Tanggal" autocomplete="off" value="<?php echo $d['tanggal_bayar'] ?>"></td>
			</tr>
			<tr>
				<td>RT</td>
				<td><input type="text" class="form-control" name="rt" value="<?php echo $d['rt'] ?>"></td>
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