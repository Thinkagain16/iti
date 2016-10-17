<?php
	include('config.php');
	function select_data($tobe_selected,$table_name,$where_clause)
	{
		$query="select"." ".$tobe_selected." "."from"." ".$table_name." ".$where_clause;
		$resource=mysql_query($query);
		return($resource);
	}
	
	function edit_data($table_name,$set_clause,$where_clause)
	{
	    $query="update"." ".$table_name." ".$set_clause." ".$where_clause;
		$resource=mysql_query($query);
		return($resource);
	}
	
	function delete_data($table_name,$where_clause)
	{
		$query="delete"." "."from"." ".$table_name." ".$where_clause;
		$resource=mysql_query($query);
		return($resource);
	}
	
	function insert_data($table_name,$set_clause,$where_clause)
	{
		$query="insert"." "."into"." ".$table_name." ".$set_clause." ".$where_clause;
		//echo $query;
		$resource=mysql_query($query);
		return($resource);
	}

?>