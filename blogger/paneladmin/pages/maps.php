<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="../../peta1/css/leaflet.css">
        <link rel="stylesheet" href="../../peta1/css/qgis2web.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

          <!-- bostrap 4 -->
    <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
            <script src="bootstrap4/js/bootstrap.js"></script>
            <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">  
<!-- bostrap 4 -->
        
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
        // variabel global marker
        var marker;
        
        function taruhMarker(peta, posisiTitik){
            
            if( marker ){
            // pindahkan marker
            marker.setPosition(posisiTitik);
            } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta
            });
            }

            // isi nilai koordinat ke form
            document.getElementById("lat").value = posisiTitik.lat();
            document.getElementById("lng").value = posisiTitik.lng();
            
        }
        
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-3.4545191,104.1682808),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        
        // even listner ketika peta diklik
        google.maps.event.addListener(peta, 'click', function(event) {
            taruhMarker(this, event.latLng);
        });

        }


        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
        

        </script>

        <style>
            .map {
                width: 80%;
                height: 80%;
                margin: 5px 260px;
                margin-bottom: 50px;
            }
        </style>
  
</head>
<body>
<?php include('leftbar.php')?>;
<div class="map">
  <h1>Google Maps</h1>
  <hr>
  <div id="googleMap" style="width:100%;height:480px;"></div>

  <form action="" method="post">
    <input type="text" id="lat" name="lat" value="">
    <input type="text" id="lng" name="lng" value="">
  </form>
</div>
</body>
</html>