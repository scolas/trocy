<?php

$DB_USER = "root";
$DB_PASSWORD = "";
$DB_HOST = "localhost";
$DB_NAME = "trocy";

$conn = new mysqli($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
//exit('test');

//check connection_aborted
if ($conn->connect_error){
  die("Connection failed:" . $conn->connect_error);
}

 ?>
