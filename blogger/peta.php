<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:' );
} 
   
require 'paneladmin/function/functions.php';

$prd = query("SELECT * FROM hotel22");

?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/Buleleng1.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Kab. Buleleng</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">

			<link href="paneladmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
			<link href="paneladmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="paneladmin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="paneladmin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="paneladmin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="paneladmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
					<div class="container">
						  <a class="navbar-brand" href="index.html">
						  	<img src="img/Buleleng1.png"   width="100" height="90"alt="">
							<br>Kab.Buleleng</br>
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php #news">Galeri</a></li>
								<li><a href="index.php #travel">Visi Misi</a></li>
								<li><a href="index.php #fashion">Kantor</a></li>
								<li><a href="index.php #team">Kepala Daerah</a></li>
								<!-- Dropdown -->
							    <li class="dropdown">
							      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							        info
							      </a>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="sejarah.php">Sejarah</a>
							        <a class="dropdown-item" href="kondisi.php">Kondisi Fisik Kab.Buleleng</a>
							     
							      </div>
							    </li>								
								
								<!-- Dropdown -->
							    <li class="dropdown">
							      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							        Lainnya
							      </a>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="paneladmin/index.php">Login</a>
							        <a class="dropdown-item" href="peta.php #peta">Peta Persebaran Hotel dan Penginapan</a>
							     
							      </div>
							    </li>								
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
            <!-- End Header Area -->

          <!-- start banner Area -->
			<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="img/b1.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen">
						<div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
							<h1>
								 Peta Persebaran Hotel dan Penginapan Kab.Buleleng <br>
								2019.								
							</h1>
						</div>	
						
							</div>
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->

      <section id="peta">
      <div class="container">
      <div class="row d-flex justify-content-center">
    <!-- Start post Area -->
    <div class="post-wrapper pt-100">
        <!-- Start post Area -->
<div>

<object type='text/html'
data='http://localhost:8080/geoserver/GisAndro/wms?service=WMS&version=1.1.0&request=GetMap&layers=GisAndro:GisAndro&styles=&bbox=114.43270111,-8.38325882,115.45733643,-8.06179428&width=768&height=330&srs=EPSG:4326&format=application/openlayers' width='800px' height='650px'style='overflow:auto:border:8px ridge blue'>
</object>

    </div>
</div>
    <!-- End post Area -->
</div>
</div>
</section>

<section>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

<!-- /.panel-heading -->
<div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
											 <th>Kategori</th>
											 <th>Alamat</th>
                                            <th>Latitude</th>
                                            <th>Langitude</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($prd as $gis): ?>
                                        <tr>
                                            <td><?= $gis["id"]; ?></td>
                                            <td><?= $gis["nama"]; ?></td>
											 <td><?= $gis["kategori"]; ?></td>
											  <td><?= $gis["alamat"]; ?></td>
                                            <td><?= $gis["lat"]; ?></td>
                                            <td><?= $gis["lng"]; ?></td>
                                        
                                        </tr>
                                        <?php endforeach; ?>   	           
                                    </tbody>
                                </table>
								</div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</section>


    
<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Tentang Buleleng</h6>
								<br>Pemerintah Kab.Buleleng
									Jl. Lanto Dg. Pasewang No. 8 Kab.Buleleng,Bali
									Kode Pos : 98311
									Telp : (0419) 223 879</br>
								<ul class="footer-nav">
									
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>IKUTI</h6>
								<p>Kabupaten Buleleng,Bali 2019.</p>
										
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Arvitlp <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">ARVITA</a></p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		        

            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/parallax.min.js"></script>          
            <script src="js/owl.carousel.min.js"></script>      
            <script src="js/jquery.magnific-popup.min.js"></script>             
            <script src="js/jquery.sticky.js"></script>
            <script src="js/main.js"></script>  

			  <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="paneladmin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="paneladmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="paneladmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="paneladmin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="paneladmin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="paneladmin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

			<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

        </body>
    </html>