<?php
	include("includes/config.php");
	session_start();
	session_destroy();
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[president]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[vice_president]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[secretary]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[assistant_secretary]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[financial_secretary]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[treasurer]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[socials]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
        $conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[health]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[research]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[sports]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[pro]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("INSERT INTO `votebank` VALUES('', '$_SESSION[provost]', '$_SESSION[voter_id]')") or die(mysqli_error($conn));
		$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voter_id` = '$_SESSION[voter_id]'") or die(mysqli_error($conn));
		header("Location:congratulations.php");
		
?> 