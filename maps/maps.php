<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<form action="maps.php" method="POST">
    <label>latitud</label><br>
    <input type="text" name="latitud" id="latitud" class="form-control">
    <label>longitud</label><br>
    <input type="text" name="longitud" id="longitud" class="form-control">
    <input type="submit" value="Enviar" class="boton">
    </form>

    <?php
    if(isset($_POST['latitud'])){
        if(isset($_POST['longitud'])){
            $latitud=$_POST['latitud'];
            $longitud=$_POST['longitud'];
    ?>
    <div id="map" ></div>
<!-- <script src="script.js"></script> -->
	<script>
        function iniciarMap(){
            var coord = {lat:<?php echo $latitud ?> ,lng: <?php echo $longitud ?>};
            var map = new google.maps.Map(document.getElementById('map'),{
            zoom: 10,
            center: coord
            });
            var marker = new google.maps.Marker({
            position: coord,
            map: map
            });
        }
    </script>

    <?php
        }
    }
    ?>


	<!--<div id="map" class="col-12 col-md-6 order-1 order-md-2"></div>-->
<!-- <script src="script.js"></script> -->
	<!--<script>
        function iniciarMap(){
            var coord = {lat:5.7912889 ,lng: -75.4267816};
            var map = new google.maps.Map(document.getElementById('map'),{
            zoom: 10,
            center: coord
            });
            var marker = new google.maps.Marker({
            position: coord,
            map: map
            });
        }
    </script>-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBICNPekXKgpgOgnzsKnyQdrYhj51YG0q0&callback=iniciarMap"></script>

</body>
</html>