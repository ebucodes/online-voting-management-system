<?php ob_start();
include("../includes/session.php");
?>

<?php include("../includes/header.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include("../includes/navbar.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <?php include("../includes/sidebar.php"); ?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-success">
                                <?php include("../includes/config.php");
                                $position = $_POST["viewPosition"];
                                $sort = $position;
                                $query = "SELECT * FROM candidate WHERE position = '$sort'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_array($result);
                                if ($row) {

                                    echo "<h4 class='card-header' align='center'> Election Result for " . $row['position'] . "</h4>";
                                } else {
                                    echo "<h4 class='card-header bg-danger' align='center'>You have not selected a candidate.<br>Select <strong>Back</strong> to choose a candidate</h4>";
                                } ?>
                                <div class="card-body">
                                    <a href="../result/" id="back" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Back</a>
                                    <br> <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                        <thead>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Sex</th>
                                            <th>Department</th>
                                            <th>Total Votes</th>
                                        </thead>
                                            <tbody>
                                            <?php
                                            $query = "SELECT * FROM candidate WHERE position = '$sort'";
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include("../includes/footer.php"); ?>
    </div>
    <!-- ./wrapper -->
    <?php include("../includes/scripts.php"); ?>
</body>

</html>