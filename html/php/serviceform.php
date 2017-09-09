<?php
require_once('../php/mysqli_connect.php'); // thats when we are connected
//require_once('../php/connect.php');



$pic = "";
$serviceN = "";
$day = "";
$description = "";
$time = "";
$price = "";
	 
$pic = $_POST['picture'];
$serviceN = $_POST['serviceN'];
$day = $_POST['days'];
$description = $_POST['description'];
$time = $_POST['times'];
$price = $_POST['costs'];



 $picture = filter_var($pic,FILTER_SANITIZE_STRING);
 $serviceName = filter_var($serviceN,FILTER_SANITIZE_STRING);
 $day = filter_var($day,FILTER_SANITIZE_EMAIL);
 $time= filter_var($time,FILTER_SANITIZE_EMAIL);
 $desc= filter_var($description,FILTER_SANITIZE_EMAIL);
 $costs= filter_var($price,FILTER_SANITIZE_EMAIL);


//$query ="INSERT INTO users (user_id, fname, email, password)
//VALUES (NULL, '$first','$e','$password')";


//$stmt = $conn->prepare("INSERT INTO users (name,email,password)
//VALUES (?,?,?)");
//order matters
$stmt = $conn->prepare("INSERT INTO service (serviceName,day,time,description, picture,price)  
VALUES (?,?,?,?,?,?)");
$stmt->bind_param('ssssss',$serviceName,$day,$time,$desc,$picture,$costs);


//$stmt->execute();
if($stmt->execute()){

}else{

}


$stmt->close();

$conn->close();
//mysqli_close($conn);
 ?>