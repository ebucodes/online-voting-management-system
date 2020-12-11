<?php ob_start();
include("../includes/session.php");
?>
<?php include("../includes/header.php"); ?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <!-- Navbar -->
    <?php include("../includes/navbar.php") ?>
    <!-- /.navbar -->

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
              <h1>
                Candidates
              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../dashboard/">Home</a></li>
                <li class="breadcrumb-item active">Candidates</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
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
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header bg-primary">
                  <h3 class="card-title">
                    <i class="fas fa-user-plus"></i>&nbsp;
                    Add New Candidates
                  </h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <button type="button" href="#addCandidate" data-toggle="modal" class="btn btn-primary bg-gradient-primary"><i class="fa fa-plus-circle"></i>&nbsp;New Candidate</button>
                  <?php include("addCandidate.php"); ?>
                </div>
                <!-- /.card -->
              </div>
              <div class="card">
                <div class="card-header bg-primary">
                  <h3 class="card-title"><i class="fas fa-tasks"></i> Manage Candidates</h3>
                  <div class="card-tools">
                  <a href="print.php" rel="noopener" target="_blank" class="btn btn-primary bg-gradient-primary"><i class="fa fa-print"></i> PRINT</a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                        include("../includes/config.php");
                        $query = $conn->query("SELECT * FROM candidate ORDER BY candidate_id");
                        while ($row = $query->fetch_array()) {
                          $candidate_id = $row["candidate_id"];
                        ?>
                          <td><?php echo $row["name"]; ?></td>
                          <td><?php echo $row["sex"]; ?></td>
                          <td><?php echo $row["position"]; ?></td>
                          <td><?php echo $row["department"]; ?></td>
                          <td> <img src="<?php echo '../images/'.$row["img"]; ?>" width="70" height="70" class="img-rounded"></td>
                          
                          <td>
                            <button type="button" rel="tooltip" title="Edit Candidate" href="#edit<?php echo $row["candidate_id"]; ?>" data-toggle="modal" class="btn bg-gradient-success"><i class="fas fa-user-edit"></i> Edit</button>
                            <?php include("editCandidate.php"); ?></td>

                          <td>
                            <button type="button" rel="tooltip" title="Delete Candidate" href="#del<?php echo $row["candidate_id"]; ?>" data-toggle="modal" class="btn bg-gradient-danger"><i class="fas fa-user-minus"></i> Delete</button>
                            <?php include("deleteCandidate.php"); ?>
                          </td>
                      </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
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