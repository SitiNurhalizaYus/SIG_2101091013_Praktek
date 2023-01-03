<?php

require_once("db.php");


$name_streets= strip_tags($_POST['name_streets']);
$geolocations_streets = strip_tags($_POST['geolocations_streets']);

$conn = new  connectToDB();
$conn->addStreets($name_streets, $geolocations_streets);

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Tambah data</title>
 </head>
 <body>
    Data sudah ditambahkan
    <a href="index.php">Lihat peta</a>
 </body>
</html>