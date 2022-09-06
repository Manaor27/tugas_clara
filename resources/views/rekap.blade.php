
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rekap Data</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="style/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="style/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light"><b>Padukuhan Sumberan</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach($rt as $r)
              <li class="nav-item">
                <a href="rt{{$r->rt}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RT {{$r->rt}}</p>
                </a>
              </li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item active">
            <a href="rekap" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Rekap Data
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rekap RT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active">Rekap RT</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        @foreach($nilai as $r)
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">RT {{$r->rt}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Keterangan</th>
                      <th style="width: 30px">Jumlah</th>
                      <th>Progres</th>
                      <th style="width: 40px">Persentase</th>
                    </tr>
                  </thead>
                  @php
                    $no = 1;
                  @endphp
                  <tbody>
                    <tr>
                      <td>Balita (0-5)</td>
                      <td>{{$r->balita}}</td>
                      <td>
                        <div class="progress progress-xs">
                            @php
                            $total = $r->balita + $r->anak + $r->remaja + $r->dewasa + $r->lansia;
                            $balita = $r->balita/$total*100;
                            $anak = $r->anak/$total*100;
                            $remaja = $r->remaja/$total*100;
                            $dewasa = $r->dewasa/$total*100;
                            $lansia = $r->lansia/$total*100;
                            @endphp
                          <div class="progress-bar progress-bar-danger" style="width: {{$balita}}%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">{{$balita}}%</span></td>
                    </tr>
                    <tr>
                      <td>Anak (6-12)</td>
                      <td>{{$r->anak}}</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: {{$anak}}%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">{{$anak}}%</span></td>
                    </tr>
                    <tr>
                      <td>Remaja (13-17)</td>
                      <td>{{$r->remaja}}</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: {{$remaja}}%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">{{$remaja}}%</span></td>
                    </tr>
                    <tr>
                      <td>Dewasa (18-49)</td>
                      <td>{{$r->dewasa}}</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: {{$dewasa}}%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">{{$dewasa}}%</span></td>
                    </tr>
                    <tr>
                      <td>Lansia (>50)</td>
                      <td>{{$r->lansia}}</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: {{$lansia}}%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">{{$lansia}}%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          @endforeach
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="style/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="style/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="style/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="style/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="style/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="style/dist/js/pages/dashboard.js"></script>
</body>
</html>