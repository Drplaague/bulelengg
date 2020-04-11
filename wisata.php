<?php 
	$conn = pg_connect("host=localhost dbname=buleleng port=5432 user=postgres password=admin");
	
	$nama = $_POST['nama'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	$kategori = $_POST['kategori'];
	$alamat = $_POST['alamat'];
	
	$sql = "select max(id) as id from wisata";
	$hasil = pg_query($conn,$sql);
	$data = pg_fetch_array($hasil);
	$id = $data['id']+1;
	
	$sql = "insert into public.wisata(id,nama,lat,lng,kategori,alamat,geom) values('$id', '$nama','$lat','$lng','$kategori','$alamat', ST_setSRID(ST_MakePoint('$lng','$lat'),4326) )";
	
	pg_query($conn, $sql);
?>