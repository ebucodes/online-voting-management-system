<?php
	include("config.php");
	session_start(); 
	//Query to store session
	if(!isset($_SESSION["admin_id"])){
		header("location:../index.php");
	}else{
		$session_id=$_SESSION['admin_id'];
		$admin_query = $conn->query("SELECT * FROM admin WHERE admin_id = '$session_id'") or die(mysqli_errno($conn));
		$admin_row = $admin_query->fetch_array();
	}
?>