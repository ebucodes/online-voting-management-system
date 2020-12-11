<?php include("functions/signin.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ebuVote | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-dark">
      <div class="card-header text-center">
        <a href="index.php" class="h1"><b>ebu</b>VOTE</a>
      </div>
      <div class="card-body">
        <p>
          <?php if (isset($message)) {
            echo $message;
          } ?>
        </p>
        <p class="login-box-msg">Sign in to get started</p>

        <form action="signin.php" method="post">
          <div class="input-group mb-3">
            <input name="userlogin" type="text" class="form-control" placeholder="Enter email address / username" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input name="userpassword" type="password" class="form-control" placeholder="Enter password" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="login" class="btn btn-block bg-gradient-dark">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <br>
        <strong>Copyright &copy; 2020 - <?php echo date("Y"); ?> <a href="#">EbuCodes</a>.</strong><br>All rights reserved.
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/dist/js/adminlte.min.js"></script>
</body>

</html>