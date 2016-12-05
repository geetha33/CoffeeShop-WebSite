<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $upass = md5($_POST['pass']);
 
 if(mysqli_query($con,"INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
       <script>alert('successfully registered ');</script>
		
	
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title> Register </title>
<!--<link rel="stylesheet" href="style.css" type="text/css" />-->
<link href="css/coffee.css" rel="stylesheet">
	<link rel="stylesheet" href="css/menu.css">
<script>
function validateForm() {
    var uname = document.forms["myForm"]["uname"].value;
    if (uname == null || uname == "") {
        alert("Name must be filled out");
        return false;
    }
var email = document.forms["myForm"]["email"].value;
	if (email == null || email == "") {
        alert("Email must be filled out");
        return false;
    }
	if(!validateEmail(email) ){
		alert("Invalid email address . Please enter valid email address");
		return false;
	}
var pass = document.forms["myForm"]["pass"].value;
	if (pass == null || pass == "") {
        alert("Password must be filled out");
        return false;
    }
	if((pass.length) < 5){
		alert("Password should atleast have 5 characters in length");
		return false;
	}
	
}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
</script>
</head>
<body>
<div class="brand">Campus Coffee</div>
 <div class="address-bar">300 ElCamino Real | Santa Clara, CA 95050 | 408.554.4000</div>
<nav class="navbar navbar-default" role="navigation">
        <div class="container menu">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
				
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                 <div class="address-bar"><a href="index.php">HOME </a>|<a href="menu.html">  MENU </a>| <a href="phpsqlsearch_map.html"> STORES  </a>|<a href="shoponline.php"> SHOPONLINE  </a>| <a href="aboutus.html"> ABOUT US  </a>|<a href="contactus.html"> CONTACT US</a>|<a href="login.php"> SIGNIN  </a>|<a href="register.php"> REGISTER  </a>|
				 <?php
				 if(isset($_SESSION['user'])!=""){
					 echo '<a href="logout.php?logout"> LOGOUT  </a>';
				 }
				 ?>
				 
				 </div>
              </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 <div class="container">
        <div class="row text-center pad-top ">
            <div class="col-md-12">
                <h2> Registration Page</h2>
            </div>
        </div>
         <div class="row  pad-top">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Register Yourself </strong>  
                            </div>
                            <div class="panel-body" id="login-form">
                                <form name="myForm" role="form" method="post" onsubmit="return validateForm()">
<br/>
                                        <div class="form-group input-group">
                                            
                                            <input type="text" name = "uname" class="form-control" placeholder="Your Name" />
                                        </div>
                                     
                                        <div class="form-group input-group">
                                            
                                            <input type="email" name="email" class="form-control" placeholder="Your Email" />
                                        </div>
                                        <div class="form-group input-group">
                                            
                                            <input type="password" name="pass" class="form-control" placeholder="Enter Password" />
                                        </div>
                                     
                                     <button class="btn btn-success" role="button" type="submit" name="btn-signup">Register</button>
                                    
                                    
                                    Already Registered ?  <a href="login.php" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
<section id="footer1">
		        <div class="container foot1">
            
		                <div class="col-lg-12 text-center foot12" style="padding-top:10px;padding-left:0px;padding-right:0px">
		                   <ul class="list-inline">
		             <li> <a href="https://www.twitter.com/"><img class="img-responsive img-full" src="css/icons/twitter.jpg" alt="" style="width:40px;height:40px;"></a></li>
							<li><a href="https://www.linkedin.com/"> <img class="img-responsive img-full" src="css/icons/linkedin.jpg" alt="" style="width:40px;height:40px;"></a></li>
							<li><a href="https://www.facebook.com/pages/Campus-Coffee-Bean-Grill/496626497026600"><img class="img-responsive img-full" src="css/icons/fb.jpg" alt="" style="width:40px;height:40px;"></a></li>
		                   </ul>
	                        <p style="padding:0px">Copyright &copy; Your Website 2014</p>
		                </div>
		            </div>
	            </section>
   
   
</body>
</html>