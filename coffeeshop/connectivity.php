<?php
 $currency = '$'; //Currency sumbol or code

$db_username = 'root';
$db_password = '';
$db_name = 'cl_db';
$db_host = 'localhost';
$con = mysqli_connect($db_host, $db_username, $db_password,$db_name) or
die("Failed to connect to MySQL");
 
 /* $ID = $_POST['user'];
 $Password = $_POST['pass']; */ 
 function SignIn($con)
 {
 session_start(); //starting the session for user profile page 
 if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
 {
 $query = mysqli_query($con,"SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysqli_error($con)); 
 $row = mysqli_fetch_array($query) or die(mysqli_error($con)); 
 if(!empty($row['userName']) AND !empty($row['pass']))
 { 
 $_SESSION['userName'] = $row['userName'];
	$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
	$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
	$url .= '/shoponline.php';            // <-- Your relative path
	header('Location: ' . $url, true, 302); 
	//echo "Logged in as $_POST[user] " ; 
 } else { 
 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
 }
 } 
 } 
 if(isset($_POST['submit']))
 {
 SignIn($con);
 }
?>

