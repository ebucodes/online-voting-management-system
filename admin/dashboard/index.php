<?php
ob_start();
include("../includes/session.php");
?>
<?php include("../includes/header.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include("../includes/navbar.php") ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <?php include("../includes/sidebar.php") ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="../dashboard/">Home</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <?php
                  $query = "SELECT * FROM candidate";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_num_rows($result);
                  echo "<h3>" . $row . "</h3>";
                  ?>
                  <p>Total No. of Candidates</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="../candidate/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <?php
                  $query = "SELECT * FROM voters";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_num_rows($result);
                  echo "<h3>" . $row . "</h3>";
                  ?>
                  <p>Total No. of Voters</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="../voters/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">

                <div class="inner">
                  <h3>1</h3>
                  <p>Election Result</p>

                </div>
                <div class="icon">
                  <i class="fas fa-table"></i>
                </div>
                <a href="../result/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <?php
                  $query = "SELECT * FROM admin";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_num_rows($result);
                  echo "<h3>" . $row . "</h3>";
                  ?>
                  <p>Administrators</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="../admin/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->


        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
      </a>
    </div>
    <!-- /.content-wrapper -->
    <?php include("../includes/footer.php"); ?>
  </div>
  <!-- ./wrapper -->
  <?php include("../includes/scripts.php"); ?>
</body>

</html>