
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kwitansi Berobat | Invoice Print</title>

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
            <p style="font-size: 18px; "><span id="datetime"></span></p>
            <script>
                var dt = new Date();
                document.getElementById("datetime").innerHTML = dt.toLocaleString();
            </script>

          </small>
        </h2>
        <div class="col-4" >
        <p style="font-size: 12px">Alamat : Jl. Purnawirawan Raya No. 76, Kel. Gunung Terang, Kota Bandar Lampung.
            Kode Pos : 35152/0721-5646580
            HP : 08117911150</p>
        </div>
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
            <th>Nama Penyakit</th>
            <th>Status Operasi</th>
            <th>Tanggal Berobat</th>
            <th>Harga</th>
          </tr>
          </thead>
          <tbody>
             
            <tr>
              <td>{{ $datalyobdetail->id}}</td>
              <td>Berobat</td>
              <td>{{ $datalyobdetail->customer->namacust }}</td>
              <td>{{ $datalyobdetail->hewan->jenishewan }} - ( {{ $datalyobdetail->hewan->namahewan }} )</td>
              <td>{{ $datalyobdetail->penyakit->namapenyakit }}</td>
              <td>{{ $datalyobdetail->status_op->status }}</td>
              <td>{{ $datalyobdetail->tglobat}}</td>
              <td><?php echo "Rp. ".number_format($datalyobdetail->biayaobat); ?></td>
            </tr> 
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <!-- accepted payments column -->
        <div class="col-6">
          
  
          <h5 class="text-muted well well-sm shadow-none" style="margin-top: 10px;" align="center" >
            -Sehat Sekarang dan Seterusnya-
          </h5>
        </div>
        <!-- /.col -->
        <div class="col-6">
  
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Total Harga:</th>
                <td><?php echo "Rp. ".number_format($datalyobdetail->biayaobat); ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
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
