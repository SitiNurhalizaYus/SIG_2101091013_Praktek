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

public function addCompany( $company, $details, $latitude, $longitude, $telephone){
$statement = $this->conn->prepare("Insert INTO companies( company, details, latitude, longitude, telephone) VALUES(?, ?, ?, ?, ?)");
$statement->bind_param('sssss', $company, $details, $latitude, $longitude, $telephone);
$statement->execute();
$statement->close();
}

public function addStreats( $name, $geolocation){
$statement = $this->conn->prepare("Insert INTO streets( name, geolocation) VALUES(?, ?)");
$statement->bind_param('sssss', $name, $geolocation);
$statement->execute();
$statement->close();
}

public function addAreas($name, $geolocation){
$statement = $this->conn->prepare("Insert INTO areas( name, geolocation) VALUES(?, ?)");
$statement->bind_param('sssss', $name, $geolocation);
$statement->execute();
$statement->close();
}


public function getCompaniesList()
{
  $query = "SELECT * FROM companies";
  $result = mysqli_query($this->conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
     $rows[] = $row;
     
  }
  return $rows;
}
public function getStreetsList()
{
  $query = "SELECT * FROM streets ";
  $result = mysqli_query($this->conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
     $rows[] = $row;
     
  }
  return $rows;
}
public function getAreasList()
{
  $query = "SELECT * FROM areas ";
  $result = mysqli_query($this->conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
     $rows[] = $row;
     
  }
  return $rows;
}
}