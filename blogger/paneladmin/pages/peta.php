<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="../../peta1/css/leaflet.css">
        <link rel="stylesheet" href="../../peta1/css/qgis2web.css">
        
        <!-- bostrap 4 -->
    <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
            <script src="bootstrap4/js/bootstrap.js"></script>
            <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">  
<!-- bostrap 4 -->
    <style>
        .peta {
            width: 80%;
            height: 80%;
            margin: 5px 260px;
            border: 1px solid ;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<?php include('leftbar.php')?>;
        <div class="peta">
            <object type="text/html"
            data='http://localhost:8080/geoserver/GisAndro/wms?service=WMS&version=1.1.0&request=GetMap&layers=GisAndro:GisAndro&styles=&bbox=114.43270111,-8.38325882,115.45733643,-8.06179428&width=768&height=330&srs=EPSG:4326&format=application/openlayers' width="800px" height="600px" style="overflow: auto; border: 0px ridge blue;">
            </object>
        </div>
</body>
</html>