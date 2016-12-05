<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: shoponline.php");
}
if(isset($_POST['btn-login']))
{
 $email = $_POST['email'];
 $upass = $_POST['pass'];
 $res=mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
 $row=mysqli_fetch_array($res) or die(mysqli_error($con));
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: shoponline.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Login </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Login & Registration System</title>
<!--<link rel="stylesheet" href="style.css" type="text/css" />-->
 <!-- Custom CSS -->
    <link href="css/coffee.css" rel="stylesheet">
	<link rel="stylesheet" href="css/menu.css">
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
                <h2> Login Page</h2>
            </div>
        </div>
         <div class="row  pad-top">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Login Here</strong>  
                            </div>
                            <div class="panel-body" id="login-form">
                                <form role="form" method="post">
<br/>
                                        <div class="form-group input-group">
                                            
                                            <input type="text" name = "email" class="form-control" placeholder="Enter Email" />
                                        </div>
                                     
                                       
                                        <div class="form-group input-group">
                                            
                                            <input type="password" name="pass" class="form-control" placeholder="Enter Password" />
                                        </div>
                                     
                                     <button class="btn btn-success" role="button" type="submit" name="btn-login">Login</button>
                                    
                                    
                                     Not Registered ?  <a href="register.php" >Register here</a>
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