<?php 
	header("Content-Type: text/plain");
	include_once("admin/library/DbFunction.php");
	$dbFun=new DbFunction();
	if(isset($_REQUEST['user']))
	{
		if($_REQUEST['user']=='reg')
		{
			$UserName=$_REQUEST['UserName'];
			$UserEmail=$_REQUEST['UserEmail'];
			$password=$_REQUEST['password'];	
			$password2=$_REQUEST['password2'];
			if($password=$password2)
			{
				$reg=$dbFun->user_reg($UserName,$UserEmail,$password);
				if($reg)
				{
						header("location:index.php?msg=successfully");
				}
			}
		}
		if($_REQUEST['user']='user_login')
		{
			$Email=$_REQUEST['Email'];
			$Password=$_REQUEST['Password'];	
			$qr=$dbFun->user_login($Email,$Password);
			$aRr=mysql_fetch_array($qr);
				$nUmRecord=mysql_num_rows($qr);
			if($nUmRecord>0)
			{
				echo "dfkjh";
			}
		}
	}
?>
