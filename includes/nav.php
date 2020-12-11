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

          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="#" class="nav-link" style = "color:white;">USER: <?php echo $fetch['firstname']." ".$fetch['lastname']; ?> </a>
                  </li>
              </ul>

          </div>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="fas fa-user"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-xlg dropdown-menu-right">
                      <a href="#" class="dropdown-item">
                          <div class="media">
                              <div class="media-body">
                                  <p><strong>Name: </strong><?php echo $fetch["firstname"] . " " . $fetch["lastname"] ?></p>
                                  <p><strong>Department: </strong><?php echo $fetch["department"]; ?></p>
                                  </h3>
                                  <a href="./login.php" class="btn btn-default btn-danger">Sign out</a>
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
      </div>
  </nav>
  <!-- /.navbar -->