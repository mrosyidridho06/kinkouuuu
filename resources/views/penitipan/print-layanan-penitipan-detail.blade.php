
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kwitansi Penitipan | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src="{{asset('Image/logo.jpeg')}}" width="30px" > KINKOU PETSHOP
          <small class="float-right">
            <p><span id="datetime"></span></p>
            <script>
                var dt = new Date();
                document.getElementById("datetime").innerHTML = dt.toLocaleString();
            </script>

          </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Keterangan</th>
            <th>Nama Customer</th>
            <th>Jenis Hewan</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
            <th>Total Harga</th>
          </tr>
          </thead>
          <tbody>
             
            <tr>
              <td>{{ $datatitipdetail->id}}</td>
              <td>Penitipan</td>
              <td>{{ $datatitipdetail->customer->namacust }}</td>
              <td>{{ $datatitipdetail->hewan->jenishewan }} - ( {{ $datatitipdetail->hewan->namahewan }} )</td>
              <td>{{ $datatitipdetail->tglin }}</td>
              <td>{{ $datatitipdetail->tglout }}</td>
              <td><?php echo "Rp. ".number_format($datatitipdetail->biayatitip); ?></td>
            </tr> 
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
