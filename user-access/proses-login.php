<?php

	include_once("../function/koneksi.php");
	include_once("../function/helper.php");
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$query = mysqli_query($conn, "SELECT * FROM account WHERE username='$username' AND password='$password'");
	
	if(mysqli_num_rows($query) == 0){
		header("location:". BASE_URL . "index.php?page=login&notif=true");
	}else{
	
		$row = mysqli_fetch_assoc($query);
		
		session_start();
		
		$_SESSION['id_user'] = $row['id_user'];
		//$_SESSION['nama'] = $row['nama'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['status_login'] = true;
		
		if(isset($_SESSION["status_login"])){
			unset($_SESSION["status_login"]);
			header("location: ".BASE_URL."index.php?page=home");
		}else{
			header("location: ".BASE_URL."index.php?page=home");
		}
	}