<?php
include_once("koneksi.php");

$result = mysqli_query($conn, "SELECT * FROM smp");
?>

<html>
<head>    
    <title>Data</title>
    <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
        <script src="bootstrap4/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
</head>

<body>
<nav class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="#">
            <img
                src="kota surakarta.png"
                width="150"
                height="110"
                class="d-inline-block align-top"
                alt="">
            <span href="#" class="navbar-brand"><h1>Peta Persebaran Penginapan Dan Hotel</h1></span>
            
            <a class="btn btn-primary" href="index.php">Home</a>
            <a class="btn btn-secondary"  href="add.php">Tambah Data</a>
			 <a class="btn btn-danger" href="data.php">Data</a>
        </nav>
        <br>
  	  
	  
	<h1><center>Data Persebaran Penginapan Dan Hotel Kab.Bulelng</center></h1>
	<h1><center>Tahun 2019</center></h1>
   </div>

    <br>
    <table width='80%' align="center" class="table">
    <thead class="bg-success">
    <tr>
        <th>ID</th><th>Nama</th><th>Alamat</th><th>Kategori</th><th>LNG</th><th>LAT</th><th colspan=2>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        
        echo "<td>".$user_data['kategori']."</td>";
       
        echo "<td>".$user_data['lgt']."</td>";
        echo "<td>".$user_data['lat']."</td>";
        echo "<td><a href='editdata.php?id=$user_data[id]'class='btn btn-outline-info'>Edit</a>"; 
        echo "<td><a href='hapus.php?id=$user_data[id]' onclick='return confirm(\"Anada yakin ingin menghapus data ini?\")' class='btn btn-outline-danger'>Hapus</a></td></tr>";
    }
    ?>
    </tbody>
    </table>
    <br>
	<footer><center>copyrightARLP</center></footer>
</body>
</html>