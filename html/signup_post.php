<?php
require_once('../php/mysqli_connect.php');
//require_once('../php/connect.php');


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



//$query ="INSERT INTO users (user_id, fname, email, password)
//VALUES (NULL, '$first','$e','$password')";


//$stmt = $conn->prepare("INSERT INTO users (name,email,password)
//VALUES (?,?,?)");\
//prepared statment
$stmt = $conn->prepare("INSERT INTO users2 (fname,lname,email,username,password) 
VALUES (?,?,?,?,?)");
$stmt->bind_param('sssss',$fname,$lname,$e,$username,$p);



//$stmt->execute();
if($stmt->execute()){

}
else{

}


$stmt->close();

$conn->close();
//mysqli_close($conn);
 ?>
