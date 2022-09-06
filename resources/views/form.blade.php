
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Tambah Data</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="style/plugins/fontawesome-free/css/all.min.css">
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
            <h1 class="m-0">Form Tambah Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item"><a href="rt{{$rt->rt}}">RT {{$rt->rt}}</a></li>
              <li class="breadcrumb-item"><a href="kk{{$kk->id}}">KK {{$kk->kk}}</a></li>
              <li class="breadcrumb-item active">Form Tambah Data</li>
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

          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data Anggota Keluarga</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="simpan{{$rt->id}}{{$kk->id}}">
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ old('nama') }}" required>
                      @error('nama')
                        <p class="text-danger"><b>Nama wajib diisi!</b></p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIK No.KTP</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="NIK No.KTP" name="nik" value="{{ old('nik') }}" required>
                      @error('nik')
                        <p class="text-danger"><b>NIK No.KTP wajib diisi!</b></p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="string" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                      @error('tempat_lahir')
                        <p class="text-danger"><b>Tempat Lahir wajib diisi!</b></p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" max="<?php echo date('Y-m-d'); ?>" required>
                      @error('tanggal_lahir')
                        <p class="text-danger"><b>Tanggal Lahir wajib diisi!</b></p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status Dalam Keluarga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Status Dalam Keluarga" name="status_keluarga" value="{{ old('status_keluarga') }}" required>
                      @error('status_keluarga')
                        <p class="text-danger"><b>Status Dalam Keluarga wajib diisi!</b></p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2">Jenis Kelamin</label>
                    <div class="col-sm-2" style="padding: 0em 2em">
                        <input class="form-check-input" type="radio" name="jekel" value="L">
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="col-sm-2" style="padding: 0em 2em">
                        <input class="form-check-input" type="radio" name="jekel" value="P">
                        <label class="form-check-label">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2">Status Perkawinan</label>
                    <div class="col-sm-2" style="padding: 0em 2em">
                        <input class="form-check-input" type="radio" name="status_kawin" value="Kawin">
                        <label class="form-check-label">Kawin</label>
                    </div>
                    <div class="col-sm-2" style="padding: 0em 2em">
                        <input class="form-check-input" type="radio" name="status_kawin" value="Belum Kawin">
                        <label class="form-check-label">Belum Kawin</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Golongan Darah</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="goldar" required>
                          <option>A</option>
                          <option>B</option>
                          <option>O</option>
                          <option>AB</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="agama" required>
                          <option>Islam</option>
                          <option>Kristen</option>
                          <option>Khatolik</option>
                          <option>Hindu</option>
                          <option>Buddha</option>
                          <option>Konghucu</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pendidikan" required>
                          <option>TK</option>
                          <option>SD</option>
                          <option>SMP</option>
                          <option>SMK</option>
                          <option>SMA</option>
                          <option>D1</option>
                          <option>D2</option>
                          <option>D3</option>
                          <option>D4</option>
                          <option>S1</option>
                          <option>S2</option>
                          <option>S3</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah" value="{{ old('nama_ayah') }}" required>
                      @error('nama_ayah')
                        <p class="text-danger"><b>Nama Ayah wajib diisi!</b></p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu" value="{{ old('nama_ibu') }}"required>
                      @error('nama_ibu')
                        <p class="text-danger"><b>Nama Ibu wajib diisi!</b></p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Keterangan" name="ket" value="{{ old('ket') }}">
                    </div>
                  </div>
                    <input type="hidden" class="form-control" value="{{$kk->id}}" name="id_kk">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
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
<!-- AdminLTE App -->
<script src="style/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="style/dist/js/demo.js"></script>
</body>
</html>