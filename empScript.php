<?php
	$server="localhost";
	$user="root";
	$pass='';
	$db="s1";
	$conn=mysqli_connect($server,$user,$pass,$db);
	if(!$conn)
	{
		die("Connection Failed".mysqli_connect_error());
	}
	$ecode=$_POST['code_txt'];
	$ename=$_POST['name_txt'];
	$edept=$_POST['dept_txt'];
	$edes =$_POST['des_txt'];
	$sql="Insert into Employee(Empcode,Empname,Empdept,Empdes) values('$ecode','$ename','$edept','$edes')";
	if(mysqli_query($conn,$sql))
	{
		echo "Record Added Successfully....!";
	}
	else
	{
		echo "error";
	}
		mysqli_close($conn);
?>