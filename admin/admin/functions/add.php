<?php
ob_start();
include("../../includes/session.php");
//Query to add new admin
if (isset($_POST["addAdmin"])) {
	$name = $_POST["name"];
	$username = $_POST["username"];
    $password = $_POST["password"];
    $date = date("Y/m/d h:i:sa");
    $sql = "SELECT username FROM admin WHERE username='$username'";
    
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	//To check if username already exists
	if (mysqli_num_rows($result) == 1) {
        $_SESSION['error'] = "Username already taken";
	} else {
		//To pass new admin details into the database
		$query = mysqli_query($conn, "INSERT INTO admin (name, username, password, date) VALUES('$name', '$username','$password','$date')");
		//Redirect to admin page if query is successful
        if ($query) {
            $_SESSION['success'] = "Admin successfully added";
        } else {
            $_SESSION['error'] = "Admin not added";
        }
	}
}
header("Location:../index.php");
?>