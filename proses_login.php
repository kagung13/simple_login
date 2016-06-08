<?php
session_start();

$username_admin = "admin";
$password_admin = "admin";

if(isset($_POST["username"]) and isset($_POST["password"])){
	if($_POST["username"]==$username_admin and $_POST["password"]==$password_admin){
		$_SESSION["berhasil_login"]=1;
		$_SESSION["username"]=$_POST["username"];
		$_SESSION["password"]=$_POST["password"];
		header("location:admin_area.php");	
	}else{
		echo "User dan Password Salah!";	
	}
}else{
	echo"Data Tidak Lengkap";	
}
?>