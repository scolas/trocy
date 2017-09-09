
<html>
  <head>
  <title>Trocy</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="fb_admins_meta_tag" content="">
  <meta name="description"
    content="A student marketplace company where students will sell their products, and provide services">

  <title>Trocy Home Page</title>
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Stylesheet -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  <?php
     require_once('php/mysqli_connect.php');
 
  

 $sql = "SELECT serviceName,day,time,description, picture,price FROM service";
$result = $conn->query($sql);

$output = '';
	if ($result->num_rows > 0) {
		 //echo 'test';
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		//	print_r($row); 
			$output .= '<div>serviceName:'.$row['serviceName'].' <br> Day: '.$row['day'].' <br> time: '.$row['time']. ' <br> description: ' .$row['description']. ' <br> picture: '.$row['picture']. ' <br> price: '.$row['price']. '</div>';
			///echo $output;
		}
	}
	else{

	}
   
	//$stmt->close();
	$conn->close();
   ?>
   
       $(document).ready(function(){
		 $(".openService").bind("click", function( event ){
			   console.log("login btn");
			      var rSet1 = 0 ;//$("#usr").val();
				  // var rSet = 0;
        	      event.preventDefault();   //its  a form
				   request =  $.ajax({
					   type: 'post',
                       cache: false,  
					   url: '/trocy-website-master/html/rSetServices.php',
                    data: {
                       reSetService1: rSet1,
                       reSetService2: rSet1,
                     },
		              success: function(result){
                      //alert('works-php');
                      console.log("works form submitted"+ result);
                    }
				   });
				   
		   request.done(function (response, txtStatus, jqXHR){
              alert("Thank you");

          //$form[0].reset();
                });
				
				 request.fail(function (response, txtStatus, errorThrown){
                 alert(" Check log");
                 console.error("Entry Unsuccessful" + txtStatus, errorThrown);
			 
		   });	   
	     });
	   });
	   
  </script>
  </head>
  <header>
  </header>
  <body>
  
     <div id ="yServiceF">
              <div id="picofSer">
              <!--<img src="blank-profile-hi.jpg" alt="blank" style="width:128px;height:128px;"> -->
              </div>
              <div id = "nameOfSer">
			   <a href="" >Post a Service</a>
              
              </div>
          </div>

		  <!--  serviceName,$day,$time,$desc,$picture, $costs -->	  
     
    
           <div id ="services">
               <div id="picofSer">
              	<!-- <img src="blank-profile-hi.jpg" alt="blank" style="width:128px;height:128px;"> -->
              </div>
               <div class="output2"><?php echo $output; ?></div>
              <div>
	            <button class = "openService">openService</button>
                <!-- <a href="">book service</a> -->
              </div>
              <div>
			  
                 <a href="" >Edit Service</a>
              </div>
          </div>  
  </body>
  <footer>
  </footer>
<html>