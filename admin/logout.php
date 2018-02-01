<?php 
session_start();
session_destroy();
echo"<script type='text/javascript'>alert('Terima Kasih')</script>";
echo "<meta http-equiv='refresh' content='1 url=../index1.php'>";
?>
