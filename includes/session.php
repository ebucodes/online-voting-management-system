<?php
include("config.php");
session_start();
//Query to store session
if (!isset($_SESSION["voter_id"])) {
	header("Location:signin.php");
} else {
	$session_id = $_SESSION["voter_id"];
	$query = ("SELECT * FROM voters WHERE voter_id = '$session_id'") or die(mysqli_errno($conn));
	$result = mysqli_query($conn, $query);
	$fetch = mysqli_fetch_array($result);
}
