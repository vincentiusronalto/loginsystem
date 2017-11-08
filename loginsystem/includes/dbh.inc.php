<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName= "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if($conn) {
  echo "CONNECTED TO DB";
}
