<?php
ob_start();
session_start();
include("config.php");

if (isset($_POST["login"])) {
  $status1 = "Not Voted";
  $status2 = "Voted";

  $userlogin = $_POST["userlogin"];
  $userpassword = md5($_POST["userpassword"]);
  //Query to check if Voter ID is valid to vote 
  $query = ("SELECT * FROM voters WHERE email_address ='$userlogin' OR username='$userlogin' AND password ='$userpassword' AND status = '$status1'") or die(mysqli_error($conn));
  $result = mysqli_query($conn, $query);
  $numRows = mysqli_num_rows($result);


  // Query to check if user has already voted once
  $voteQuery = "SELECT * FROM voters WHERE email_address ='$userlogin' OR username='$userlogin' AND status = '$status2'";
  $voteResult = mysqli_query($conn, $voteQuery);
  $voteRow = mysqli_num_rows($voteResult);

  if ($numRows > 0) {
    
    $fetchArray = mysqli_fetch_array($result);
    $_SESSION["voter_id"] = $fetchArray["voter_id"];
    header("Location: vote.php");
  } elseif ($voteRow == 1) {
    // Error message for user that has voted
    $message = "<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <h5><i class='icon fas fa-ban'></i> <b>User already voted.</b></h5><br> You Can Only Vote Once		
  </div>";
  }
  // Error message if Voter ID is not registered in use
  else {
    $message = "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h5><i class='icon fas fa-ban'></i> <b>Voter details not in database. Register to get started.</b></h5>		
      </div>";
  }
}
