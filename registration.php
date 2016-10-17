<?php

session_start(); // Starting Session
echo "session started";

$error=''; // Variable To Store Error Message
//echo $name;
$college = $_POST['instructor_college']; 
echo $_POST['instructor_college'];


// Define $username and $password
if(isset($_POST['instructor_name']))
{ 
	$name = $_POST['instructor_name']; 
} 
if(isset($_POST['instructor_college']))
{ 
	$college = $_POST['instructor_college']; 
} 

if(isset($_POST['instructor_trade']))
{ 
	$trade = $_POST['instructor_trade']; 
} 
if(isset($_POST['instructor_user']))
{ 
	$username = $_POST['instructor_user']; 
} 
if(isset($_POST['instructor_password']))
{ 
	$password = $_POST['instructor_password']; 
} 





$servername = "localhost";
$username_server = "root";
$password_server = "";


// Create connection
$conn =mysqli_connect($servername, $username_server, $password_server) ;

if(!$conn)
die('Could not connect: ' . mysqli_connect_error());

// To protect MySQL injection for Security purpose
$name = stripslashes($name);
$college=stripslashes($college);
$college=stripslashes($college);
$username=stripslashes($username);
$password = stripslashes($password);
$name = mysqli_real_escape_string($conn,$name);
$college = mysqli_real_escape_string($conn,$college);
$trade = mysqli_real_escape_string($conn,$trade);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

//select database
$sql = "INSERT INTO instructor_log (ins_name, ins_clg, ins_trade, ins_username, ins_password) VALUES ($name,$college,$trade,$username,$password)";
mysqli_select_db($conn,'iti');
$retval = mysqli_query( $conn,$sql );

// SQL query to fetch information of registerd users and finds user match.
$sql = 'SELECT admin_username,admin_password FROM admin_log';
mysqli_select_db($conn,'iti');
$retval = mysqli_query( $conn,$sql );

if ($retval) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  mysqli_close($conn); 






?>
