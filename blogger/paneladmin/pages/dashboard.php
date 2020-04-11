<?php
session_start();
 include ('../koneksi.php'); 
 $sql = pg_query($dbconn,"SELECT * FROM user");
        $hasil = pg_fetch_array($sql);
if(empty($_SESSION['username'] != $hasil['user'])){
  //header("Location: ../");
}
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
            <script src="bootstrap4/js/bootstrap.js"></script>
            <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">  

    <title>Dash Board</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
</head>

<body>

    <div id="wrapper">
    <?php include('leftbar.php')?>;

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
				<center>
				<img src="Buleleng1.png"  width="150" height="145"alt=""/>
                    <h1 class="page-header"> <?php echo strtoupper("Selamat datang di Portal Admin Kab.Buleleng "." ".htmlentities($_SESSION['login']));?></h1>
					</center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
           
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
