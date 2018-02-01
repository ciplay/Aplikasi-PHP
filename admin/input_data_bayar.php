<?php include 'header.php';	?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Pembayaran Iuran</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-pencil"></span>  Entry</button>
<form action="" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
		<select type="submit" name="tanggal" class="form-control" onchange="this.form.submit()">
			<option>Pilih tanggal ..</option>
			<?php 
			$pil=mysql_query("select distinct tanggal_bayar from bayar order by tanggal_bayar desc");
			while($p=mysql_fetch_array($pil)){
				?>
				<option><?php echo $p['tanggal_bayar'] ?></option>
				<?php
			}
			?>			
		</select>
	</div>

</form>
<br/>


<br/>
<?php 
if(isset($_GET['tanggal'])){
	echo "<h4> Data Pembayaran Tanggal  <a style='color:blue'> ". $_GET['tanggal']."</a></h4>";
}
?>
<table class="table">
	<tr>
		<th>No</th>
		<th>Nama Warga</th>
		<th>Jenis Iuran</th>
		<th>Jumlah Bayar</th>
		<th>Tanggal Bayar</th>
		<th>RT</th>			
		<th>Denda</th>			
		<th>Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['tanggal_bayar'])){
		$tanggal=mysql_real_escape_string($_GET['tanggal_bayar']);
		$bayar=mysql_query("select * from bayar where tanggal_bayar like '$tanggal' order by tanggal_bayar desc");
	}else{
		$bayar=mysql_query("select * from bayar order by tanggal_bayar desc");
	}
	$no=1;
	while($b=mysql_fetch_array($bayar)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['nama_warga'] ?></td>
			<td><?php echo $b['jenis_iuran'] ?></td>
			<td><?php echo $b['jumlah_bayar'] ?></td>			
			<td><?php echo $b['tanggal_bayar'] ?></td>					
			<td><?php echo $b['rt'] ?></td>
			<td><?php echo $b['denda'] ?></td>
			<td>		
				<a href="edit_bayar.php?id_warga=<?php echo $b['id_warga']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_bayar.php?id_warga=<?php echo $b['id_warga']; ?>&jumlah_bayar=<?php echo $b['jumlah_bayar'] ?>&nama_warga=<?php echo $b['nama_warga']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>

		<?php 
	}
	?>
	<tr>
		<td colspan="7">Total Pemasukan</td>
		<?php 
		if(isset($_GET['tanggal'])){
			$tanggal=mysql_real_escape_string($_GET['tanggal']);
			$x=mysql_query("select sum(jumlah_bayar) as total from bayar where tanggal_bayar='$tanggal'");				$xx=mysql_fetch_array($x);			
			echo "<td><b> Rp.". number_format($xx['total']).",-</b></td>";
		}else{

		}

		?>
	</tr>
	
</table>

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Pembayaran Iuran
				</div>
				<div class="modal-body">				
					<form action="warga_bayar_act.php" method="post">
						<div class="form-group">
							<label>Nama Warga</label>
							<select class="form-control" name="nama_warga">
								<?php 
								$bayar=mysql_query("select * from warga");
								while($b=mysql_fetch_array($bayar)){
								?>	
								<option value="<?php echo $b['nama_warga']; ?>"><?php echo $b['nama_warga'] ?></option>
								<?php 
								}
								?>
							</select>	
						</div>	
						<div class="form-group">
							<label>Jenis Iuran</label>					
							<select class="form-control" name="jenis_iuran">
							<option>Sampah</option>
							<option>Keamanan</option>
							<option>Kematian</option>
							</select>			
						</div>									
						<div class="form-group">
							<label>Jumlah Bayar</label>
							<select class="form-control" name="jumlah_bayar">
							<option>Rp 2.000,-</option>
							<option>Rp 5.000,-</option>
							<option>Rp 10.000,-</option>
							</select>
						</div>	
						<div class="form-group">
							<label>Tanggal Bayar</label>
							<input name="tanggal_bayar" type="text" class="form-control" id="tgl" placeholder="Pilih Tanggal" autocomplete="off">
						</div>
						<div class="form-group">
							<label>RT</label>
							<select class="form-control" name="rt">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							</select>
						</div>											<div class="form-group">
							<label>Denda</label>
							<select class="form-control" name="denda">
							<option>Tidak Denda</option>
							<option>Rp.2.000,-</option>
							<option>Rp.5.000,-</option>
							</select>
						</div>						

					</div>
					<div class="modal-footer">
						<a type="submit" class="btn btn-primary" href="index.php">Batal</a>
						<input type="reset" class="btn btn-danger" value="Reset">												
						<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>
	<?php include 'footer.php'; ?>