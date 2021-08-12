<?php 
 include ('server.php');
if(isset($_SESSION['User'])) {
     header("Location: index2.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User2'])) {
     header("Location: index.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User3'])) {
     header("Location: StudentDashboard.php"); // redirects them to homepage
     exit; // for good measure
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <link rel="stylesheet" type="text/css" href="s1.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page bgs">
<div class="login-box">
  <div class="login-logo">
    <img src="dist/img/logo-removebg.png" style="height:150px;">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        <h3 class="login-box-msg text-primary">Login Form</h3>
      <form action="LC.php" method="post">
        <center><p><?php include('errors.php'); ?></p></center>
        <br>
        <div class="input-group mb-3">
          <input type="number" class="form-control" name="username" placeholder="School ID" value="<?php echo $username;?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" id="myInput">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" onclick="myFunc()"> 
              <label for="remember">
                Show Password
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="lc">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <hr>
      <center><!---<p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>-->
      <p class="mb-0">
        <a href="register.php" class="text-center">I have no account yet</a>
      </p></center>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<br>
<br>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

<script>
function myFunc() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>