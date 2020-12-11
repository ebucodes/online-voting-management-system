  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" data-toggle="dropdown" href="#">

        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-xlg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="../images/avatar1.png" width="70" class="user-image img-circle">
              <div class="media-body">
                <p><strong>Name: </strong><?php echo $admin_row["name"]; ?></p>
                </h3>
                <a href="../signout.php" class="btn btn-default btn-danger">Sign out</a>
              </div>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->