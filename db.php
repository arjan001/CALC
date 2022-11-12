<?php
$ServerName ="localhost";
$UserName ="root";
$Password ="";
$dbName ="zydii";


$conn = mysqli_connect($ServerName,$UserName,$Password,$dbName);


// Check connection
if($conn === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
