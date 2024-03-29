
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        @include('template.head')
    </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rekam Medis</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Rekam Medis</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
          <div class="card-header">
            <div class="card-tools">
              <a href="{{ route('print-rekam-medis') }}" class="btn btn-primary">Print Laporan <i class="fas fa-plus-square"></i></a>
            </div>
        </div>
            
            <div class="card-body">
              <table class="table table-bordered">
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Hewan</th>
                    <th>Nama Customer</th>
                    <th>Keluhan</th>
                    <th>Nama Penyakit</th>
                    <th>Status Operasi</th>
                    <th>Tanggal</th>
                    <th>Total Biaya</th>
                  </tr>
                  <?php $no=1; ?>
                  @foreach ($datarm as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->hewan->namahewan }}</td>
                    <td>{{ $item->customer->namacust }}</td>
                    <td>{{ $item->keluhan_berobat }}</td>
                    <td>{{ $item->penyakit->namapenyakit }}</td>
                    <td>{{ $item->status_op->status }}</td>
                    <td>{{ $item->tglobat }}</td>
                    <td><?php  echo "Rp. ".number_format($item->biayaobat); ?></td>
                  </tr>
                  @endforeach
              </table>
            </div>
        </div>
    </div>
          <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
    @include('template.script')

    @include('sweetalert::alert')
</body>
</html>