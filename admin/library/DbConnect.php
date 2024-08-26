<?php
class DbConnect
{
	function __construct()
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("bus");
		if(!$conn)
		{
			die("cann't connect database");	
		}
		return $conn;
		mysql_close();
	}
}	
?>