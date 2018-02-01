<?php 
session_start();
include 'config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
//$pas=md5($pass);

//login
$query= mysql_query("select * from staff_rw_021 where uname='$uname' and pass='$pass'");
if(mysql_num_rows($query)<>0){
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
}elseif (!$uname || !$pass){
	header("location:index1.php?pesan=gagal1")or die(mysql_error());
}else{
	header("location:index2.php?pesan=gagal2")or die(mysql_error());
}
// echo $pas;
 ?>