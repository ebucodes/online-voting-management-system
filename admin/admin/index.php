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
                            <h1>Administrators</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Administrators</li>
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
              <h4><i class='icon fas fa-ban'></i> Error!</h4>
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
                            <div class="card card-maroon">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-plus-circle"></i>&nbsp;
                                        Add New Admin
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button type="button" href="#addAdmin" data-toggle="modal" class="btn btn-default"><i class="fa fa-plus-circle"></i> NEW ADMIN</button>
                                    <?php include("addAdmin.php"); ?>
                                </div>
                                <!-- /.card -->
                            </div> <!-- /.card -->

                            <div class="card card-maroon">
                                <div class="card-header">
                                    <h3 class="card-title">Manage Admin</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Date Registered</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                include("../includes/config.php");
                                                // Query to get Admin from database
                                                $query = $conn->query("SELECT * FROM admin ORDER BY admin_id ASC");
                                                while ($row = $query->fetch_array()) {
                                                    $admin_id = $row["admin_id"];
                                                ?>
                                                    <td><?php echo $row["name"]; ?></td>
                                                    <td><?php echo $row["username"]; ?></td>
                                                    <td><?php echo $row["password"]; ?></td>
                                                    <td><?php echo $row["date"]; ?></td>
                                                    <td>
                                                        <a rel="tooltip" title="Edit Administrators" href="#edit<?php echo $row["admin_id"]; ?>" data-toggle="modal" class="btn btn-success"><i class="fas fa-user-edit"></i> Edit</a>
                                                        <?php include("editAdmin.php"); ?>
                                                    </td>
                                                    <td> <a rel="tooltip" title="Delete Administrators" href="#del<?php echo $row["admin_id"]; ?>" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                                        <?php include("deleteAdmin.php"); ?>
                                                    </td>
                                            </tr>
                                        <?php
                                                }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Date Registered</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
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
    </div>
    <!-- ./wrapper -->
    <?php include("../includes/scripts.php"); ?>
</body>

</html>