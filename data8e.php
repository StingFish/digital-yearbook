<?php
    session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>window.location='select.php';</script>";
    }//eto yung bookmark
    isset($_SESSION['User']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrative Officers</title>
  <link rel="stylesheet" type="text/css" href="s1.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-gradient-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/logo-removebg.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Registrar Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['User']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="job1.php" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Job Hirings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Message
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data7.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Administrative Officers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data8.php" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Academic Affairs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data9.php" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Graduates
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data0.php" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Milestones & Activities
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#modal" class="nav-link" data-target="#modal" data-toggle="modal">
              <i class="nav-icon fas fa-times text-light"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Academic Affairs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Member</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="f1" class="form-control" id="exampleInputFile" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="p1">Last Name</label>
                    <input type="text" name="Lname" class="form-control" id="p1" placeholder="Last Name" required>
                  </div>
                  <div class="form-group">
                    <label for="p1">First Name</label>
                    <input type="text" name="Fname" class="form-control" id="p1" placeholder="First Name" required>
                  </div>
                  <div class="form-group">
                    <label for="p1">Middle Initial</label>
                    <input type="text" name="Mname" class="form-control" id="p1" placeholder="Middle Initial" required>
                  </div>
                  <div class="form-group">
                    <label for="p1">Position</label>
                    <input type="text" name="position" class="form-control" id="p1" placeholder="Position" required>
                  </div>
                  <div class="form-group">
                    <label for="p1">Batch Year</label>
                    <input type="number" name="year" min="2018" max="<?php echo $year; ?>" class="form-control" id="p1" placeholder="Batch Year" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit1" class="btn btn-primary">Add</button>
                </div>
              </form>
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
  <div class="modal fade" id="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
              <h4 class="modal-title">Logout</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5>Are you sure you want to end your session?</h5>
            </div>
            <div class="modal-footer">
              <div class="btn-group">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <button type="button" id="butt" class="btn btn-primary">Yes</button>
            </div>
          </div>
            <script type="text/javascript">
              document.getElementById('butt').onclick = function() {
              window.location="logout.php";
            };
            </script>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 6.0
    </div>
    <strong>Copyright &copy; 2021.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
</script>
</body>
</html>

<?php
      $db=mysqli_connect('localhost','root','','yearbook');

      if(isset($_POST["submit1"])){
         $image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
         $firstName = mysqli_real_escape_string($db, $_POST['Fname']);
         $midName = mysqli_real_escape_string($db, $_POST['Mname']);
         $lastName = mysqli_real_escape_string($db, $_POST['Lname']);
         $course = mysqli_real_escape_string($db, $_POST['position']);
         $year = mysqli_real_escape_string($db, $_POST['year']);

         // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM tab3 WHERE fname='$firstName' AND mname='$midName' AND lname='$lastName' AND position='$course' AND year='$year' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['fname'] === $firstName AND $user['mname'] === $midName AND $user['lname'] === $lastName AND $user['year'] === $year) {
       echo "<script>alert('Member detail already exists.');window.location='data8e.php';</script>";
    }
  }
  else{
         $user_check_query = "INSERT INTO tab3 (image1, fname, mname, lname, position, year) VALUES ('$image', '$firstName', '$midName', '$lastName', '$course', '$year')";
         $result = mysqli_query($db, $user_check_query);
         echo "<script>window.location='data8.php';alert('Added Successfully!');</script>";
       }
      }
?>