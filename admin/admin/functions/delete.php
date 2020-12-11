<?php
ob_start();
include("../../includes/session.php");
// Query to delete admin
if (isset($_POST["deleteAdmin"])) {
	$id = $_GET["admin_id"];
	$query = mysqli_query($conn, "DELETE FROM admin WHERE admin_id='$id'");
	if ($query) {
		//To read message either successful or not
		$_SESSION['success'] = "Admin successfully deleted";
	} else {
		$_SESSION['error'] = "Admin not deleted";
	}
}
header("Location:../index.php");
