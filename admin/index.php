<?php
ob_start();
session_start();
include("./includes/config.php");

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = ("SELECT * FROM admin WHERE username =  '$username' AND password = '$password'") or die(mysqli_error($conn));
    $result = mysqli_query($conn, $query);
    $fetchArray = mysqli_fetch_array($result);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {
      
        $_SESSION["admin_id"] = $fetchArray["admin_id"];
        header("location:./dashboard/");
    } else {
        $message = "<h3 class='card-text alert alert-danger'>Wrong username or password combination</h3>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ebuVote | Log in </title>
    <?php include("includes/header.php"); ?>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-dark">
            <div class="card-header text-center">
                <a href="index.php" class="h1">ebuVOTE | Admin</a>
            </div>
            <div class="card-body">
                <p>
                    <?php if (isset($message)) {
                        echo $message;
                    } ?>
                </p>
                <p class="login-box-msg">Sign in to get started</p>

                <form action="index.php" method="post">
                    <div class="input-group mb-3">
                        <input name="username" type="text" class="form-control" placeholder="Enter username" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Enter password" required autofocus>
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

    <?php include("includes/scripts.php"); ?>
</body>

</html>