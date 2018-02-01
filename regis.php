<?php
session_start();

include 'config.php';

$uname=$_POST['uname'];
$pass=$_POST['pass'];

//cekuser
$cekuname = mysql_query("select * from staff_rw_021 where uname='$uname'");
if(mysql_num_rows($cekuname)<>0){
header ("location:index1.php?pesan=gagal3")or die(mysql_error());
}elseif (!$uname || !$pass){
  header("location:index1.php?pesan=gagal1")or die(mysql_error());
}else{
  
//daftar

      $query= mysql_query("insert into staff_rw_021(uname,pass,foto)values('$uname','$pass','text.png')")or die(mysql_error());
      
      
      if($query){ 
        echo "<script type='text/javascript'>alert('Berhasil Daftar')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index1.php'>";
      }
}      
?>