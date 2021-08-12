<?php
    session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>window.location='LC.php';</script>";
    }
    isset($_SESSION['User']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Academic Affairs</title>
  <link rel="icon" type="text/css" href="dist/img/logo-removebg.png">
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
      <span class="brand-text font-weight-light">Admin Panel</span>
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

    <?php
      //just add form tag here to use the search function
      $db = mysqli_connect('localhost', 'root', '', 'yearbook');
      $year = date("Y");

        if(isset($_POST['search'])){
        $searchKey=$_POST['search'];
        $name= $_POST['nam'];

        $sql = "SELECT * from tab3 where lname LIKE '%$name%' AND year LIKE '%$searchKey%' ORDER BY lname, year";
        $result = mysqli_query($db,$sql);
        $rows = mysqli_num_rows($result);
      }else{
        $sql = "SELECT * from tab3 ORDER BY lname, year";
        $searchKey="";
        $name="";
      }
        $result = mysqli_query($db,$sql);
        $rows = mysqli_num_rows($result);
        ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-gradient-primary">
                <h3 class="card-title">Academic Affairs</h3>
              </div>

                <form action="" method="post" style="margin: 0 !important;">
              <div class="input-group mb-3" style="margin: 5px;">
                  <input type="text" class="rounded-0" name="nam" placeholder="Search last name..." style="width:150px;border:1px solid;" value="<?php echo $name; ?>">
                  <span class="input-group-append">
                    <button type="button1" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              <div class="input-group mb-3" style="margin: 5px;">
                  <input type="number" name="search" placeholder="Sort year by..." min="2018" max="<?php echo $year;?>" class="rounded-0" value="<?php echo $searchKey; ?>" style="width:150px;border:1px solid;">
                  <span class="input-group-append">
                    <button type="button1" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
               </form> 
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Image</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Initial</th>
                    <th>Position</th>
                    <th>Year</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                    <th>Image</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Initial</th>
                    <th>Position</th>
                    <th>Year</th>
                  </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  if (empty($rows)) {
          echo "<tr>";
          echo "<td colspan='6'><center>No results found.</center></td>";
          echo "</tr>";
          }
          else{
          while($row = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td><center>".'<img class="image-official" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'" style="height:80px;"/>'."</center></td>";
          echo "<td>" . $row['lname'] . "</td>";
          echo "<td>" . $row['fname'] . "</td>";
          echo "<td>" . $row['mname'] . "</td>";
          echo "<td>" . $row['position'] . "</td>";
          echo "<td>" . $row['year'] . "</td>";
          echo "</tr>";
        }
      }
          echo "</tbody>";
          echo "</table>";
          echo "<br>";
        mysqli_close($db);
        ?>
                  
                  </tbody>
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
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
