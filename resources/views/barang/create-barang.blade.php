
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
                    <h1 class="m-0">Data Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Data Barang</li>
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
              <h3>Create Data Barang</h3>
            </div>
            <div class="card-body">
              <form action="{{ route('simpan-barang') }}" method="POST">
                {{ csrf_field() }}
                  <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" name="namabarang" id="namabarang" class="form-control" placeholder="Nama Barang">
                  </div>
                  <div class="form-group">
                    <label for="">Kategori Barang</label>
                    <select class="form-control select2" style="width:100%;" name="kategori_id" id="kategori_id">
                      <option disabled value>Pilih Kategori</option>
                        @foreach ($kat as $item)
                        <option value="{{ $item->id }}">{{ $item->namakategori }}</option>  
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="hargabarang" id="hargabarang" class="form-control" placeholder="Harga Barang">
                  </div>
                  <div class="form-group">
                    <label for="">Jumlah Stok</label>
                    <input type="text" name="stokbarang" id="stokbarang" class="form-control" placeholder="Stok Barang">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
              </form>
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
</body>
</html>