<!DOCTYPE html>
<html>
<head>
  <title>I-Banking - User</title>
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
	<div class="panel-heading"><h4><b>User Area</b></h4></div>
	<div class="panel-body">
	<?php
		session_start();
		if(!isset($_SESSION["berhasil_login2"]) and !isset($_SESSION["username2"]) and !isset($_SESSION["password2"])){
			die("<p style='color:red;'>Anda tidak mempunyai akses ke halaman ini.</p> <p>Silahkan <a href=\"login.php\">LOGIN</a></p>");
		}else if (!isset($_COOKIE["username2"])) {
			header("location:logout.php");	
		} else { ?>
		<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="#">Menu</a>
		</div>
		<ul class="nav navbar-nav">
		<li class="active"><a href="#">Home</a></li>
		<li class=""><a href="#">Cek Saldo</a></li>
		<li class=""><a href="#">Transfer</a></li>
		<li class=""><a href="#">Pembayaran</a></li>
		</ul>
		</div>
		</nav>
		<?php
			echo "<p>Login berhasil, Selamat Datang ".$_SESSION["username2"]."</p>";
			echo "<p><a href=\"logout.php\">Logout</a></p>";	
		}
		?>
	</div>
  </div>
</div>
<hr 100%>
<div style="text-align:center;font-family:Monotype Corsiva;">Copyright @ 2016 | Kurnia Agung Pamungkas | kagung13@gmail.com</div>
</body>
</html>
