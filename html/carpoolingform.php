<?php
require_once('../php/mysqli_connect.php'); // thats when we are connected
//require_once('../php/connect.php');


$stmt="";
//$conn="";
$dTime = "";
$muLocation = "";
$tDescription = "";
$costs = "";

 
	 
$dTime = $_POST['departT'];
$muLocation = $_POST['meetUPL'];
$tDescription = $_POST['tripD'];
$costs = $_POST['costs'];



 $deTime = filter_var($dTime,FILTER_SANITIZE_STRING);
 $muLoc = filter_var($muLocation,FILTER_SANITIZE_STRING);
// $day = filter_var($day,FILTER_SANITIZE_EMAIL);
 //$time= filter_var($time,FILTER_SANITIZE_EMAIL);
 $tDesc= filter_var($tDescription,FILTER_SANITIZE_EMAIL);
 $cost= filter_var($costs,FILTER_SANITIZE_EMAIL);


//$query ="INSERT INTO users (user_id, fname, email, password)
//VALUES (NULL, '$first','$e','$password')";


//$stmt = $conn->prepare("INSERT INTO users (name,email,password)
//VALUES (?,?,?)");
//order matters
$stmt = $conn->prepare("INSERT INTO carpool (departingTime,meetupLocation,tripDescription,cost)  
VALUES (?,?,?,?)");

$stmt->bind_param('ssss',$deTime,$muLoc,$tDesc,$cost);

//$stmt->execute();
//$stmt->execute();

if($stmt->execute()){
 echo "test1";
}else{
  echo "test2";
}


$stmt->close();
//$mysqli->close();
//close($conn)
$conn->close();
//mysqli_close($conn);
?>