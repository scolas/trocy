<?php
function open(){
$user = 'root';
$password = '';
$db = 'trocy';

$conn = new mysqli('localhost', $user, $password, $db) or die('unable to connect');

return $conn;
}

function close($conn){
$conn -> close();
}
//test123
 ?>
