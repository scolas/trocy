<?php
require_once('../php/mysqli_connect.php'); // thats when we are connected
//require_once('../php/connect.php');


$stmt="";
//$conn="";
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
 $user1 = '';
 $request = '';
 $app = '';


//$query ="INSERT INTO users (user_id, fname, email, password)
//VALUES (NULL, '$first','$e','$password')";


//$stmt = $conn->prepare("INSERT INTO users (name,email,password)
//VALUES (?,?,?)");
//order matters




$stmt3 = $conn->prepare("INSERT INTO service (serviceName,Day,time,description,picture,price,username,requestSer,approvedService)  
VALUES (?,?,?,?,?,?,?,?,?)");

/*
INSERT INTO `service` (`id`, `serviceName`, `Day`, `time`, `description`, `picture`,
 `price`, `username`, `requestSer`, `approvedService`) 
 VALUES ('', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test')
*/


   
    $stmt3->bind_param('sssssssss',$serviceName,$day,$time,$desc,$picture,$costs, $user1,$request,$app);

//$stmt->execute();
//$stmt->execute();




/*
 $fname = "scott"; //clean before insert
 $lname = 'test';
 $username = 'test';
 $e = 'test';
 $p = 'test';
$stmt3 = $conn->prepare("INSERT INTO service (serviceName,Day,time,description,picture) 
VALUES (?,?,?,?,?)");
$stmt3->bind_param('sssss',$fname,$lname,$e,$username,$p);*/
 

if($stmt3->execute()){
  echo "test100";
}else{
	echo "test10";
}


$stmt3->close();
//$mysqli->close();
//close($conn)
$conn->close();
//mysqli_close($conn);
 ?>