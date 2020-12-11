<?php
ob_start();
include("../includes/config.php");
include("../includes/session.php");
// Add New Candidate
if (isset($_POST["addCandidate"])) {
	$name = $_POST["name"];
	$sex = $_POST["sex"];
	$position = $_POST["position"];
	$department = $_POST["department"];
	$image = $_FILES["image"]["name"];
	if(!empty($filename)){
		move_uploaded_file($_FILES['images']['tmp_name'], '../images/'.$image);	
	}
	$date = date("Y/m/d");
// Query to insert new data into database
	$query = "INSERT INTO candidate (name,sex,position,department,img,date) VALUES ('$name','$sex','$position','$department','$image','$date')";
	$result = mysqli_query($conn, $query);

	if ($result) {
		$_SESSION['success'] = "Candidates successfully added";
	} else {
		$_SESSION['error'] = "Candidates not added";
	}
}
header("Location:../candidate/");
?>

