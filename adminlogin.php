 <?php
 include 'function.php';


			if(isset($_REQUEST['submit']))
			{
				$user_id = $_REQUEST['userid'];
				$pass = $_REQUEST['password'];
				$tobeselected='*';
				$table_name='admin_log';
				//$set_clause="set cat_name='".$_REQUEST['name']."'".","."status='".$_REQUEST['status']."'";
				$where_clause="where admin_username = '".$user_id."' and admin_password = '".$pass."' ";
				$resouce_query=select_data($tobeselected,$table_name,$where_clause);
				$count = mysql_num_rows($resouce_query);
				if($count > 0)
				{
					$row = mysql_fetch_array($resouce_query);
					$_SESSION['logged'] = true;
					$_SESSION['user']['id'] = $row['id'];
					$_SESSION['user']['name'] = $row['user_name'];
					$_SESSION['user']['login_time'] = time();
					$_SESSION['user']['login_ip'] = $_SERVER['REMOTE_ADDR'];
					
					header("Location:adminpanel.php");
				}
				else
				{
					$_SESSION['logged'] = false;
					echo '<script>
						alert("UserID or Password are incorrect.");
						window.location="adminlogin.php";</script>';
				}
			}
		?>


<!DOCTYPE html>
<html>
<head>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}



.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 20px 0 10px 0;
}

img.avatar {
    width: 15%;
    border-radius: 70%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 50%;
    }
}
</style>
</head>
<body>



<h2>Administration Login</h2>

<form action="#" method="post">
  <div class="imgcontainer">
    <img src="Pics/avatar.png" alt="Avatar" width="20%" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="userid" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <input name="submit" type="submit" value="Login">
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
