<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	
	include 'config.php';
	?>
	<title>SEKRETARIAT RW 021</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style></head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand"> SEKRETARIAT RW 021</a>
					
				</div>
				<div class="collapse navbar-collapse">				
					<ul class="nav navbar-nav navbar-right">
					<li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span>  Chat</a></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Selamat Datang! <?php echo $_SESSION['uname']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a></li>
					</ul>
				</div>
		</div>
	</div>

	<!-- modal input -->
	<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Chat Notifikasi</h4>
				</div>
				<div class="modal-body">
					<?php 
						
						if('jumlah_bayar'<=1){			
							echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Silahkan Buat Rekapitulasi !!</div>";	
						}
					
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>						
				</div>
				
			</div>
		</div>
	</div>

		<div class="col-md-2">
		    <div class="row">
				<?php 
				$use=$_SESSION['uname'];
				$fo=mysql_query("select foto from staff_rw_021 where uname='$use'");
				while($f=mysql_fetch_array($fo)){
				?>				

				<div class="col-xs-6 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive" src="foto/<?php echo $f['foto']; ?>">
					</a>
				</div>
				<?php 
				}
				?>		
		</div>

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>			
			<li><a href="warga.php" class="list-group-item-info"><span class="glyphicon glyphicon-briefcase"></span>  Data Warga</a></li>
			<li><a href="input_data_bayar.php" class="bg-info"><span class="glyphicon glyphicon-briefcase"></span>  Data Bayar</a></li>
			<li><a href="tunggakan.php" class="bg-info"><span class="glyphicon glyphicon-briefcase"></span>  Tunggakan</a></li>
			<li><a href="laporan.php" class="bg-info"><span class="glyphicon glyphicon-briefcase"></span>  Laporan</a></li>      
			<li><a href="ganti_foto.php" class="bg-info"><span class="glyphicon glyphicon-picture"></span>  Ganti Foto</a></li>
			<li><a href="ganti_pass.php" class="bg-info"><span class="glyphicon glyphicon-lock"></span>  Ganti Password</a></li>
			<li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">
	</body>
	</html>