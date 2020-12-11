<?php
ob_start();
include("includes/session.php"); ?>
<?php include("includes/config.php"); ?>
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
                            <h1 class="m-0"> Vote your preferred candidates </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <form action="yourVote.php" method="post">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- President -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h4 class="card-title">President</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'President'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="president" class="pres" id="pres" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
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
                            <!-- /.col-lg-6 -->
                            <!-- /.President -->

                            <!-- Vice President -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h4 class="card-title">Vice President</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Vice President'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="vice_president" class="vp" id="vp" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- President -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.Vice President -->

                            <!-- Secretary General -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-danger">
                                        <h4 class="card-title">Secretary General</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Secretary General'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="secretary" class="sec_gen" id="sec_gen" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- President -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.Secretary General -->

                            <!-- Assistant Secretary General -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-lime">
                                        <h4 class="card-title">Assistant Secretary General</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Assistant Secretary General'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="assistant_secretary" class="assistant_sec_gen" id="assistant_sec_gen" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- President -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.Assistant Secretary General -->

                            <!-- Financial Secretary -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-navy">
                                        <h4 class="card-title">Financial Secretary</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Financial Secretary'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="financial_secretary" class="fin_sec" id="fin_sec" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
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
                            <!-- /.col-lg-6 -->
                            <!-- /.Financial Secretary -->

                            <!-- Treasurer -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-purple">
                                        <h4 class="card-title">Treasurer</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Treasurer'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="treasurer" class="treasurer" id="treasurer" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
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
                            <!-- /.col-lg-6 -->
                            <!-- /.Treasurer -->

                            <!-- Director Of Socials -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-olive">
                                        <h4 class="card-title">Director Of Socials</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Director Of Socials'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="socials" class="socials" id="socials" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- President -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.Director Of Socials -->

                            <!-- Director Of Health -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-maroon">
                                        <h4 class="card-title">Director Of Health</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Director Of Health'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="health" class="health" id="health" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- President -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.Director Of Health -->

                            <!-- Director Of Research -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-lightblue">
                                        <h4 class="card-title">Director Of Research</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Director Of Research'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="research" class="research" id="research" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- President -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.Director Of Research -->

                            <!-- Director Of Sports -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-orange">
                                        <h4 class="card-title">Director Of Sports</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Director Of Sports'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="sports" class="sports" id="sports" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- President -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.Director Of Sports -->

                            <!-- Provost -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-indigo">
                                        <h4 class="card-title">Provost</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'Provost'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="provost" class="provost" id="provost" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- President -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.Provost -->

                            <!-- PRO -->
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header bg-secondary">
                                        <h4 class="card-title">PRO</h4>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Department</th>
                                                <th></th>
                                            </thead>
                                            <tbody class="card-text">
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM `candidate` WHERE `position` = 'PRO'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <td><img class="image-rounded" src="<?php echo 'admin/images/' . $fetch['img'] ?>" style="border-radius:6px;" height="50px" width="50px"></td>
                                                        <td><?php echo $fetch["name"]; ?></td>
                                                        <td><?php echo $fetch["sex"]; ?></td>
                                                        <td><?php echo $fetch["department"]; ?></td>
                                                        <td><button type="button" class="btn bg-gradient-primary">
                                                                <input type="checkbox" name="pro" class="pro" id="pro" value="<?php echo $fetch["candidate_id"]; ?>">
                                                                VOTE</button>
                                                        </td>
                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- PRO -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <!-- /.PRO -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->
        <center><button type="submit" name="vote" class="btn bg-gradient-primary"><i class="fas fa-vote-yea"></i>&nbsp;VOTE</button></center>
        </form>
        <!-- Main Footer -->
        <?php include("includes/footer.php"); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./assets/dist/js/demo.js"></script>
</body>
</body>

</html>