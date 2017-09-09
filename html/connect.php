<?php
function open(){
$user = 'root';
$password = '';
$db = 'trocy';

echo 'test';
$conn = new mysqli('localhost', $user, $password, $db) or die('unable to connect');

return $conn;
}

function close($conn){
$conn -> close();
}
 ?>
