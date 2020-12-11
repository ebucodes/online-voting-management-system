<!-- Delete candidate -->
<?php
ob_start();
include("../includes/config.php");
include("../includes/session.php");
//Query to delete candidate
if (isset($_POST["deleteCandidate"])) {
    $id = $_GET["candidate_id"];
    $query = "DELETE FROM candidate WHERE candidate_id='$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['success'] = "Candidate successfully deleted";
    } else {
        $_SESSION['error'] = $conn->error;
    }
}
header("Location:../candidate/");
?>

