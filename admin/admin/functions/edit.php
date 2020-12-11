<?php
ob_start();
include("../../includes/session.php");
if (isset($_POST["editAdmin"])) {
    $id = $_GET["admin_id"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query= mysqli_query($conn, "UPDATE admin SET name='$name', username='$username', password='$password' WHERE admin_id='$id'");
    if ($query) {
        $_SESSION['success'] = "Admin successfully edited";
    } else {
        $_SESSION['error'] = "Admin not edited";
    }
}
header("Location:../index.php");