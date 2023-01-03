<?php
class connectToDB {

private $conn;

public function __construct()
{
  $config = include 'konek.php';
  $this->conn = new mysqli( $config['db']['server'], $config['db']['user'], $config['db']['pass'], $config['db']['dbname']);
}

function __destruct()
{
  $this->conn->close();
}

public function addCompanies( $company, $details, $latitude, $longitude, $telephone){
    $statement = $this->conn->prepare("Insert INTO companies( company, details, latitude, longitude, telephone) VALUES(?, ?, ?, ?, ?)");

$statement->bind_param('sssss', $company, $details, $latitude, $longitude, $telephone);

$statement->execute();

$statement->close();
}

public function addStreets( $name_streets, $geolocations_streets){
  $statement = $this->conn->prepare("Insert INTO streets(name_streets, geolocations_streets) VALUES(?, ?)");

$statement->bind_param('ss', $name_streets, $geolocations_streets);

$statement->execute();

$statement->close();
}

public function addAreas( $name_areas, $geolocations_areas){
  $statement = $this->conn->prepare("Insert INTO areas(name_areas, geolocations_areas) VALUES(?, ?)");

$statement->bind_param('ss', $name_areas, $geolocations_areas);

$statement->execute();

$statement->close();
}


public function getCompaniesList()
{
    $query = "SELECT * FROM companies";
    $data = mysqli_query($this->conn, $query);
    while ($row = mysqli_fetch_array($data)){
        $hasil[] = $row;
    }
    return $hasil;
}
 
public function getStreetsList()
{
    $query = "SELECT * FROM streets";
    $data = mysqli_query($this->conn, $query);
    while ($row = mysqli_fetch_array($data)){
        $hasil[] = $row;
    }
    return $hasil;
}

public function getAreasList()
{
    $query = "SELECT * FROM areas";
    $data = mysqli_query($this->conn, $query);
    while ($row = mysqli_fetch_array($data)){
        $hasil[] = $row;
    }
    return $hasil;
}

}
?>