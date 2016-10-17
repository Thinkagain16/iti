<?php


if(isset($_SESSION['login_user'])){
header("location:instructorpanel.html");
}
?>

<?php

session_start(); // Starting Session
//echo "session started";

$error=''; // Variable To Store Error Message



// Define $username and $password
if(isset($_POST['uname']))
{ 
	$username = $_POST['uname']; 
} 

if(isset($_POST['psw']))
{ 
	$password = $_POST['psw']; 
} 


 
$servername = "localhost";
$username_server = "root";
$password_server = "";


// Create connection
$conn =mysqli_connect($servername, $username_server, $password_server) ;

if(!$conn)
die('Could not connect: ' . mysqli_connect_error());
//echo $username;
//echo $password;
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
echo $username;
echo $password;
//select database
$sql = 'SELECT admin_username,admin_password FROM instructor_log';
mysqli_select_db($conn,'iti');
$retval = mysqli_query( $conn,$sql );

// SQL query to fetch information of registerd users and finds user match.
$sql = 'SELECT ins_username,ins_password FROM instructor_log';
mysqli_select_db($conn,'iti');
$retval = mysqli_query( $conn,$sql );

if(! $retval ) {
      die('Could not get data: ' . mysqli_connect_error());
   }
  
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

	   			
		if((md5($password)==$row['ins_password']) and ($username==$row['ins_username']))
		{
			//echo "access granted";

			$_SESSION['login_user']=$username; // Initializing Session
			header("location:instructorpanel.html");
	
		}
		else
		$error = "Username or Password is invalid"; 
		echo $error;
   }
  mysqli_close($conn); 






?>
