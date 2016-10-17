<?php

include 'config.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);

	if(!isset($_SESSION['logged']))
	{
		echo '<script>window.location="adminlogin.php";</script>';
	}
?>
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
    
    <!-- Script for dynamic select box-->
    <script type="text/javascript">
 
 // array of possible countries in the same order as they appear in the country selection list 
 var tradeLists = new Array(9) 
 tradeLists["empty"] = ["Select a Trade"]; 
 tradeLists["Barasat-1"] = ["Fitter","Electronic-Mechanic","Copa","Electrician"]; 
 tradeLists["Basanti"] = ["Electronic-Mechanic","Fitter","RAC","Surveyor","Welder","Dress Making","MMV","Copa"]; 
 tradeLists["Canning-1"] = ["Draughman Mechanical","Electrician","Fitter","Plumber","Surveyor","Welder","Copa"]; 
 tradeLists["Canning-2"]= ["Electrician","Electronic-Mechanic","Fitter","Surveyor","Welder","Sweing Technology"];
 tradeLists["Hallisahar"]= ["Electronic-Mechanic","Fitter","Welder","Surveyor","Basic Cosmetology"];
 tradeLists["Hili"]= ["Electrician","fitter","Welder","Electronic Mechanic","Surveyor","Dress Making","Copa","RAC"];
 tradeLists["Kumarganj"]= ["Electrician","Fitter","RAC","Mechanic Diseal","Copa"];
 tradeLists["Tapan"]= ["Electrician","Fitter","Welder","Electronic Mechanic","Dress Making","RAC"];
 
  
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function tradeChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = tradeLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("trade"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
 
 function checkField(selectObj){
	 if(document.getElementById("college").value=="empty")
	 {
		 document.getElementById("alert").style.display="block";
		 }
		 else{
		 document.getElementById("alert").style.display="none";
		  $.get("fetchdata.php");
    //return false;
		 }
	 }
	 
	 


//]]>
</script>

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
                <a class="navbar-brand" href="adminpanel.php" >Admin Dashboard: ITI</a>
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
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="adminpanel.php"><i class="fa fa-fw fa-database"></i> Inventory</a>
                    </li>
                    <li >
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
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Inventory <small>Administration Mode</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-database"></i> Inventory
                            </li>
                        </ol>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-anchor fa-fw"></i> Select Inventory</h3>
                            </div>
                            <div class="panel-body">
                            <div class="alert alert-danger fade in" id="alert" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sorry!!!</strong> Please Select a college.
  </div>
                          <form action="#" method="post">
                                 <div class="form-group">
                                 
                                <label for="college">Select College</label>
                                
                                <select name="collage" class="form-control" id="college" onchange="tradeChange(this);" >
                                 <option value="empty">Select a College</option>
                                    <option value="Barasat-1">Barasat-1</option>
                                    <option value="Basanti">Basanti</option>
                                    <option value="Canning-1">Canning-1</option>
                                    <option value="Canning-2">Canning-2</option>
                                    <option value="Hallisahar">Hallisahar</option>
                                    <option value="Hili">Hili</option>
                                    <option value="Kumarganj">Kumarganj</option>
                                    <option value="Tapan">Tapan</option>
                                </select>
                                
                                 <label for="trade">Select Trade</label>
                                
                                <select name="trade" class="form-control"  id="trade" >
                                    <option value="0">Select a Trade</option>
                                   
                                </select>
                            </div>
                            
                                <input type="submit" name="sub" class="btn btn-success" style="float:right;" onClick="checkField(this);" value="Done"  >
                                </form>
                            </div>
                            
                            
                       
                            
                            
                        </div>
                    </div>
                    <div  class="col-lg-12"> 
                          <table  class="table table-bordered table-hover table-striped">
                           <thead>
                                            <tr>
                                                <th>&nbsp;College Name</th>
                                                <th>&nbsp;Trade Name</th>
                                                <th>&nbsp;Instructor</th>
                                                <th>&nbsp;Item</th>
                                                <th>&nbsp;Prev Qty</th>
                                                
                                                <th>&nbsp;Curr Qty</th>
                                                <th>&nbsp;Remarks</th>
                                            </tr>
                                        </thead>
                                        </table> 
                                        </div>
                                  
                        <?php

if(isset($_POST['sub']))
{
	$trade=$_POST['trade'];
	$collage=$_POST['collage'];
	



	
 $data = mysql_query("select * from inventory where college_name='$collage' AND trade_name='$trade'")

or die(mysql_error('No Records Found'));


$count = mysql_num_rows( $data);
if($count > 0)
	
	{
while($row2 = mysql_fetch_array( $data ))


{

	//$clg=$row2['college_name'];
	//$trd= $row2['trade_name'];
	
	
	
		
		
                        
    ?>                    
                        
                       
        <div  class="col-lg-12"> 
                          <table  class="table table-bordered table-hover table-striped">
                          
                                        <tbody>
                                         <tr>
  
    <td><p>&nbsp;&nbsp;<?php echo $row2['college_name']; ?></p></td>
   
    <td><p>&nbsp;&nbsp;<?php echo $row2['trade_name']; ?></p></td>
   
    <td><p>&nbsp;&nbsp;<?php echo $row2['instructor']; ?></p></td>
   
    <td><p>&nbsp;&nbsp;<?php echo $row2['item']; ?></p></td>
    
    <td><p>&nbsp;&nbsp;<?php echo $row2['prev_qty']; ?></p></td>
   
    <td><p>&nbsp;&nbsp;<?php echo $row2['curr_qty']; ?></p></td>
   
    <td><p>&nbsp;&nbsp;<?php echo $row2['remarks']; ?></p></td>
  </tr> 
                                       
                                        </tbody>
                                        </table> 
                           
                         
 
   </div> 




<?php
}
}
	
		  
		
	
	else 
	{
		
		
		echo '<script>
					alert("Record not Found.......");
					window.location="adminpanel.php";</script>';
	}
	
	
}
	



?>
        
                    
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
