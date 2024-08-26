<?php
	header("Content-Type: text/plain");
	include_once("library/DbFunction.php");
	$dbFun=new DbFunction();
	if(isset($_REQUEST['admin']))
	{
		if($_REQUEST['admin']=='login')
		{
		$eMail=$_REQUEST['email1'];
		$pAss=$_REQUEST['password1'];
		//$cHeck=$_REQUEST['check'];
		$admin_login=$dbFun->adminLogin($eMail,$pAss);
		if($admin_login)
		{	
			header("location:home.php");
		}
		else
		{
			header("location:login.php?msg=Email or Password not match");	
		}
		}
		if($_REQUEST['admin']=='logout')
		{
			$admin_logout=$dbFun->adminLogout();
			if($admin_logout)	
			{
				header("location:login.php");	
			}
		}
		if($_REQUEST['admin']=='AddBusStand')
		{
			$BusStandName=$_REQUEST['BusStandName'];
			$addBusStand=$dbFun->addBusStand($BusStandName);
			if($addBusStand)
			{
				header("location:AddBusStand.php?msg=successfully");	
			}
		}
		if($_REQUEST['admin']='status')
		{
			$status=$_REQUEST['status'];
			$bus_stand_id=$_REQUEST['bus_stand_id'];
			$upStBusStand=$dbFun->upStBusStand($status,$bus_stand_id);
			if($upStBusStand)
			{
				header("location:AddBusStand.php");	
			}
		}
	}
	if(isset($_REQUEST['admin2']))
	{
		if($_REQUEST['admin2']=='upStandName')
		{
			 $BusStandName=$_REQUEST['BusStandName'];
			$bus_stand_id=$_REQUEST['bus_stand_id'];
			$upBusStand=$dbFun->upBusStand($BusStandName,$bus_stand_id);
			//echo "df";
			if($upBusStand)
			{
				header("location:AddBusStand.php?msg=successfully");	
			}
		}
		if($_REQUEST['admin2']=='delstandName')
		{
				$bus_stand_id=$_REQUEST['bus_stand_id'];
				$qr=mysql_query("DELETE FROM `bus_stands` WHERE bus_stand_id='$bus_stand_id'");	
				header("location:AddBusStand.php");
		}
		if($_REQUEST['admin2']=='addVehicle')
		{
			$VehicleType=$_REQUEST['VehicleType'];
			
			$qr=mysql_query("INSERT INTO `vehicle_type`(`vehicle_type_name`) VALUES ('$VehicleType')");	
			if($qr)
			{
				header("location:BusType.php?msg=Successfully");
			}
		}
		if($_REQUEST['admin2']=='st_bus_type')
		{
				$status=$_REQUEST['status'];
				$vehicle_type_id=$_REQUEST['vehicle_type_id'];
				$qr=mysql_query("UPDATE `vehicle_type` SET `status`='$status' WHERE `vehicle_type_id`='$vehicle_type_id'");
				if($qr)
				{
					header("location:BusType.php?msg=Successfully");	
				}
		}
		if($_REQUEST['admin2']=='upvehicletype')
		{
			$vehicle_type_id=$_REQUEST['vehicle_type_id'];
			$VehicleType=$_REQUEST['VehicleType'];
			$qr=mysql_query("UPDATE `vehicle_type` SET `vehicle_type_name`='$VehicleType' WHERE `vehicle_type_id`='$vehicle_type_id'");
			if($qr)
			{
				header("location:BusType.php?msg=Successfully");	
			}
				
		}
		if($_REQUEST['admin2']=='del_vehicle_type')
		{
			$vehicle_type_id=$_REQUEST['vehicle_type_id'];
			$qr=mysql_query("DELETE FROM `vehicle_type` WHERE vehicle_type_id='$vehicle_type_id'");
			if($qr)
			{
				header("location:BusType.php?msg=Successfully");
			}
		}
		if($_REQUEST['admin2']=='addRoute')
		{
				$vehicle_type=$_REQUEST['vehicle_type'];
				$VehicleNumber=$_REQUEST['VehicleNumber'];
				$DriverName=$_REQUEST['DriverName'];
				$ConductorName=$_REQUEST['ConductorName'];
				$driver_mob_number=$_REQUEST['driver_mob_number'];
				$conductor_mobile_number=$_REQUEST['conductor_mobile_number'];
				$RouteNumber=$_REQUEST['RouteNumber'];
				$RouteMap=$dbFun->upload_image($_FILES['RouteMap'],'upload/');
				$GMapCode=$_REQUEST['GMapCode'];
				$StratingPoint=$_REQUEST['StratingPoint'];
				$BusVia=$_REQUEST['BusVia'];

					$qr=mysql_query("INSERT INTO `vehicle_route`(`vehicle_type_name`, `vehicle_number`, `driver_name`, `conductor_name`, `driver_mob_number`, `conductor_mobile_number`, `route_number`, `route_map`, `g_map_code`, `starting_bus_stand`, `via_bus_stand`) VALUES ('$vehicle_type','$VehicleNumber','$DriverName','$ConductorName','$driver_mob_number','$conductor_mobile_number','$RouteNumber','$RouteMap','$GMapCode','$StratingPoint','$$ss[$i]')");
	
					if($qr)
					{
						header("location:AddRoot.php?msg=Successfully");	
					}
				}
				if($_REQUEST['admin2']=='route_status')
				{
					$vehicle_route_id=$_REQUEST['vehicle_route_id'];
					$status=$_REQUEST['status'];
					$qr=mysql_query("UPDATE `vehicle_route` SET `status`='$status' WHERE `vehicle_route_id`='$vehicle_route_id'");
					if($qr)
					{
						header("location:AddRoot.php?msg=Successfully");
					}
						
				}
				if($_REQUEST['admin2']=='UpdateRoute')
				{	
							$vehicle_route_id=$_REQUEST['vehicle_route_id'];
								$vehicle_type=$_REQUEST['vehicle_type'];
							$VehicleNumber=$_REQUEST['VehicleNumber'];
							$DriverName=$_REQUEST['DriverName'];
							$ConductorName=$_REQUEST['ConductorName'];
							$driver_mob_number=$_REQUEST['driver_mob_number'];
							$conductor_mobile_number=$_REQUEST['conductor_mobile_number'];
							$RouteNumber=$_REQUEST['RouteNumber'];
							$RouteMap=$dbFun->upload_image($_FILES['RouteMap'],'upload/');
							$StratingPoint=$_REQUEST['StratingPoint'];
							$BusVia=$_REQUEST['BusVia'];
							//echo "UPDATE `vehicle_route` SET `vehicle_type_name`='$vehicle_type',`vehicle_number`='$VehicleNumber',`driver_name`='$DriverName',`conductor_name`='$ConductorName',`driver_mob_number`='$driver_mob_number',`conductor_mobile_number`='$conductor_mobile_number',`route_number`='$RouteNumber',`route_map`='$RouteMap',`starting_bus_stand`='$StratingPoint',`via_bus_stand`='$BusVia' WHERE `vehicle_route_id`='$vehicle_route_id'";
			$qr=mysql_query("UPDATE `vehicle_route` SET `vehicle_type_name`='$vehicle_type',`vehicle_number`='$VehicleNumber',`driver_name`='$DriverName',`conductor_name`='$ConductorName',`driver_mob_number`='$driver_mob_number',`conductor_mobile_number`='$conductor_mobile_number',`route_number`='$RouteNumber',`route_map`='$RouteMap',`starting_bus_stand`='$StratingPoint',`via_bus_stand`='$BusVia' WHERE `vehicle_route_id`='$vehicle_route_id'");
				
								if($qr)
								{
									header("location:AddRoot.php?msg=Successfully");	
								}	
				}
				if($_REQUEST['admin2']=='addStudent')
				{
						$StName=$_REQUEST['StName'];
						$fName=$_REQUEST['fName'];
						$mName=$_REQUEST['mName'];
						$StPhoto=$dbFun->upload_image($_FILES['StPhoto'],'upload/');
						$HomeBusStand=$_REQUEST['HomeBusStand'];
						$RouteNumber=$_REQUEST['RouteNumber'];
						$StPhoneNumber=$_REQUEST['StPhoneNumber'];
						$PMobileNumber=$_REQUEST['PMobileNumber'];
						$qr=mysql_query("INSERT INTO `students`(`st_name`, `f_name`, `m_name`, `st_photo`, `home_bus_stand_name`, `route_number`, `st_mobile`, `p_mobile`) VALUES ('$StName','$fName','$mName','$StPhoto','$HomeBusStand','$RouteNumber','$StPhoneNumber','$PMobileNumber')");
				if($qr)
				{
					header("location:AddStudent.php?msg=successfully");	
				}
						
				}
				if($_REQUEST['admin2']=='upStudent')
				{
					$student_id=$_REQUEST['student_id'];
					$StName=$_REQUEST['StName'];
						$fName=$_REQUEST['fName'];
						$mName=$_REQUEST['mName'];
						$StPhoto=$dbFun->upload_image($_FILES['StPhoto'],'upload/');
						$HomeBusStand=$_REQUEST['HomeBusStand'];
						$RouteNumber=$_REQUEST['RouteNumber'];
						$StPhoneNumber=$_REQUEST['StPhoneNumber'];
						$PMobileNumber=$_REQUEST['PMobileNumber'];
					$qr=mysql_query("UPDATE `students` SET `st_name`='$StName',`f_name`='$fName',`m_name`='$mName',`st_photo`='$StPhoto',`home_bus_stand_name`='$HomeBusStand',`route_number`='$RouteNumber',`st_mobile`='$StPhoneNumber',`p_mobile`='$PMobileNumber' WHERE student_id='$student_id'");
					if($qr)
					{	
						header("location:AddStudent.php?msg=successfully");
					}
				}
	}
	if(isset($_REQUEST['user']))
	{
		if($_REQUEST['user']=='reg')
		{
					
		}
	}
?>
