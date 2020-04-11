<?
 $link = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin");

 if (!$link) {
  die('Could not connect: ' . pg_last_error());
 }

 $gid   		= $_POST['gid'];
 $nama 			= $_POST['nama'];
 $kategori    	= $_POST['kategori'];
 $alamat  		= $_POST['alamat'];
 $lng  			= $_POST['lng'];
 $lat   		= $_POST['lat'];

 echo 'Connected successfully <br>';
  pg_query($link, "INSERT INTO " . $table . " (gid,nama,kategori, alamat,lng,lat) VALUES ($gid,$nama,$kategori,$alamat,$lng,$lat);");
  }
 }

pg_close($link);
?>