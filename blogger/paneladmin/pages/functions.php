<?php 

// koneksi ke database
$conn = pg_connect("host=localhost dbname=buleleng user=postgres password=admin");

function query($query) {
	global $conn;
	$result = pg_query($conn, $query);
	$rows = [];
	while ($gis = pg_fetch_assoc($result)) {
		$rows[] = $gis;
	}
	return $rows;
}

function edit($data){
	global $conn;

	$gid = ($data["gid"]);
    $ID = ($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $lat = htmlspecialchars($data["lat"]);
    $lng = htmlspecialchars($data["lng"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $alamat = htmlspecialchars($data["alamat"]);

	$query = "UPDATE wisata SET
                 nama = '$nama',
                 lat = '$lat',
                 lng = '$lng',
                 kategori = '$kategori',
                 alamat = '$alamat'
			   WHERE id = $ID
			";

	pg_query($conn, $query);

	return pg_affected_rows($conn, $query);
}

function edit2($data){
	global $conn;

    $ID = ($data["ID"]);
	$Kecamatan = htmlspecialchars($data["Kecamatan"]);
	$D_Jumlah_Kamar = ($data["D_Jumlah_Kamar"]);
	$D_Jumlah_Hotel = ($data["D_Jumlah_Hotel"]);


	$query = "UPDATE kamar SET
				Kecamatan = '$Kecamatan',
				D_Jumlah_Kamar = '$D_Jumlah_Kamar',
				D_Jumlah_Hotel = '$D_Jumlah_Hotel'
			   WHERE ID = $ID
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($ID){
	global $conn;
	$query = pg_query($conn, "DELETE FROM wisata hotel1 id = $gid");
	return pg_affected_rows($conn);
}

function tambah($data){
	global $conn;

    $ID = ($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $lat = htmlspecialchars($data["lat"]);
    $lng = htmlspecialchars($data["lng"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $alamat = htmlspecialchars($data["alamat"]);

	$query = pg_query ("INSERT INTO WISATA (id,nama,lat,lng,kategori,alamat) VALUES ('$ID','$nama','$lat','$lng','$kategori','$alamat')");


	return pg_affected_rows($conn, $query);
}


function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada apa belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
			  </script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai!');
			 </script>";

		return false;
	}
	
	//enkripsi password
	$password = password_hash($password,PASSWORD_DEFAULT);

	//tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");

	return mysqli_affected_rows($conn);

}
?>