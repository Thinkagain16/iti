<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ITI Inventory Management System">
    <meta name="author" content="Robosapiance">

    <title>Inventory Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background: linear-gradient(  gray,black); ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminpanel.html" >Admin Dashboard: ITI</a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- messege drop down-->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>welcome Admin</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                       
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                
                <!-- notification dropdown-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Default <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Primary <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Success <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Info <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Warning <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">danger <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                
                <!-- Admin button dropdown-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="adminpanel.html"><i class="fa fa-fw fa-database"></i> Inventory</a>
                    </li>
                    <li class="active">
                        <a href="register.html"><i class="fa fa-fw fa-plus" aria-hidden="true"></i> Register</a>
                    </li>
                     <li >
                        <a href="help.html"><i class="fa fa-fw  fa-search"></i> Help</a>
                    </li>
                     <li >
                        <a href="credential.html"><i class="fa fa-fw  fa-briefcase"></i> Credentials</a>
                    </li>
                          </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row" style="border-radius:5px; border-color:#333">
                    
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-plus"></i>Results
                            </li>
                        </ol>
                    </div>
                </div>
                 <div class="row" name="newreg">
                    <div class="col-lg-6">
                         <div class="panel panel-default">
                            
                           
                      <div class="col-lg-6">
                        <h1 class="page-header">
                        
                        <?php
include 'db.php';
echo $_POST['sub'];
if(isset($_POST['sub']))
{
	$trade=$_POST['trade'];
	$collage=$_POST['college'];
	
//echo $trade    .   $cpllage;



	
 $data = mysqli_query($conn,"select * from inventory")

or die(mysql_error('No Records Found'));


while($row2 = mysqli_fetch_array( $data, MYSQLI_ASSOC ))

{

	$clg=$row2['college_name'];
	$trd= $row2['trade_name'];
	
					
						
						
	if($collage==$clg && $trade==$trd)
	
	{
		
		?>
                        
                        
   <div class="table-responsive">                       
 <table  class="table">
 <thead>
      <tr>
        
        <th>College Name</th>
        <th>Trade Name</th>
        <th>Instructor</th>
        <th>Item</th>
        <th>Previuos Quantity</th>
        <th>Current Quantity</th>
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody>
  <tr>
  
    <td><p><?php echo $row2['college_name']; ?></p></td>
   
    <td><p><?php echo $row2['trade_name']; ?></p></td>
   
    <td><p><?php echo $row2['instructor']; ?></p></td>
   
    <td><p><?php echo $row2['item']; ?></p></td>
    
    <td><p><?php echo $row2['prev_qty']; ?></p></td>
   
    <td><p><?php echo $row2['curr_qty']; ?></p></td>
   
    <td><p><?php echo $row2['remarks']; ?></p></td>
  </tr>
  </tbody>
</table>
</div>


<?php

}
	
	else 
	{
		
		
		echo '<script>
						alert("Record not Found.......");
						window.location="adminpanel.php";</script>';
	}
	
	
}
	
}


?>
                        </h1>
                      </div>
                        
                   
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
