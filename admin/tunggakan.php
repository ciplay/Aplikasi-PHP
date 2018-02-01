<?php 
include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Tunggakan</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Masukkan Tunggakan</button>
<br/>
<br/>

<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from tunggakan");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	
</div>
<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari warga di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-1">Tunggakan</th>
		<th class="col-md-4">Nama Warga</th>
		<th class="col-md-3">Tanggal Tunggakan</th>
		<th class="col-md-1">Denda</th>
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from tunggakan where nama like '$cari' or jenis like '$cari'");
	}else{
		$brg=mysql_query("select * from tunggakan limit $start, $per_hal");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['jenis_tunggakan'] ?></td>
			<td><?php echo $b['nama_warga'] ?></td>
			<td><?php echo $b['tanggal_tunggakan'] ?></td>
			<td><?php echo $b['denda'] ?></td>
			<td>
				<a href="det_tunggakan.php?nama_warga=<?php echo $b['nama_warga']; ?>" class="btn btn-info">Detail</a>
				<a href="edit_tunggakan.php?nama_warga=<?php echo $b['nama_warga']; ?>" class="btn btn-warning">Edit</a>
				
			</td>
		</tr>		
		<?php 
	}
	?>
	
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Warga Baru</h4>
			</div>
			<div class="modal-body">
				<form action="warga_nunggak_act.php" method="post">
					<div class="form-group">
						<label>Jenis Tunggakan Iuran</label>
						<select class="form-control" name="jenis_tunggakan">
							<option>Sampah</option>
							<option>Keamanan</option>
							<option>Kematian</option>
							</select>
					</div>
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
						<label>Tanggal Menunggak</label>
						<input name="tanggal_tunggakan" type="text" class="form-control" id="tgl" placeholder="Pilih Tanggal" autocomplete="off">
					</div>	
					<div class="form-group">
						<label>Denda</label>
						<select class="form-control" name="denda">
							<option>Tidak Denda</option>
							<option>Rp.2.000,-</option>
							<option>Rp.5.000,-</option>
						</select>
					</div>	
																					

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
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


<?php 
include 'footer.php';

?>