<?php

    require_once('php/mysqli_connect.php');
 
 /*
    if($conn -> connect_error){
	   die("Connection failed: " . $conn->connect_error);
   }   
   */
   $sql = "SELECT departingTime,meetupLocation,tripDescription,cost FROM carpool";
    $result = $conn->query($sql);
  
  $output = '';
	if ($result->num_rows > 0) {
	//	echo 'test';
		//output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		//print_r($row); 
				$output .= '<ul><li>Departing time:'.$row['departingTime'].'</li><li> Meeting up location: '.$row['meetupLocation'].'</li> <li> Trip description: '.$row['tripDescription'].'</li></ul>';	 
			//echo $output;
		}
	}
else{

	}

	//$stmt->close();
	$conn->close(); 

	 
	
 



?>