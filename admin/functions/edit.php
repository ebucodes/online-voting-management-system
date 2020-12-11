<?php
ob_start();
include("../includes/config.php");
include("../includes/session.php");
if (isset($_POST["editCandidate"])) {
    $id = $_GET["candidate_id"];
    $name = $_POST["name"];
    $sex = $_POST["sex"];
    $position = $_POST["position"];
    $department = $_POST["department"];
    $image = $_FILES["image"]["name"];
    $target = "images/".basename($image);
    $image = $_FILES["image"]["name"];
	if(!empty($filename)){
		move_uploaded_file($_FILES['images']['tmp_name'], '../images/'.$image);	
	}


    $query = "UPDATE candidate SET name='$name', sex='$sex', position='$position', department='$department',img='$image' WHERE candidate_id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
         $_SESSION['success'] = "Candidates Edited Successfully";

    } else{
         $_SESSION['error'] = "Candidates Not Edit";
        
    }
}
header("Location:../candidate/")
?>
