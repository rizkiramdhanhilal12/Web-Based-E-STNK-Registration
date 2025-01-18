<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!DOCTYPE html>
<html>
<head>
    <title>Navbar</title>
    <style>
        /* CSS untuk mengatur tampilan waktu */
        #clock {
            font-size: 18px; /* Ukuran font tampilan waktu */
            margin-right: 20px; /* Jarak kanan tampilan waktu dari elemen lainnya */
        }
    </style>
    <script>
        function updateClock() {
            var now = new Date();
            var day = now.toLocaleDateString('en-US', { weekday: 'long' });
            var time = now.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true });

            document.getElementById('clock').innerHTML = day + ' ' + time;
        }

        // Fungsi untuk memperbarui waktu setiap detik
        setInterval(updateClock, 1000);
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <span id="clock"></span> <!-- Ini adalah tempat tampilan waktu -->
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
</body>
</html>


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E-STNK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Polda Jabar</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Halaman Utama</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../forms/general.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pendaftaran STNK
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="../tables/simple.php" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Pendaftar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tables/data.html" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Eksport CSV
              </p>
            </a>
          </li>
          <li class="nav-header">Admin</li>
                  <li class="nav-item">
                    <a href="../examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daftar Pengguna</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Hilap Sandi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Benerkeun Sandi</p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href="../examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
            </ul>
          </li>
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
            <h1>Data Pendaftar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content tambah fitur pencarian-->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="s_keyword" id="s_keyword" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search" ></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="data"></div>
                <script>
                  $(document).ready(function(){
                    load_data();
                    function load_data(keyword)
                    {
                      $.ajax({
                        method:"POST",
                        url:"data.php",
                        data: {keyword:keyword},
                        success:function(hasil)
                        {
                          $('.data').html(hasil);
                        }
                      });
                    }
                    $('#s_keyword').keyup(function(){
                      var keyword = $("#s_keyword").val();
                      load_data(keyword);
                    });
                  });
              </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
