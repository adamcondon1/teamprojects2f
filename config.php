<?php 
$serverName= "localhost:3307";
$dbUsername= "root";
$dBPassword= "";
$dBName= "test_db";
$charset = 'utf8mb4';
$link = mysqli_init();
$conn= mysqli_connect($serverName, $dbUsername, $dBPassword, $dBName);
//$conn = new mysqli($serverName, $dbUsername, $dBPassword, $dBName);

//Error message if connection fails
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
?>