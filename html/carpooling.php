<html>
<head> 
  <link rel="stylesheet" type="text/css" href="items.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="fb_admins_meta_tag" content="">
  <meta name="description"
    content="A student marketplace company where students will sell their products, and provide services">
  <meta name="author" content="Dat Tran/McKenzie Parents">
  <meta name="keywords" content="student,marketplace,tutor,carpool,services">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />
  <title>Trocy Home Page</title>
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Stylesheet -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- <script>
 /*
 
  $(document).ready(function(){
       $(".rService").bind("click", function(){
        console.log("login btn");
		    var rSer = 1; //$("#usr").val();
            var aSer = 0; //$("#pwd").val();
            event.preventDefault();   //its  a form
			
			
      request =  $.ajax({
          type: 'post',
          cache: false,
          url: '/trocy-website-master/php/carpooling.php',
           data: {
            requestedSer: rSer,
            approvedSer: aSer,

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
	  
	$(document).ready(function(){
	   $(".cService").bind("click", function(){
	            console.log("login btn");
				    var rSer = 0; //$("#usr").val();
         var aSer = 1; //$("#pwd").val();
        event.preventDefault();   //its  a form
	  
	   request =  $.ajax({
          type: 'post',
          cache: false,
          url: '/trocy-website-master/php/service.php',
          data: {
            requestedSer: rSer,
            approvedSer: aSer,

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
$sql = "SELECT departingTime,meetupLocation,tripDescription,cost FROM carpool";
$result = $conn->query($sql);

$output = '';
	if ($result->num_rows > 0) {
		echo 'test';
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		print_r($row); 
		$output .= '<ul><li>Departing time:'.$row['departingTime'].'</li><li> Meeting up location: '.$row['meetupLocation'].'</li> <li> Trip description: '.$row['tripDescription'].'</li></ul>';
			 
		}file:///C:/xampp/htdocs/trocy-website-master/html/blank-profile-hi.jpg
	}
	else{

	}


	$stmt->close();

	$conn->close(); 
 */
</script>  -->
<script>
 	<?php 
	
	require_once('../php/mysqli_connect.php'); 







	?>
</script>

</head>
<div id = "headers"> 
<header>
 
</header>
</div>
<body>

<!-- this page will change into another page and I will take this page into a form -->
<img src="blank-profile-hi.jpg" alt="blank" style="width:128px;height:128px;">
<div class = "carpoolList"> </div>
            
</body>
<footer>
</footer>
</html>