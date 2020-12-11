<?php ob_start();
include("../includes/session.php");
?>
<?php include("../includes/config.php"); ?>
<?php include("../includes/header.php"); ?>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                    <i class="fas fa-table"></i> Election Result
                        <small class="float-right">Date: <?php echo date("d/m/Y"); ?></small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>

            <!-- Table row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Elections Results</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <center>
                                <h3 class="card-header">President</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'President'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- President -->
                            <center>
                                <h3 class="card-header">Vice President</h3>
                            </center>
                            <!-- /.President -->

                            <!-- Vice President -->
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Vice President'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Vice President -->

                            <!-- Secretary General -->
                            <center>
                                <h3 class="card-header">Secretary General</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Secretary General'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Secretary General -->

                            <!-- Assistant Secretary General -->
                            <center>
                                <h3 class="card-header">Assistant Secretary General</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Assistant Secretary General'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Assistant Secretary General -->

                            <!-- Financial Secretary -->
                            <center>
                                <h3 class="card-header">Financial Secretary</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Financial Secretary'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Financial Secretary -->

                            <!-- Treasurer -->
                            <center>
                                <h3 class="card-header">Treasurer</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Treasurer'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Treasurer -->

                            <!-- Director Of Socials -->
                            <center>
                                <h3 class="card-header">Director Of Socials</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Director Of Socials'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Director Of Socials -->

                            <!-- Director Of Health -->
                            <center>
                                <h3 class="card-header">Director Of Health</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Director Of Health'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Director Of Health -->

                            <!-- Director Of Research -->
                            <center>
                                <h3 class="card-header">Director Of Research</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Director Of Research'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Director Of Research -->

                            <!-- Director Of Sports -->
                            <center>
                                <h3 class="card-header">Director Of Sports</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Director Of Sports'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Director Of Sports -->

                            <!-- Provost -->
                            <center>
                                <h3 class="card-header">Provost</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'Provost'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.Provost -->

                            <!-- PRO -->
                            <center>
                                <h3 class="card-header">PRO</h3>
                            </center>
                            <table class="table table-bordered">
                                <thead>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Department</th>
                                    <th>Total Votes</th>
                                </thead>

                                <tbody class="card-text">
                                    <?php
                                    $query = "SELECT * FROM candidate WHERE position = 'PRO'";
                                    $result = mysqli_query($conn, $query);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $candidate_id = $fetch["candidate_id"];
                                        $query1 = "SELECT COUNT(*) as total FROM `votebank` WHERE candidate_id = '$candidate_id'";
                                        $result1 = mysqli_query($conn, $query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <tr>
                                            <td><img class="image-rounded" src="<?php echo '../images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                            <td><?php echo $fetch["name"]; ?></td>
                                            <td><?php echo $fetch["sex"]; ?></td>
                                            <td><?php echo $fetch["department"]; ?></td>
                                            <td>
                                                <h6><?php echo $fetch1["total"]; ?></h6>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.PRO -->

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>