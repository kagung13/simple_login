<!DOCTYPE html>
<html>
<head>
  <title>I-Banking - Admin</title>
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
  <div class="panel panel-success">
	<div class="panel-heading"><h4><b>Logout Success</b></h4></div>
	<div class="panel-body">
	<?php
	session_start();

	unset($_SESSION["berhasil_login"]);
	unset($_SESSION["username"]);
	unset($_SESSION["password"]);

	session_destroy();
	echo "<p>Proses Logout Berhasil.</p>";
	echo "<p><a href=\"login.php\">Login</a></p>";
	?>
	</div>
  </div>
</div>
<hr 100%>
<div style="text-align:center;font-family:Monotype Corsiva;">Copyright @ 2016 | Kurnia Agung Pamungkas | kagung13@gmail.com</div>
</body>
</html>
