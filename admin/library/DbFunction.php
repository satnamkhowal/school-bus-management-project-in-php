<?php
	session_start();
	include_once("DbConnect.php");
	class DbFunction
	{
			function __construct()
			{
				$ob=new DbConnect();
			}	
			function __destruct()
			{
				
			}
			function adminLogin($email,$password)
			{
				$qr=mysql_query("select * from admin_login where email='$email' and password='$password'");
				$arr=mysql_fetch_array($qr);
				$num_record=mysql_num_rows($qr);
				if($num_record>0)
				{
						$_SESSION['email']=$arr['email'];
						$_SESSION['password']=$arr['password'];
						$_SESSION['admin_id']=$arr['admin_id'];
						$_SESSION['user_name']=$arr['user_name'];
						$_SESSION['login']=true;
						return true;
				}
				else
				{
					return false;	
				}
			}
			function adminLogout()
			{
				unset($_SESSION['email']);
				unset($_SESSION['password']);
				unset($_SESSION['admin_id']);
				unset($_SESSION['user_name']);
				unset($_SESSION['login']);
				return 1;	
			}
			function checkUser()
			{
				if(!isset($_SESSION['login']))
				{
					header("location:login.php");	
				}
			}
			function addBusStand($busStandName)
			{
				$addBusStand=mysql_query("INSERT INTO `bus_stands`(`bus_stand_name`) VALUES ('$busStandName')");
				return $addBusStand;	
			}
			function select_Bus_stand()
			{
				$qr=mysql_query("select * from bus_stands");	
				return $qr;
			}
			function upStBusStand($status,$bus_stand_id)
			{
					$qr=mysql_query("UPDATE `bus_stands` SET `status`='$status' WHERE `bus_stand_id`=$bus_stand_id");
					return $qr;
			}
			function select_stand_id($bus_stand_id)
			{
				$qr=mysql_query("SELECT `bus_stand_name`, `status` FROM `bus_stands` WHERE `bus_stand_id`='$bus_stand_id'");		
				return $qr;
			}
			function upBusStand($BusStandName,$bus_stand_id)
			{
				$qr=mysql_query("UPDATE `bus_stands` SET `bus_stand_name`='$BusStandName' WHERE `bus_stand_id`='$bus_stand_id'");
				return $qr;	
			}
			function select_bus_type()
			{
				$qr=mysql_query("select * from vehicle_type");	
				return $qr;
			}
			function select_vehicle_type_id($vehicle_type_id)
			{
				$qr=mysql_query("SELECT * FROM `vehicle_type` WHERE vehicle_type_id='$vehicle_type_id'");	
				return $qr;
			}
			function upload_image($image,$upload_path)
{
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $image["name"]);
	$extension = end($temp);
	if ((($image["type"] == "image/gif")
	|| ($image["type"] == "image/jpeg")
	|| ($image["type"] == "image/jpg")
	|| ($image["type"] == "image/pjpeg")
	|| ($image["type"] == "image/x-png")
	|| ($image["type"] == "image/png"))
	&& in_array($extension, $allowedExts))
	{
		if ($image["error"] > 0)
		{
			echo "Return Code: " .$image["error"] . "<br>";
		}	
		else
		{
			if (file_exists($upload_path.$image["name"]))
			{
				echo $image["name"] . " already exists. ";
			}
			else
			{
				$new_name=rand(0000,9999).".".$extension;
				move_uploaded_file($image["tmp_name"],$upload_path.$new_name);
				return $upload_path.$new_name;
			}
		}
	}
	else
	{
		echo "not upload this file";
	}
}
	function select_from_vehicle_route()
	{
		$qr=mysql_query("SELECT * FROM `vehicle_route`");
		return $qr;	
	}
	function selectFromstudents()
			{
				return mysql_query("SELECT * FROM `students`");	
			}
			function user_reg($UserName,$UserEmail,$password)
			{
					return mysql_query("INSERT INTO `user_login`(`user_name`, `email`, `password`) VALUES ('$UserName','$UserEmail','$password')");
			}
	}
	function user_login($Email,$Password)
	{
		return mysql_query("SELECT * FROM `user_login` WHERE email='$Email' and passwor='$Password'");	
	}
?>