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
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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

        <!--<script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG653NfpiIuby6CzBopz3XHyorNekfGd0&callback=initMap">
        </script> -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-3.4545191,104.1682808),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        
        // membuat Marker
        var marker=new google.maps.Marker({
            position: new google.maps.LatLng(-3.4545191,104.1682808),
            map: peta
        });

        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <title>Google Maps</title>
        <style>
        .map {
            width: 80%;
            height: 80%;
            margin: 5px 260px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body onload="initialize()">
<?php include('leftbar.php')?>;
<div class="map">
<h1>Google Maps</h1>
<hr>
<div id="googleMap" style="width:100%;height:380px;"></div>
</div>
</body>
</html>