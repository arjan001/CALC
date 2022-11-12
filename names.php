<?php include 'db.php'; 

// the escape string code is to make sure no code will be passed inside the form  that may destroy our database


$first =mysqli_real_escape_string($conn , $_POST['jina']);


$sql = "INSERT INTO users (name) VALUES('$first');";

mysqli_query($conn, $sql);
header("location:index.php?name=added succefully");

?>
