<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:' );
} 
   
require '../function/functions.php';

$prd = query("SELECT * FROM hotel22");

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

    <title>view course</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
      
     <?php include('leftbar.php')?>;

           
         <nav>
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
                        <div class="panel-heading">
						
                            <h1>Data Penginapan Dan Hotel Di Kab.Buleleng  2019</h1>
							</div>
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
                                           
                                            
                                            <th>Aksi</th>
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
                                           
                                           
                                            <td>
                                                <a class="menu" href="edit1.php?id=<?= $gis["id"] ?>"><p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="menu" href="hapus.php?id=<?= $gis["id"] ?>"><p class="fa fa-times-circle"></p></a>
                                            </td>
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
           
            
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

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
