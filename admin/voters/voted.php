<?php
ob_start();
include("../includes/session.php");
?>
<?php include("../includes/header.php") ?>
<?php include("scripts.php") ?>

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
                            <h1>Voters</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Voters</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-user-plus"></i>&nbsp;
                                        Add New Voter
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="../../register.php" class="btn btn-warning"><i class="fas fa-user-plus"></i>&nbsp;NEW VOTER</a>
                                </div>
                                <!-- /.card -->
                            </div> <!-- /.card -->

                        </div>
                        <!-- /.col (left) -->
                        <div class="col-md-6">
                            <div class="card card-warning">
                                <?php
                                include("../includes/config.php");
                                // Query for All Voters
                                $allVoters = "SELECT COUNT(*) as total FROM voters";
                                $allResult = mysqli_query($conn, $allVoters);
                                $allFetch = mysqli_fetch_array($allResult);
                                // Query for Voted
                                $votedQuery = "SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'";
                                $votedResult = mysqli_query($conn, $votedQuery);
                                $votedFetch = mysqli_fetch_array($votedResult);
                                // Query for Not Voted
                                $NotVotedQuery = "SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Not Voted'";
                                $NotVotedResult = mysqli_query($conn, $NotVotedQuery);
                                $NotVotedFetch = mysqli_fetch_array($NotVotedResult);
                                ?>
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-users"></i>&nbsp;
                                        View Voters Details
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="../voters/" class="btn bg-gradient-warning"><i class="fa fa-users"></i> All Voters (<?php echo $allFetch['total'] ?>)</a>
                                    <a href="voted.php" class="btn bg-gradient-warning"><i class="fa fa-users"></i> Voted (<?php echo $votedFetch['total'] ?>)</a>
                                    <a href="notVoted.php" class="btn bg-gradient-warning"><i class="fa fa-users"></i> Not Voted (<?php echo $NotVotedFetch['total'] ?>)</a>

                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col (right) -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-users"></i>&nbsp;&nbsp;View All Voters Total List</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-sm">
                                        <thead>
                                                <tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Department</th>
                                                    <th style="width: 40px">Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT * FROM voters WHERE status = 'Voted'";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $voter_id = $row["voter_id"];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row["firstname"]; ?></td>
                                                        <td><?php echo $row["lastname"]; ?></td>
                                                        <td><?php echo $row["department"]; ?></td>
                                                        <?php if ($row["status"] == 'Voted') {
                                                            echo "<td><span class='badge bg-success'>" . $row['status'] . "</span></td>";
                                                        } else {
                                                            echo "<td><span class='badge bg-danger'>" . $row['status'] . "</span></td>";;
                                                        } ?>
                                                        <td>
                                                            <button type="button" rel="tooltip" title="View Candidate" href="#view<?php echo $row["voter_id"]; ?>" data-toggle="modal" class="btn bg-gradient-warning">View More <i class="fas fa-arrow-circle-right"></i></button>
                                                            <?php include("viewVoter.php"); ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include("footer.php"); ?>
    </div>
    <!-- ./wrapper -->
</body>

</html>