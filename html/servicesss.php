<html>
<head>
   <title>Trocy</title>
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
  <script>
  
  /*
   var fn = $("#fname").val();
        var ln = $("#lname").val();
		    fname: fn,
            lname: ln,
			*/
    $(document).ready(function(){
		 $(".rService").bind("click", function( event ){
			   console.log("login btn");
			   
			       
			      var rSer = 1 ;//$("#usr").val();
                  var aSer = 0; //$("#pwd").val();
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
	  
	     $(".cService").bind("click", function( event ){
				 console.log("login btn");

            var rSer = 0 //$("#usr").val();
             var aSer = 1 //$("#pwd").val();
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
   </script>
</head>
<body>
<h3>Services</h3>
 
         <div class="outputDisplay">
		   <div class="output2"><?php include 'servicesssF.php'; echo "$output"; ?></div>
		   <button class = "rService">request service</button>
		   <!--Person giving the service will click a buttton stating you have seen the person
		    and one seen the person getting the service will confirm the service -->
	       <button type= button class = "cService">confrim service</button>
        </div>
	
</body>
</html>