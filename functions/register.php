<?php
ob_start();
include("config.php");

if (isset($_POST["register"])) {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $sex = $_POST["sex"];
  $email_address = $_POST["email_address"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $password = md5($password);
  $department = $_POST["department"];
  $status = "Not Voted";
  $date = date("Y/m/d h:i:sa");

  // To store user's data with strong security
  $firstname = mysqli_real_escape_string($conn, $firstname);
  $lastname = mysqli_real_escape_string($conn, $lastname);
  $$sex = mysqli_real_escape_string($conn, $sex);
  $email_address = mysqli_real_escape_string($conn, $email_address);
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $department = mysqli_real_escape_string($conn, $department);

  // To check if the email address already exists
  $sql1 = "SELECT email_address FROM voters WHERE email_address='$email_address' ";
  $result1 = mysqli_query($conn, $sql1);
  $row1 = mysqli_num_rows($result1);
  // To check if the username already exists
  $sql2 = "SELECT username FROM voters WHERE username='$username'";
  $result2 = mysqli_query($conn, $sql2);
  $row2 = mysqli_num_rows($result2);

  if ($row1 > 0) {
    $message = "<div class='alert alert-danger alert-dismissible'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <h5><i class='fas fa-warning'></i> Email address already in use !!!</h5>		
        </div>" or die(mysqli_error($conn));
  } elseif ($row2 > 0) {
    $message = "<h3 class='card-text alert alert-danger'>Username already in use. Please try again.</h3>" or die(mysqli_error($conn));;
  } else {
    $query = "INSERT INTO voters (firstname, lastname, sex, email_address, username, password, department, status, date) VALUES ('$firstname','$lastname','$sex','$email_address','$username', '$password','$department', '$status','$date')" or die(mysqli_error($conn));;
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));;
    if ($result) {
      header("Location:signin.php");
    }
  }
}
