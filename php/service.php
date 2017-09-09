<?php
require_once('../php/mysqli_connect.php');
//require_once('../php/connect.php');



$stmt="";
$rService="";
$aService="";
$rServi="";
$aServi="";
 

$rService=$_POST['requestedSer'];
$aService=$_POST['approvedSer'];

$rServi = filter_var($rService,FILTER_SANITIZE_STRING); //clean before insert
$aServi = filter_var($aService,FILTER_SANITIZE_STRING);



/*
$f = $_POST['fname'];
$l = $_POST['lname'];
$u = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


 $fname = filter_var($f,FILTER_SANITIZE_STRING); //clean before insert
 $lname = filter_var($l,FILTER_SANITIZE_STRING);
 $username = filter_var($u,FILTER_SANITIZE_EMAIL);
 $e = filter_var($email,FILTER_SANITIZE_EMAIL);
 $p = filter_var($password,FILTER_SANITIZE_STRING);

*/

//$query ="INSERT INTO users (user_id, fname, email, password)
//VALUES (NULL, '$first','$e','$password')";
/*
$stmt = $conn->prepare("INSERT INTO users2 (fname,lname,email,username,password) 
VALUES (?,?,?,?,?)");
$stmt->bind_param('sssss',$fname,$lname,$e,$username,$p); */
$stmt = $conn->prepare("INSERT INTO service (requestSer, approvedService) 
VALUES (?,?)");
$stmt->bind_param('ii',$rServi,$aServi);



//$stmt->execute();
if($stmt->execute()){
  echo "success";
}
else{
  echo "error";
}


$stmt->close();

$conn->close();
//mysqli_close($conn);
 ?>