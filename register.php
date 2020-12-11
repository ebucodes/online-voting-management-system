<?php include("functions/register.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ebuVote| Registration Page </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-dark">
      <div class="card-header text-center">
        <a href="index.php" class="h1"><b>ebu</b>Vote</a>
      </div>
      <div class="card-body">
        <p><?php if (isset($message)) {
              echo $message;
            } ?></p>
        <h4 class="login-box-msg">Register</h4>
        <form method="POST" action="register.php">
          <div class="input-group mb-3">
            <input type="text" name="firstname" class="form-control" placeholder="Firstname" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" name="lastname" class="form-control" placeholder="Lastname" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <select name="sex" id="gender" class="form-control custom-select" required autofocus>
              <option hidden>Select Gender</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email_address" class="form-control" placeholder="Email address" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="form-label-group input-group mb-3">
            <select name="department" id="department" class="form-control custom-select" required autofocus>
              <option hidden>Select Department</option>
              <option>Public Health (PUH)</option>
              <option>Optometry (OPT)</option>
              <option>Prosthetic and Orthopedics (POT)</option>
              <option>Dental Technology (DNT)</option>
              <option>Biomedical Technology (BMT)</option>
              <option>Environmental Health Science (EHS)</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-building"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button name="register" class="btn btn-block bg-gradient-dark" type="submit">Register</button>
              <br>
            </div>
            <!-- /.col -->
          </div>
          <p class="card-text">Already a member? <a href="signin.php">Sign In</a></p>
          <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="#">EbuCodes</a>.</strong> All rights reserved.
        </form>

      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/dist/js/adminlte.min.js"></script>
</body>

</html>