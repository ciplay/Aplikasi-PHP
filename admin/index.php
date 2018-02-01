<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>
<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style>
<body>

<p class="bg-info">&nbsp;</p>
<div>
  <h1 align="center"><marquee>APLIKASI PEMBAYARAN IURAN RUTIN RW 021</marquee></h1>	
</div>
<p class="bg-info">&nbsp;</p>
<div align="center"><img src="foto/logo kota depok.jpg" width="206" height="427"></div>
</body>
<!-- kalender -->
<div class="pull-right">
<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>