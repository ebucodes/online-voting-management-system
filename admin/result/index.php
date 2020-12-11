<?php ob_start();
include("../includes/session.php");
?>
<?php include("../includes/header.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include("../includes/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <?php include("../includes/sidebar.php") ?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Election Result</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Election Result</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <?php
                if (isset($_SESSION['error'])) {
                    echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
                    unset($_SESSION['error']);
                }
                if (isset($_SESSION['success'])) {
                    echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
                    unset($_SESSION['success']);
                }
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-eye"></i>&nbsp;
                                        View Election Results By Position
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="view.php" method="post">
                                        <div class="form-group">
                                            <select name="viewPosition" id="viewPosition" class="form-control custom-select" style="width:300px;" onchange="fetch_select(this.value);">
                                                <option hidden>Select Position</option>
                                                <option>President</option>
                                                <option>Vice President</option>
                                                <option>Secretary General</option>
                                                <option>Assistant Secretary General</option>
                                                <option>Financial Secretary</option>
                                                <option>Treasurer</option>
                                                <option>Director Of Sports</option>
                                                <option>Director Of Socials</option>
                                                <option>Director Of Health</option>
                                                <option>Director of Research</option>
                                                <option>PRO </option>
                                                <option>Provost</option>
                                            </select>&nbsp;
                                            <button type="submit" class="btn btn-success" name="view_position"><i class="fas fa-eye"></i> VIEW</button>
                                        </div>

                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <div class="col-md-6">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        RESET ELECTION VOTES
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                <a href="#reset" data-toggle="modal" class="btn btn-danger bg-gradient-danger"><i class="fas fa-sync"></i> RESET VOTES</a>
                                <?php include("resetModal.php"); ?>
                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.card -->

                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fas fa-poll"></i> Elections Results</h3>
                                    <div class="card-tools">
                                        <a href="print.php" rel="noopener" target="_blank" class="btn btn-primary bg-gradient-primary"><i class="fa fa-print"></i> PRINT</a>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
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
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include("../includes/footer.php"); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
<?php include("../includes/scripts.php"); ?>
</body>

</html>