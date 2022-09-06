
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RT {{$rt->rt}} KK {{$kk->kk}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="style/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach($semua as $s)
              <li class="nav-item">
                <a href="rt{{$s->rt}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RT {{$s->rt}}</p>
                </a>
              </li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
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
            <h1 class="m-0">RT {{$rt->rt}} KK {{$kk->kk}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item"><a href="rt{{$rt->rt}}">RT {{$rt->rt}}</a></li>
              <li class="breadcrumb-item active">KK {{$kk->kk}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Warga RT {{$rt->rt}} KK {{$kk->kk}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                <a href="tambahData{{$rt->id}}{{$kk->id}}" type="button" class="btn btn-block btn-outline-success btn-sm">Tambah Data Anggota Keluarga</a>
                <br>
                  <thead>
                    <tr>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">Nama</th>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">NIK No.KTP</th>
                      <th colspan="2" style="text-align: center; vertical-align: middle;">Tempat Tanggal Lahir</th>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">Status Dalam Keluarga</th>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">L/P</th>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">Status Perkawinan</th>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">Gol. Darah</th>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">Agama</th>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">Pendidikan Terakhir</th>
                      <th colspan="2" style="text-align: center;">Nama Orang Tua</th>
                      <th rowspan="2" style="vertical-align: middle; text-align: center;">Ket</th>
                    </tr>
                    <tr>
                        <th style="text-align: center;">Tempat</th>
                        <th style="text-align: center;">Tanggal Lahir</th>
                        <th style="text-align: center;">Ayah</th>
                        <th style="text-align: center;">Ibu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $dat => $d)
                    <tr>
                        <td><a href="/edit{{$rt->id}}{{$kk->id}}{{$d->id}}">{{$d->nama}}</a></td>
                        <td>{{$d->nik}}</td>
                        <td>{{$d->tempat_lahir}}</td>
                        <td>{{$d->tanggal_lahir}}</td>
                        <td>{{$d->status_keluarga}}</td>
                        <td>{{$d->jekel}}</td>
                        <td>{{$d->status_kawin}}</td>
                        <td>{{$d->goldar}}</td>
                        <td>{{$d->agama}}</td>
                        <td>{{$d->pendidikan}}</td>
                        <td>{{$d->nama_ayah}}</td>
                        <td>{{$d->nama_ibu}}</td>
                        <td>{{$d->ket}}</td>
                    </tr>
                    @endforeach
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
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="style/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="style/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="style/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="style/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="style/plugins/jszip/jszip.min.js"></script>
<script src="style/plugins/pdfmake/pdfmake.min.js"></script>
<script src="style/plugins/pdfmake/vfs_fonts.js"></script>
<script src="style/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="style/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="style/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="style/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="style/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
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