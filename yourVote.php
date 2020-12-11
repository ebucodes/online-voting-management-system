<?php
ob_start();
include("./includes/session.php"); ?>
<?php include("./includes/config.php"); ?>
<?php include("voteProcess.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/header.php"); ?>
<?php include("includes/scripts.php"); ?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include("includes/nav.php"); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <h1 class="m-0"> The candidates you voted for </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- President -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-info">
                                    <h4 class="card-title">President</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["president"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[president]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width:250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- President -->
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.President -->

                        <!-- Vice President -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-black">
                                    <h4 class="card-title">Vice President</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["vice_president"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vice_president]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width:250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- President -->
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Vice President -->

                        <!-- Secretary General -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-pink">
                                    <h4 class="card-title">Secretary General</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["secretary"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[secretary]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?> " style="width:250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- President -->
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Secretary General -->

                        <!-- Assistant Secretary General -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-lime">
                                    <h4 class="card-title">Assistant Secretary General</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["assistant_secretary"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[assistant_secretary]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width:250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- President -->
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Assistant Secretary General -->

                        <!-- Financial Secretary -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-navy">
                                    <h4 class="card-title">Financial Secretary</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["financial_secretary"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[financial_secretary]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width: 250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Financial Secretary -->

                        <!-- Treasurer -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-purple">
                                    <h4 class="card-title">Treasurer</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["treasurer"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[treasurer]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width: 250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Treasurer -->

                        <!-- Director Of Socials -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-olive">
                                    <h4 class="card-title">Director Of Socials</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["socials"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[socials]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width: 250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Director Of Socials -->

                        <!-- Director Of Health -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-maroon">
                                    <h4 class="card-title">Director Of Health</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["health"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[health]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width: 250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- President -->
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Director Of Health -->

                        <!-- Director Of Research -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-lightblue">
                                    <h4 class="card-title">Director Of Research</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["research"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[research]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width: 250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- President -->
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Director Of Research -->

                        <!-- Director Of Sports -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-orange">
                                    <h4 class="card-title">Director Of Sports</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["sports"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sports]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width: 250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Director Of Sports -->

                        <!-- Provost -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-indigo">
                                    <h4 class="card-title">Provost</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["provost"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[provost]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width: 250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.Provost -->

                        <!-- PRO -->
                        <div class="col-md-3">

                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <h4 class="card-title">PRO</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <?php
                                    if ($_SESSION["pro"]) {
                                        $query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pro]'";
                                        $result = mysqli_query($conn, $query);
                                        while ($fetch = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class="text-center">
                                                <img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="width: 250px;">
                                            </div>
                                            <h3 class="profile-username text-center"><?php echo $fetch["name"]; ?></h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Sex</b> <a class="float-right"><?php echo $fetch["sex"]; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Department</b> <a class="float-right"><?php echo $fetch["department"]; ?></a>
                                                </li>
                                            </ul>

                                    <?php
                                        }
                                    } else {
                                        echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- PRO -->
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- /.PRO -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->
        <center>
        <button type="button" href="#confirmVote" data-toggle="modal" class="btn btn-primary bg-gradient-primary"><i class="fas fa-vote-yea"></i>&nbsp;SUBMIT</button>&nbsp;&nbsp;
        <?php include("confirmVoteModal.php"); ?>
        <a href="vote.php" class="btn bg-gradient-danger"><i></i>BACK</a>
    </center>
    
        </form>
        <!-- Main Footer -->
        <?php include("includes/footer.php"); ?>
    </div>
    <!-- ./wrapper -->

</body>
</body>

</html>