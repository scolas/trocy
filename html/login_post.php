<<?php
require_once('../php/mysqli_connect.php');
//require_once('../php/connect.php');

$return_data = array(
  "status" => "",
  "name" => ""
);

$username= $_POST['username'];
$password = $_POST['password'];


 $u = filter_var($username,FILTER_SANITIZE_EMAIL);
 $p = filter_var($password,FILTER_SANITIZE_STRING);




$sql = "SELECT fname FROM `users2`
        WHERE username = ?
        AND password = ? ";

$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $u, $p);



//$stmt->execute();
if($stmt->execute()){
  $stmt->bind_result($name);
  while($stmt -> fetch()){
    //printf("%s \n", $name);
  }
  $return_data["status"] = "true";
  $return_data["name"] = $name;
}
  //$return_data["status"] = "false";


$stmt->close();

$conn->close();
//mysqli_close($conn);
echo json_encode($return_data);
 ?>
