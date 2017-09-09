<?php
require_once('../php/mysqli_connect.php');
//require_once('../php/connect.php');

$rSetrSer=$_POST['reSetService1'];
$rSetaSer=$_POST['reSetService2'];

$reServicereqS=filter_var($rSetrSer, FILTER_SANITIZE_STRING);
$reServiceappS=filter_var($rSetaSer, FILTER_SANITIZE_STRING);


/*
if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc())
	{
	   if($row[requestSer] == 1 && $row[approvedService] == 1)
	   {
		 /*  
        $stmt = $conn->prepare("INSERT INTO service (requestSer,approvedService) VALUES (?,?)");
        $stmt->bind_param('ii',$reServicereqS,$reServiceappS);
		 
	   }else if($row[requestSer] == 1 && $row[approvedService] == 0){
            
           //sent information that they need to approve service   
			 
       }	   
		 
   
       	 
	 
	}	
		 //echo 'test';
		// output data of each row
		/*
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		//	print_r($row); 
			//$output .= '<div>serviceName:'.$row['serviceName'].' <br> Day: '.$row['day'].' <br> time: '.$row['time']. ' <br> description: ' .$row['description']. ' <br> picture: '.$row['picture']. ' <br> price: '.$row['price']. '</div>';
			///echo $output;
		}
		
		
	}
	else{

	}

*/
//$stmt = $conn->prepare("INSERT INTO users (name,email,password)
//VALUES (?,?,?)");\
//prepared statment
$stmt = $conn->prepare("INSERT INTO service (requestSer,approvedService) 
VALUES (?,?)");
$stmt->bind_param('ii',$reServicereqS,$reServiceappS);


//$stmt->execute();
if($stmt->execute()){

}
else{

}


$stmt->close();

$conn->close();
//mysqli_close($conn);
?>
