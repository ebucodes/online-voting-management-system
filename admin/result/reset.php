<?php
ob_start();
include("../includes/session.php");
include("../includes/config.php");

$query = "DELETE FROM votebank";
$result = mysqli_query($conn,$query);

if ($result) {
    $_SESSION['success'] = "Votes reset successfully";
    $conn->query("UPDATE `voters` SET `status` = 'Not Voted'") or die(mysqli_error($conn));
}
 else {
    $_SESSION['error'] = "Something went wrong in reseting";
}

header('location: index.php');

