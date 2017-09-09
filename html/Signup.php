<!DOCTYPE html>
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

    $(document).ready(function(){
      $("#login_btn").bind("click", function(){
        console.log("login btn");

        var us = $("#usr").val();
        var pw = $("#pwd").val();
        event.preventDefault();   //its  a form

      request =  $.ajax({
          type: 'post',
          cache: false,
          url: '/trocy-website-master/php/login_post.php',
          data: {
            username: us,
            password: pw,

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
	  
      $("form").submit(function(event){ //event, form can submit to own file once created so we wat to stop that
        console.log("form submit");

        var fn = $("#fname").val();
        var ln = $("#lname").val();
        var us = $("#username").val();
        var em = $("#email").val();
        var pw = $("#password").val();

      //  alert(st+" this is st ");
        //alert(gn);
        event.preventDefault(); 
        var $form=$(this);
       // var datastring = {fname:"fn", lname:"ln", username:"us" ,email : "em", password : "pw"};
        var serialize = $form.serialize();
        //alert('works1');
      request =  $.ajax({
          type: 'post',  //you put the data in the url,  
          cache: false,
          url: '/trocy-website-master/php/signup_post.php', //location where you want to pass your form data to
          //data: serialize,
          data: {
            fname: fn,
            lname: ln,
            username: us,
            email: em,
            password: pw,

          },
          success: function(result){
            //alert('works-php');
              console.log("works form submitted"+ result);

          }


        });

        request.done(function (response, txtStatus, jqXHR){
          alert("thank you");

          $form[0].reset();
        });

        request.fail(function (response, txtStatus, errorThrown){
          alert(" Check log");
          console.error("Entry Unsuccessful" + txtStatus, errorThrown);
        });


      });




    });

  </script>

</head>
<body >
  <!-- navigation bar -->
  <div id="nav" data-section="navigation">
    <nav class="navbar-custom navbar navbar-default">
      <div class="container-fluid" id="nav-container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../home.html" title="Trocy Logo">
           <img id="brand-logo" src=""/>
         </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">About us</a></li>
            <li><a href="#">Sign Up</a></li>
           <li><a href="#" data-toggle="modal" data-target="#login-modal">Log In</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                More <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">News</a></li>
                <li><a href="#">Our team</a></li>
                <li><a href="#">Ads</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">HELP</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div><!-- /navigation section-->
  <!-- ===login-modal=== -->
  <div id="login-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="usr" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="pwd" placeholder="Password">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Remember Me</label>
          </div>
          <ul class="social-media row">
           <li><a href=""><i class="fa fa-facebook"></i></a></li>
           <li><a href=""><i class="fa fa-google-plus"></i></a></li>
           <li><a href=""><i class="fa fa-twitter"></i></a></li>
           </ul>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="login_btn" data-dismiss="modal">Login</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Forgot Password</button>
        </div>
      </div>

    </div>
  </div>
  <!-- <<<end login modal>>> -->
  <link rel="stylesheet" type="text/css" href="../css/signUp.css">
   <div id="login-section" class="container">
     <legend>Sign Up</legend>
   	 <div class="innter-form">
       <form class="sa-innate-form" action="">
         <input type="text" id="fname" name="fname" placeholder="First Name">
         <input type="text" id="lname" name="lname" placeholder="Last Name">
         <input type="text" id="email" name="email" placeholder="Email">
         <input type="text" id="username" name="username" placeholder="username">
         <input type="password" id="password" name="password" placeholder="password">
         <button type="submit">Join now</button>
         <p>By clicking Join now, you agree to Trocy's User Agreement, Privacy Policy, and Cookie Policy.</p>
      </form>
    </div>

    <div class="social-login" style="text-align:center;">
     <p > - Register With -   </p>
		  <ul class="social-media">
       <li><a href=""><i class="fa fa-facebook"></i>Facebook</a></li>
       <li><a href=""><i class="fa fa-google-plus"></i>Google+</a></li>
       <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
       </ul>
     </div>

   </div>








   <!--==footer section==-->
   <footer class="footer-distributed section">
     <div class="footer-left">
       <!--<img src="img/trocy-logo.png"/>-->
       <p class="footer-links">
         <a href="#">Home</a> ·
         <a href="#">About us</a> ·
         <a href="#">Advertisement</a> ·
         <a href="#">Team</a> ·
         <a href="#">HELP</a> ·
         <a href="#">Contact</a>
       </p>
       <p class="footer-company-name">Trocy &copy; 2017</p>
     </div>
     <div class="footer-center">
       <div>
         <i class="fa fa-map-marker"></i>
         <p><span>250 Myrtle Avenue</span> Bridgeport,CT, USA</p>
       </div>
       <div>
         <i class="fa fa-phone"></i>
         <p>+1 555 123456</p>
       </div>
       <div>
         <i class="fa fa-envelope"></i>
         <p><a href="mailto:support@company.co">support@company.com</a></p>
       </div>
     </div>
     <div class="footer-right">
       <p class="footer-company-about">
         <span>About the Company</span>
         Clean innovative solution for the future
       </p>
       <div class="footer-icons">
         <a target="_blank" href="https://www.facebook.com/greenheattechnologies/"><i class="fa fa-facebook"></i></a>
         <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
         <a href="#"><i class="fa fa-linkedin"></i></a>
       </div>
     </div>
    </footer> <!--==end footer section==-->
  </body>
</html>
