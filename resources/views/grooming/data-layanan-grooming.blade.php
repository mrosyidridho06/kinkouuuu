
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
                    <h1 class="m-0">Grooming</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Grooming</li>
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
                  <a href="{{ route('create-layanan-grooming') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                  <a href="{{ route('print-layanan-grooming') }}" class="btn btn-primary">Print Laporan <i class="fas fa-plus-square"></i></a>
                </div>
            </div>
            
            <div class="card-body">
              <table class="table table-bordered">
                  <tr>
                    <th>ID</th>
                    <th>Nama Grooming</th>
                    <th>Nama Hewan</th>
                    <th>Nama Customer</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
                  @foreach ($datalygro as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->grooming->namagrooming }}</td>
                    <td>{{ $item->hewan->namahewan }}</td>
                    <td>{{ $item->customer->namacust }}</td>
                    <td><?php echo "Rp. ".number_format($item->grooming->hargagrooming); ?></td>
                    <td>
                        <a href="{{ url('grooming/edit-layanan-grooming',$item->id) }}"><i class="fas fa-edit"></i></a> | <a href="{{ url('grooming/delete-layanan-grooming',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a> | <a href="{{ url('grooming/print-layanan-grooming-detail',$item->id) }}"><i class="fa fa-print" style="color: rgb(0, 0, 0)"></i></a>
                    </td>
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