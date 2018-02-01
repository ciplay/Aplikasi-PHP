<!DOCTYPE html>
<html>
<head>
  <title>Iuran Rutin RW 021</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
  
  <style type="text/css">
  .kotak{ 
    margin-top: 150px;
  }

  .kotak .input-group{
    margin-bottom: 20px;
  }
  </style>
</head>
<body>  
  <div class="container">
    <?php 
    
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal1"){
        echo"<div style='margin-bottom:-55px' align ='center' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Harap dilengkapi!!</div>";
      }
      if($_GET['pesan'] == "gagal2"){
            echo"<div style='margin-bottom:-55px' align ='center' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username atau Password Salah !! Silahkan Daftar</div>";
          }     
    }
    ?>
    <div class="panel panel-default">
      <form  action="regis.php" method="post" name="form_input">
        <div class="col-md-4 col-md-offset-4 kotak">
        <!--Login design-->
          <h3>Silahkan Login ..</h3>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" placeholder="Username" name="uname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" placeholder="Password" name="pass">
            
          </div>
        <div class="input-group">   
        <!--Daftar--> 
            <input type="submit" class="btn btn-primary" value="Daftar">
        <!--Batal-->    
            <a type="submit" class="btn btn-primary" href="admin/logout.php">Batal</a>  
           
            
          </div>
      </form>
    </div>
  </div>
</body>
</html>