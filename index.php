<?php include("includes/header.php"); ?>
<?php include("includes/scripts.php"); ?>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark">

      <div class="container">
        <a href="index.php" class="navbar-brand">
          <img src="img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">ebuVote</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-body">
                <div class="card-header">
                  <h5 class="card-title m-0">To Get Started</h5>
                </div>
<div class="card-body">
<p class="card-text"><a href="register.php" class="btn btn-lg bg-gradient-dark btn-flat"> REGISTER </a>
<a href="signin.php" class="btn btn-lg bg-gradient-dark btn-flat"> SIGN IN </a></p>
</div>
                  
                </div>
              </div><!-- /.card -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card card-dark card-outline">
                <div class="card-header">
                  <h5 class="card-title m-0">Welcome to ebuVote</h5>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><strong>FEATURES</strong></h4>
                  <br>
                  <ul class="list-group">
                    <li class="list-group-item">
                      1. You need to be a member to login and use the application. You need to register a new member to use this web application.
                    </li>
                    <li class="list-group-item">
                      2. A user is eligible to one voting previledges i.e, a user can vote only one.
                    </li>
                    <li class="list-group-item">
                      3. Only verified admin can access the Admin Section.
                    </li>
                    <li class="list-group-item">
                      4. Administrators can add, edit or delete candidates and fellow admins.
                    </li>
                    <li class="list-group-item">
                      5. Administrators can view the total number of registered voters, and filter the users who voted and those who did not vote.
                    </li>
                    <li class="list-group-item">
                      6. The election result can be print and saved in PDF format.
                    </li>
                  </ul>
                  <br>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card card-dark card-outline">
                <div class="card-header">
                  <h5 class="card-title m-0">Welcome to ebuVote</h5>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><strong>LANGUAGES</strong></h4>
                  <br>
                  <ul class="list-group">
                    <li class="list-group-item">
                      1. HTML 5.
                    </li>
                    <li class="list-group-item">
                      2. CSS 3.
                    </li>
                    <li class="list-group-item">
                      3. JavaScript.
                    </li>
                    <li class="list-group-item">
                      4. Bootstrap.
                    </li>
                    <li class="list-group-item">
                      5. PHP 7.
                    </li>
                    <li class="list-group-item">
                      6. MySQL (Procedural).
                    </li>
                  </ul>
                  <br>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <?php include("includes/footer.php"); ?>
  </div>
  <!-- ./wrapper -->
</body>

</html>