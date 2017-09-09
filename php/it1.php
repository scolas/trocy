<?php
include 'connect.php';

$conn = open();
$link = mysqli_connect("localhost","root",'', 'trocy');




  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }
$action = isset($_GET['action']) ? true : false ;
$sql =  "Select * from items WHERE 1";
/*$data = array(
  'rows' => array(),
  'status' => 'ok'
);*/

$data = array();

if($action){


if($result = mysqli_query($link, $sql) ){
while($row = mysqli_fetch_assoc($result)){
  $data[] = $row;
}

}
else{
// echo 'else';
}



}
else{

}
close($conn);

echo json_encode($data);
 ?>
