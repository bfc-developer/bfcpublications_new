<?php 

/************** database configuration **************/
$host="localhost";
$dbName="bfcpublicationswebsite";
$dbUser="bfcgroup";
$dbpass="FuCjrKCTss3gKyf";

// $servername = "localhost";
// $username = "bfcgroup";
// $password = "FuCjrKCTss3gKyf";
// $dbname = "bfcpublicationswebsite";
$con = mysqli_connect($host,$dbUser,$dbpass,$dbName);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


?>