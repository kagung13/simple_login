<!DOCTYPE html>
<html>
<head>
  <title>I-Banking</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">I - BANKING</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Transaksi Internet Mudah dan Aman</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-default">
	<div class="panel-heading"><h4><b>Login Form</b></h4></div>
	<div class="panel-heading">
	<?php
	session_start();

	$username_admin = "admin";
	$password_admin = "admin";
	$username_user = "user";
	$password_user = "user";
	$username_guest = "tamu";
	$password_guest = "tamu";
	
	if(isset($_POST["username"]) and isset($_POST["password"])){
	if($_POST["username"]==$username_admin and $_POST["password"]==$password_admin){
		$_SESSION["berhasil_login"]=1;
		$_SESSION["username"]=$_POST["username"];
		$_SESSION["password"]=$_POST["password"];
		setcookie("username", $_POST["username"], time()+30);
		header("location:admin_area.php");	
	} else if($_POST["username"]==$username_user and $_POST["password"]==$password_user){
		$_SESSION["berhasil_login2"]=1;
		$_SESSION["username2"]=$_POST["username"];
		$_SESSION["password2"]=$_POST["password"];
		setcookie("username2", $_POST["username"], time()+300);
		header("location:user_area.php");
	} else if($_POST["username"]==$username_guest and $_POST["password"]==$password_guest){
		$_SESSION["berhasil_login3"]=1;
		$_SESSION["username3"]=$_POST["username"];
		$_SESSION["password3"]=$_POST["password"];
		setcookie("username3", $_POST["username"], time()+300);
		header("location:guest_area.php");	
	}else{
		echo "<div style='color:red;'>User dan Password Salah!</div>";	
	}
	}else{
	echo"Silahkan Isi Data Secara Lengkap!";	
	}
	?>
	</div>
	<div class="panel-body">
	<form class="form-horizontal" role="form" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" placeholder="Enter username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="password" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
	</form>
	</div>
</div>
</div>
<hr 100%>
<div style="text-align:center;font-family:Monotype Corsiva;">Copyright @ 2016 | Kurnia Agung Pamungkas | kagung13@gmail.com</div>
</body>
</html>
