

<?php
session_start ();
if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:' );
};

require ("../function/functions.php");

//Ambil data di url
$ID = $_GET["id"];

//query data produksi berdasarkan ID No
$gis = query("SELECT * FROM hotel22 WHERE id = '$ID';")[0];

// cek apakah tombol submit sudah di pencet apa belum

?>
<?php

if(isset($_POST['update'])){
  $nama = $_POST['nama'];
  $kategori = $_POST['kategori'];
  $alamat = $_POST['alamat'];
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];
  
  
    pg_query($conn, "UPDATE hotel1 SET nama = '$nama', lat = '$lat', lng = '$lng',  kategori = '$kategori',  alamat = '$alamat' WHERE id='$ID'");
    echo "<script>alert('Data Berhasil Diubah');</script>";
    header("Location:tampil.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
 <!-- bostrap 4 -->
 <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
            <script src="bootstrap4/js/bootstrap.js"></script>
            <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">  
<!-- bostrap 4 -->

<title>Edit Data</title>

<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" >
	<div id="wrapper">

		<!-- Navigation -->
		<?php include('leftbar.php')?>;


		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Edit Data</div>
						<div class="panel-body">
							<div class="row">
						 	<div class="col-lg-10">
									
							 	<div class="col-lg-6">
									<input class="form-control" type="hidden" name="gid" id="gid"  value="<?= $gis["id"]; ?>">       
									<span id="course-availability-status" style="font-size:12px;"></span>				
								</div>

								
								</div>	
						
								<br><br>

								<div class="form-group">
									<div class="col-lg-4">
					 				<label>Nama <span id="nama" style="font-size:11px;color:red">*</span>	</label>
								</div>
								<div class="col-lg-6">
									<input class="form-control" name="nama" id="nama"  value="<?= $gis["nama"]; ?>">       
									<span id="course-availability-status" style="font-size:12px;"></span>				
								</div>
								</div>	
						
								<br><br>
								
								<div class="form-group">
									<div class="col-lg-4">
									<label>Latitude<span id="lat" style="font-size:11px;color:red">*</span></label>
								</div>
								<div class="col-lg-6">
									<input class="form-control" name="lat" id="lat" value="<?= $gis["lat"]; ?>">
									<span id="course-status" style="font-size:12px;"></span>				
								</div>
								</div>	
																	
								<br><br>

								<div class="form-group">
									<div class="col-lg-4">
									<label>Longitude<span id="lng" style="font-size:11px;color:red">*</span></label>
								</div>
								<div class="col-lg-6">
									<input class="form-control" name="lng" id="lng" value="<?= $gis["lng"]; ?>">
									<span id="course-status" style="font-size:12px;"></span>				
								</div>
								</div>	
																	
								<br><br>

								<div class="form-group">
									<div class="col-lg-4">
									<label>Katgori<span id="kategori" style="font-size:11px;color:red">*</span></label>
								</div>
								<div class="col-lg-6">
									<input class="form-control" name="kategori" id="kategori" value="<?= $gis["kategori"]; ?>">
									<span id="course-status" style="font-size:12px;"></span>				
								</div>
								</div>	
																	
								<br><br>
								
								<div class="form-group">
									<div class="col-lg-4">
									<label>Alamat<span id="alamat" style="font-size:11px;color:red">*</span></label>
								</div>
								<div class="col-lg-6">
									<input class="form-control" name="alamat" id="alamat" value="<?= $gis["alamat"]; ?>">
									<span id="course-status" style="font-size:12px;"></span>				
								</div>
								</div>	
																	
								<br><br>		
	<div class="form-group">
	<div class="col-lg-4">
	 <label>Date</label>
	</div>
	<div class="col-lg-6">
	<input class="form-control" value="<?php echo date('d-m-Y');?>" readonly="readonly" name="update">
	
	</div>
	</div>
	</div>	
										
		<br><br>		
		<div class="form-group">
			<div class="col-lg-4">
		</div>
		<div class="col-lg-6"><br><br>
			<input type="submit" class="btn btn-primary" name="submit" value="Update Data"></button>
		</div>
		</div>		
													
		</div>

					</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		

	</div>
	
	<script src="../bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>
	
	<script>
function courseAvailability() {
	
jQuery.ajax({
url: "course_availability.php",
data:'cshort='+$("#cshort").val(),
type: "POST",
success:function(data){
$("#course-availability-status").html(data);


},
error:function (){}
});
}

function coursefullAvail() {
	
jQuery.ajax({
url: "course_availability.php",
data:'cfull='+$("#cfull").val(),
type: "POST",
success:function(data){
$("#course-status").html(data);


},
error:function (){}
});
}



</script>
</form>
</body>

</html>
