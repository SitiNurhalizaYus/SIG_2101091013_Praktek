<?php

require_once("db.php");

$company = strip_tags($_POST['company']);
$details = strip_tags($_POST['details']);
$latitude = strip_tags($_POST['latitude']);
$longitude = strip_tags($_POST['longitude']);
$telephone = strip_tags($_POST['telephone']);
// $name = strip_tags($_POST['name']);
// $geolocation = strip_tags($_POST['geolocation']);

$conn->addCompany($company, $details, $latitude, $longitude, $telephone);
$conn->addStreets($name, $geolocation);
//$conn->addAreas($name, $geolocation);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Tambah data</title>
 </head>
 <body>
  <h1>Data sudah ditambahkan</h1>
 </body>
</html>