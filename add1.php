

<html>
<head>
  <!-- Custom fonts for this template-->
  <link href="side/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

 <!-- Bootstrap core CSS -->
 <link href="side/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="side/css/simple-sidebar.css" rel="stylesheet">

    <title>Tambah Data Sekolah</title>
</head>

<body>
    
     <!-- side include -->
  <div class="d-flex" id="wrapper">
     <!-- Page Content -->
  <?php include "side/side.html"; ?>

  <div class="container-fluid">
     <!-- side include -->

  <form name="sv_add1" method="post" action="sv_add1.php">
    
  <div class="form-row">
    <div class="form-group col-md-2">
    <label for="id">Id</label>
      <input type="text" name="id" class="form-control" placeholder="Masukan ID">
    </div>

    <div class="form-group col-md-6">
    <label for="nama">Nama</label>
      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
    </div>

    <div class="form-group col-md-4">
    <label for="kategori">Kategori</label>
      <select name="kategori" id="kategori" class="form-control">
        <option selected>Pilih..</option>
        <option value="swasta">swasta</option>
        <option value="negeri">negeri</option>
      </select>
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
        <label for="alamat">Alamat</label>
       <textarea name="alamat" class="form-control" placeholder="Masukan Alamat"></textarea>
       </div>
</div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="lat">Lat</label>
    <input type="text" name="lat" class="form-control" placeholder="Masukan Koordinat Latitude">
        </div>

        <div class="form-group col-md-6">
        <label for="lng">Lng</label>
          <input type="text" name="lng" class="form-control" placeholder="Masukan Koordinat Longtitude">
        </div>
    </div>

    <input type="submit" name="tambah" value="Tambah"class="btn btn-primary">
    <a href='edit1.php'  class="btn btn-primary">Kembali</a>
  </div>



</form>
   
 <!-- /#page-content-wrapper -->
 </div>
    </div>
     <!-- /#page-content-wrapper -->

 <!-- /#wrapper -->
  </div>
  <!-- /#wrapper -->

   <!-- Bootstrap core JavaScript -->
   <script src="side/vendor/jquery/jquery.min.js"></script>
  <script src="side/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>