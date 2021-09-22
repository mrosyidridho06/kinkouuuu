
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
                    <h1 class="m-0">Data Hewan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Data Hewan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            
            <div class="card-body">
              <table class="table">
                  <tr>
                    <td>ID Hewan</td>
                    <td>:</td>
                    <td>{{ $hewan->id }}</td>
                  </tr>
                  <tr>
                    <td>Nama Hewan</td>
                    <td>:</td>
                    <td>{{ $hewan->namahewan }}</td>
                  </tr>
                  <tr>
                    <td>Jenis Hewan</td>
                    <td>:</td>
                    <td>{{ $hewan->jenishewan }}</td>
                  </tr>
                  <tr>
                    <td>Nama Pemilik</td>
                    <td>:</td>
                    <td>{{ $hewan->customer->namacust }}</td>
                  </tr>
              </table>
            </div>

            <div class="card-body">
              <table class="table">
                  <tr>
                    <td>ID Berobat</td>
                    <td>:</td>
                    <td>{{ $lyob->id }}</td>
                  </tr>
                  <tr>
                    <td>Nama Hewan</td>
                    <td>:</td>
                    <td>{{ $lyob->hewan->namahewan }}</td>
                  </tr>
                  <tr>
                    <td>Nama Customer</td>
                    <td>:</td>
                    <td>{{ $lyob->customer->namacust }}</td>
                  </tr>
                  <tr>
                    <td>Nama Penyakit</td>
                    <td>:</td>
                    <td>{{ $lyob->penyakit->namapenyakit }}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Berobat</td>
                    <td>:</td>
                    <td>{{ $lyob->layanan_berobat->tglobat }}</td>
                  </tr>
                  <tr>
                    <td>Nama Penyakit</td>
                    <td>:</td>
                    <td>{{ $lyob->layanan_berobat->biayaobat }}</td>
                  </tr>
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