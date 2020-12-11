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
                    <i class="fas fa-users"></i> All Candidates
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
                        </div>
                        <div class="card-body table-responsive p-0">
                        <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Image</th>
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
                      </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                  </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>

</body>

</html>