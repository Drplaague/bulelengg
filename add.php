<html>
<head>
        <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
        <script src="bootstrap4/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">  
    <title>Tambah Data Peta</title>
</head>

<body>
<center>
<h1>Masukkan Data </h1>
</center>
<center>
    <form name="sv_add" method="post" action="tambah.php">
        <table border="0">
        <td width="80%">
        <div class="form-group">
            <label for="id">Id</label>
                <input type="text" name="id" class="form-control" placeholder="Masukan ID">
                </div>

            <div class="form-group">
            <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>
            
            <div class="form-group">
        <label for="alamat">Alamat</label>
                <textarea name="alamat"  class="form-control" placeholder="Masukan Alamat"></textarea>
                </div>
            
            

                <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" placeholder="Masukan Kategori">
                </div>
            
            <div class="form-group">
        <label >Lng</label>
                <input type="text" name="lgt" class="form-control" placeholder="Masukan Koordinat Longtitude">
                </div>
            
            <div class="form-group">
        <label >Lat</label>
                <input type="text" name="lat" class="form-control" placeholder="Masukan Koordinat Latitude">
                </div>
                <div>
                <input type="submit" name="tambah" value="Tambah"class="btn btn-primary">
                <a href='edit.php'  class="btn btn-danger">back</a>
                </div>
            
        </table>
    </form>
    </center>
	
</body>
<footer><center>copyrightARLP</center></footer>
</html>