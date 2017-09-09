 <?php
 require_once('php/mysqli_connect.php');
 
 
    if($conn -> connect_error){
	   die("Connection failed: " . $conn->connect_error);
   }   
   
   $sql = "SELECT serviceName,Day,time,description, picture,price FROM service";
    $result = $conn->query($sql);
  
  $output = '';
	if ($result->num_rows > 0) {
		echo 'test';
		//output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		//print_r($row); 
		$output .= '<div>serviceName:'.$row['serviceName'].' <br> Day: '.$row['Day'].' <br> time: '.$row['time']. ' <br> description: ' .$row['description']. ' <br> picture: '.$row['picture']. ' <br> price: '.$row['price'].  '</div>';
			//echo $output;
		}
	}
else{

	}
	

	//$sql->close();

	$conn->close();  
	
	?>