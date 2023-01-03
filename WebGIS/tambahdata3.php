<?php

require_once("db.php");


$name_areas= strip_tags($_POST['name_areas']);
$geolocations_areas = strip_tags($_POST['geolocations_areas']);

$conn = new  connectToDB();
$conn->addAreas($name_areas, $geolocations_areas);

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